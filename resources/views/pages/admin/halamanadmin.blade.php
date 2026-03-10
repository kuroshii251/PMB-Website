
@extends('pages.layouts.headeradmin')
@section('content')
    <main class="p-10">

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-blue-600 text-white rounded-2xl p-6 shadow-lg">
                <h2 class="text-lg font-semibold">Total User</h2>
                <p class="text-3xl font-bold mt-4">
                    {{ $dataUser?->count() ?? 0 }}
                </p>
            </div>

            <div class="bg-indigo-600 text-white rounded-2xl p-6 shadow-lg">
                <h2 class="text-lg font-semibold">Total Form</h2>
                <p class="text-3xl font-bold mt-4">
                    {{ $dataform?->count() ?? 0 }}
                </p>
            </div>

            <div class="bg-green-600 text-white rounded-2xl p-6 shadow-lg">
                <h2 class="text-lg font-semibold">Total Lulus</h2>
                <p class="text-3xl font-bold mt-4">
                    {{ $dataLulus?->count() ?? 0 }}
                </p>
            </div>

        </div>

    </main>
@endsection
