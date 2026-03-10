<?php

namespace App\Http\Controllers;

use App\Models\Form;
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
        'email'=>'required',
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
        $datas = Form::latest()->get();
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
$datas=Form::where('id', $id)->where( 'user_id', auth()->id())->firstOrFail();

 $data = $request->validate([
        'nama'=>'required',
        'email'=>'required',
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

$file = $request->file('foto_pas');
$filename = time().'-'.$file->getClientOriginalName();
$file->move(public_path('/uploads/image/foto_pas'), $filename);
$data['foto_pas'] = $filename;

$datas->update($data);
return view('pages.admin.halamanadmin');

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
