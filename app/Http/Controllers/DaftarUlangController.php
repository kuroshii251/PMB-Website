<?php

namespace App\Http\Controllers;

use App\Models\DaftarUlang;
use Illuminate\Http\Request;

class DaftarUlangController extends Controller
{
public function index(){
return view(view: 'pages.user.daftarulang');
}



public function show(){
 $datas = DaftarUlang::latest()->get();
        return view('pages.admin.daftarulangform', compact('datas'));
}

public function create(){
return view('pages.admin.tambahformdaftarulang')->with('success', 'berhasil');
}

public function store(Request $request)
{
    $data = $request->validate([
        'bukti_kelulusan'   => 'required|file',
        'ijazah'            => 'required|file',
        'kartu_keluarga'    => 'required|file',
        'ktp'               => 'required|file',
        'akte_kelahiran'    => 'required|file',
    ]);

$files=[
        'bukti_kelulusan',
        'ijazah',
        'kartu_keluarga',
        'ktp',
        'akte_kelahiran',
    ];

$data['user_id']=auth()->id();
$data['nama']=auth()->user()->forms()->latest()->first()->nama;
$data['jurusan']=auth()->user()->forms()->latest()->first()->jurusan;
   foreach ($files as $fileField) {
        if ($request->hasFile($fileField)) {
            $file = $request->file($fileField);
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('uploads/image/daftarulang'), $filename);
            $data[$fileField] = $filename;

        }





    }
  auth()->user()->daftarulangs()->create($data);

    return view('pages.user.dashboard')->with('succcess', 'Berhasil');



}





public function tambahNim($id){

$nims = DaftarUlang::max('nim');

 $newNim = $nims ? $nims + 1 : 100001;

    DaftarUlang::where('id', $id)
        ->update([
            'nim' => $newNim
        ]);

    return redirect()->back()->with('success', 'NIM otomatis dibuat');
}






public function delete(){

}
public function destroy($id){
$data =DaftarUlang::findOrFail($id);
$data->delete();
return view('pages.admin.halamanadmin');
}
public function edit(){
//
}

  public function update(Request $request, string $id)
    {
$datas=DaftarUlang::where('id', $id)->where( 'user_id', auth()->id())->firstOrFail();

 $data = $request->validate([
        'bukti_kelulusan'=>'required',
        'ijazah'=>'required',
        'kartu_keluarga'=>'required',
        'ktp'=>'required',
        'akte_kelahiran'=>'required',
        ]);

$file= $request->file('ijazah');
$filename=time().'-ijazah'.$file->getClientOriginalName();
$file->move(public_path('/uploads/images/daftarulang'),$filename);
$data['ijazah']=$filename;


$file= $request->file('kartu_keluarga');
$filename=time().'-kartu_keluarga'.$file->getClientOriginalName();
$file->move(public_path('/uploads/images/daftarulang'),$filename);
$data['kartu_keluarga']=$filename;

$file= $request->file('ktp');
$filename=time().'-ktp'.$file->getClientOriginalName();
$file->move(public_path('/uploads/images/daftarulang'),$filename);
$data['ktp']=$filename;

$file= $request->file('tes_kesehatan');
$filename=time().'-tes_kesehatan'.$file->getClientOriginalName();
$file->move(public_path('/uploads/images/daftarulang'),$filename);
$data['tes_kesehatan']=$filename;

$file= $request->file('akte_kelahiran');
$filename=time().'-akte_kelahiran'.$file->getClientOriginalName();
$file->move(public_path('/uploads/images/daftarulang'),$filename);
$data['akte_kelahiran']=$filename;

$datas->update($data);
return view('pages.admin.halamanadmin');

    }

}
