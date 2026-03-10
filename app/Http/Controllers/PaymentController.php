<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     *
     *
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.user.payment');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
{
    $data = $request->validate([
        'foto_payment' => 'required|image|mimes:png,jpg,jpeg|max:2048',
    ]);

    if ($request->hasFile('foto_payment')) {
        $file = $request->file('foto_payment');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('uploads/payment'), $filename);
        $data['foto_payment'] = $filename;
    }
    $data['kode_tes'] = 'TES-' . strtoupper(uniqid());
    $data['user_id'] = auth()->id();

    Payment::create($data);
    return view('pages.user.berhasilpayment')
        ->with('kode_tes', $data['kode_tes']);
}


    public function show(string $id)
    {
$datas=Payment::latest()->get();
return view('pages.admin.daftarform', compact('data'));
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
        $datas = Payment::findOrFail($id);

        $data = $request->validate([
            'foto_payment' => 'required|mimes:png,jpg',
        ]);
        $file = $request->file('foto_pas');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('/uploads/image'), $filename);
        $data['foto_pas'] = $filename;
        $datas->update($data);
        return redirect()->to('/payment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Payment::findOrFail($id);
        $data->delete();
        return view(' .admin.halamanadmin');
    }


}
