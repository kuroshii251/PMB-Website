<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Payment;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
return view('pages.user.form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$data = $request->validate([
        'nama'=>'required',
            'email' => 'required|email',
        'jurusan'=>'required',
        'jenis_kelamin'=>'required',
        'agama'=>'required',
        'tempat_lahir'=>'required',
        'tanggal_lahir'=>'required',
        'foto_pas'=>'required|mimes:jpeg,png,jpg|max:2048',
        'nisn'=>'required',
        'nomor_telepon'=>'required|numeric',
        'asal_sekolah'=>'required',
        'nik'=>'required|digits:16'
        ]);

if($request->hasFile('foto_pas')){

$file = $request->file('foto_pas');
$filename = time().'-'.$file->getClientOriginalName();
$file->move(public_path('/uploads/image/foto_pas'), $filename);
$data['foto_pas'] = $filename;

}
    auth()->user()->forms()->create($data);
    return redirect()->to('/berhasilform');


    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }


public function showForm()
    {
        $datas = Form::with('user.payments')->latest()->get();
        return view('pages.admin.daftarform', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
    {
        $form = Form::findOrFail($id);
        $user = $form->user;

        $validateData = $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nisn' => 'required',
            'nomor_telepon' => 'required|numeric',
            'asal_sekolah' => 'required',
            'nik' => 'required|digits:16',
'foto_pas' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'foto_payment' => 'nullable|mimes:png,jpg,jpeg|max:2048'
        ]);

        // Update Form - preserve foto_pas if no new
        if (!isset($validateData['foto_pas'])) {
            unset($validateData['foto_pas']);
        }
        if ($request->hasFile('foto_pas')) {
            $file = $request->file('foto_pas');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('/uploads/image/foto_pas'), $filename);
            $validateData['foto_pas'] = $filename;
        }
        $form->update($validateData);

        // Update Payment foto_payment
        $payment = $user->payments()->first();
        if ($request->hasFile('foto_payment')) {
            $file = $request->file('foto_payment');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('/uploads/payment'), $filename);
            if ($payment) {
                $payment->update(['foto_payment' => $filename]);
            } else {
                Payment::create([
                    'user_id' => $user->id,
                    'foto_payment' => $filename,
                    'kode_tes' => 'EDIT-' . $user->id . time()
                ]);
            }
        }

        return back()->with('success', 'Data berhasil diupdate di Form dan Payment!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $data = Form::findOrFail($id);
$data->delete();
return back()->with("success", "Sukses menghapus data form");


    }


public function Halamanadmin(){
return view('pages.admin.halamanadmin');
}
}
