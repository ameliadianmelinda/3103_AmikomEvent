@extends('layouts.admin')

@section('content')


<div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-lg p-10 mt-12">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-extrabold text-indigo-700">Data Partner</h1>
        <a href="{{ route('admin.partners.create') }}" class="px-6 py-2 bg-indigo-600 text-white rounded-xl font-bold shadow hover:bg-indigo-700 transition">Tambah Partner</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-xl overflow-hidden">
            <thead class="bg-indigo-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-bold text-indigo-700 uppercase">No</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-indigo-700 uppercase">Logo</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-indigo-700 uppercase">Nama Partner</th>
                </tr>
            </thead>
            <tbody>
                @forelse($partners as $partner)
                <tr class="border-b hover:bg-indigo-50">
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">
                        <img src="{{ $partner->logo_url }}" alt="Logo {{ $partner->name }}" class="w-20 h-20 object-contain rounded-xl border border-slate-100 bg-slate-50">
                    </td>
                    <td class="px-6 py-4 font-semibold">{{ $partner->name }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-6 py-8 text-center text-slate-400">Belum ada data partner.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
