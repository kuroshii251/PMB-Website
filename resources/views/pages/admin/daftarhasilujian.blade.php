@extends('pages.layouts.headeradmin')
@section('content')
<div class="">
<h1>Daftar Hasil Ujian</h1>
<table border="1" class="table-auto">

<tr>
<th>Nama</th>
<th>Jurusan</th>
<th>Benar</th>
<th>Salah</th>
</tr>
<tr>
@foreach ($datas as $item )
<td>{{ $item->nama }}</td>
                    <td>{{ $item->nilai }}</td>

@endforeach
</tr>

<div class="">
<a href="">Lulus</a>
<a href="">Tidak Lulus</a>

</div>


</tr>

</table>
</div>
@endsection
