<?php
namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoalController extends Controller
{
 public function create()
{
    return view('pages.admin.tambah');
}
 public function store(Request $request)
{
    $soaldata = $request->validate([
        'pertanyaan' => 'required',
        'opsi_a' => 'required',
        'opsi_b' => 'required',
        'opsi_c' => 'required',
        'opsi_d' => 'required',
        'jawaban' => 'required',
    ]);

    $soaldata['user_id'] = auth()->id();
    Soal::create($soaldata);

    return redirect('/halamanadmin/daftarsoal')->with('success', 'Berhasil tambah soal');
}


public function showSoal()
{
    $data2 = Soal::latest()->get();
    return view('pages.admin.daftarsoal', compact('data2'));
}


public function destroy($id){
$data =Soal::findOrFail($id);
$data->delete();
return view('pages.admin.daftarsoal');
}

public function edit($id){
$data=Soal::where('id', $id)->where('user_id', auth()->id())->firstOrFail();


return view('pages.admin.daftarsoal');

}

public function update(Request $request, $id)
{
    $data = Soal::where('id', $id)
                ->where('user_id', auth()->id())
                ->firstOrFail();

    $validasi = $request->validate([
        'pertanyaan' => 'required',
        'opsi_a' => 'required',
        'opsi_b' => 'required',
        'opsi_c' => 'required',
        'opsi_d' => 'required',
        'jawaban' => 'required'
    ]);

    $data->update($validasi);

    return redirect()->back()
            ->with('success', 'Soal berhasil diupdate');
}


public function index()
{
    $soalPertama = Soal::orderBy('id')->first();
    return view('pages.user.soals', compact('soalPertama'));

}




public function show($id)
{
    $soal = Soal::findOrFail($id);
    return view('pages.user.soal', compact('soal'));
}


    public function jawaban(Request $request, $id)
    {
        $request->validate([
            'jawaban' => 'required',
        ]);

        session()->put("jawaban.$id", $request->jawaban);

        $next = Soal::orderBy('id')->pluck('id')->toArray();
        $index=array_search($id, $next);

        if ($index !== false && isset($next[$index + 1]) ) {
            return redirect()->to('/soal/' .  $next[$index+1]);
        }

        // Simpan hasil ujian ke database
        $soals = Soal::all();
        $jawaban = session('jawaban', []);

        $score = 0;

        foreach ($soals as $item) {
            $userAnswer = $jawaban[$item->id] ?? null;
            $correctAnswer = $item->jawaban;
            $correct = $userAnswer !== null && trim(strtolower($userAnswer)) == trim(strtolower($correctAnswer));
            if ($correct) {
                $score++;
            }
        }

        Result::create([
            'user_id' => Auth::id(),
            'nama' => Auth::user()->name,
            'nilai' => $score,
            'status' => "Pending"
        ]);

        session()->forget('jawaban');

        return view('pages.user.sudahujian');
    }

public function cekResult()
{
    $result = Result::where('user_id', auth()->id())->latest()->first();

    if (!$result) {
        return redirect('/dashboard');
    }

    if ($result->status === 'lulus') {
        return view('pages.user.lulus');
    }

    if ($result->status === 'tidak lulus') {
        return view('pages.user.tidaklulus');
    }

    return view('pages.user.sudahujian');
}

public function main(){
return view('pages.user.index');
}


public function tambahStatusLulus($id){


    Result::where('id', $id)
        ->update([
            'status' => 'lulus'
        ]);

    return redirect()->back()->with('success', 'sukses menambah status');
}

public function tambahStatusTidakLulus($id){

    Result::where('id', $id)
        ->update([
            'status' => 'Tidak Lulus'
        ]);

    return redirect()->back()->with('success', 'sukses menambah status');
}

public function result()
{
    $soal = Soal::all();
    $jawaban = session('jawaban', []);

    $score = 0;

    foreach ($soal as $item) {
        $userAnswer = $jawaban[$item->id] ?? null;
        $correctAnswer = $item->jawaban;
        $correct = $userAnswer !== null && trim(strtolower($userAnswer)) == trim(strtolower($correctAnswer));
        if ($correct) {
            $score++;
        }
    }

   $total = count($soal);


    Result::create([
        'user_id' => Auth::id(),
        'nama' => Auth::user()->name,
        'nilai' => $score,
'status'=>null,
     ]);



session()->forget('jawaban');

  return redirect('/berhasilujian');

}

public function hasilujian(){
$datas = Result::latest()->get();
return view('pages.admin.hasilujian', compact('datas'));

}

public function shows($id)
{
    $soal = Soal::findOrFail($id);
    $soals = Soal::orderBy('id')->get();
    return view('pages.user.soal', compact('soal', 'soals'));
}

}
?>
