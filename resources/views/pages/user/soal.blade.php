@extends('pages.layouts.headeruser')
@section('content')
<div class="max-w-6xl mx-auto mt-10 px-6">

    <div class="bg-blue-600 text-white rounded-2xl p-4 shadow-md mb-8">
        <h1 class="text-xl font-bold">Question {{ $soal->id }} of {{ $soals->count() }}</h1>
    </div>

    <div class="grid grid-cols-3 gap-6">

        <div class="col-span-2">
            <form action="/soal/{{ $soal->id }}" method="POST" class="bg-white p-8 rounded-2xl shadow-lg space-y-6">
                @csrf

                <h2 class="text-2xl font-semibold text-gray-800">{{ $soal->pertanyaan }}</h2>
                <div class="space-y-4">
                  @foreach(['a','b','c','d'] as $option)
    @php
        $value = $option;
        $text = 'opsi_' . $option;
    @endphp
    <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-blue-50">
        <input type="radio" name="jawaban" value="{{ $value }}">
        <span class="pl-5">{{ $soal->$text }}</span>
    </label>
@endforeach

                </div>

                <div class="flex justify-between mt-6">
                    @if($soal->id > 1)
                        <a href="/soal/{{ $soal->id - 1 }}" class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
                            Previous
                        </a>
                    @else
                        <span></span>
                    @endif

                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Next
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-lg">
            <h3 class="font-semibold mb-4 text-gray-700 text-center">All Questions</h3>
            <div class="grid grid-cols-4 gap-3">
                @foreach($soals as $item)
                    <a href="/soal/{{ $item->id }}"
                       class="flex items-center justify-center h-12 w-12 border rounded-lg hover:bg-blue-100 transition
                       {{ $soal->id == $item->id ? 'bg-blue-600 text-white font-bold' : '' }}">
                        {{ $item->id }}
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</div>

@endsection
