@extends('layouts.admin')

@section('content')


<div class="max-w-xl mx-auto bg-white rounded-3xl shadow-lg p-10 mt-12">
    <h1 class="text-3xl font-extrabold mb-8 text-indigo-700">Tambah Partner</h1>
    <form action="{{ route('admin.partners.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label class="block text-sm font-bold mb-2 text-slate-700">Nama Partner</label>
            <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
        </div>
        <div>
            <label class="block text-sm font-bold mb-2 text-slate-700">Logo URL</label>
            <input type="text" name="logo_url" required placeholder="https://placehold.co/200x200" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-xl font-bold shadow-lg hover:bg-indigo-700 transition">Simpan</button>
        </div>
    </form>
</div>

@endsection
