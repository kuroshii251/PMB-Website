@extends('pages.layouts.headeradmin')
@section('content')


<div class="max-w-6xl mx-auto py-10 px-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Daftar User</h1>
    </div>

    <div class="overflow-x-auto bg-white rounded-xl shadow p-5">

    <table class="min-w-250 divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse ($datas as $index => $items)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $items->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $items->email }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="px-6 py-4 text-center text-gray-500">Belum ada data user.</td>
            </tr>
            @endforelse
        </tbody>
    </table>


</div>


</div>
@endsection
