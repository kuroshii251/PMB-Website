<?php

namespace App\Http\Controllers;

use App\Models\DaftarUlang;
use App\Models\Form;
use App\Models\Payment;
use App\Models\Result;
use App\Models\Soal;
use App\Models\User;

class showController extends Controller
{
public function showComponent(){
$dataform=Form::latest()->get();
$dataUser=User::latest()->get();

return view('pages.admin.halamanadmin', compact('dataform', 'dataUser'));


}

public function showUser(){
$datas=User::latest()->get();
return view('pages.admin.daftaruser', compact('datas'));

}



public function dashboard()
{
    $payments = Payment::where('user_id', auth()->id())
                      ->latest()
                      ->first();

    $donedaftarulang = DaftarUlang::where('user_id', auth()->id())->latest()->first();
    $alreadysubmitted = Result::where('user_id', auth()->id())->exists();
$sudahbayar = Payment::where('user_id',auth()->id())->exists();

$sudahform =Form::where('user_id',auth()->id())->exists();


    $alreadyexam = Soal::where('user_id', auth()->id())->exists();
    return view('pages.user.dashboard', compact('payments', 'donedaftarulang','alreadysubmitted', 'sudahbayar', 'alreadyexam', 'sudahform'));
}

public function showKtm(){
    $data1 = Form::where('user_id', auth()->id())->latest()->first();

    $data2 = DaftarUlang::where('user_id', auth()->id())->latest()->first();

return view('pages.user.ktm', compact('data1', 'data2'));
}

public function Ktm()
{
    return view('pages.user.ktm');
}

public function showss(){
return view('pages.user.berhasilpayment');
}


public function showError(){
return view('pages.user.404');
}


public function showUjian(){
return view('pages.user.hasilujian');

}

public function showSoal(){
return view('pages.user.soals');
}






public function showForms(){

if(Form::exists()){
    return redirect( '/berhasilform');


}
return view('pages.halamanadmin.daftarform');

}




public function berhasilform(){
return view('pages.user.berhasilform');
}

public function showDaftarUlang(){
return view('pages.user.daftarulang');
}


public function daftarForm(){
return view('pages.daftarform');
}


public function daftarUlangForm(){
return view('pages.daftarulangform');
}


public function masukgrup(){
return view('pages.user.masukgrup');
}

public function shows(){
return view('pages.user.hasilujian');
}
}

