@extends('layouts.app')

@section('content')
    <article>
        <header>
            <a href="{{ route('mahasiswa.index') }}">&larr; Kembali ke daftar</a>
            <hgroup>
                <h1>{{ $mahasiswa->nama }}</h1>
                <h2>Detail Informasi Mahasiswa</h2>
            </hgroup>
        </header>
        
        <p><strong>NIM:</strong><br>{{ $mahasiswa->nim }}</p>
        <p><strong>Jurusan:</strong><br>{{ $mahasiswa->jurusan }}</p>
        <p><strong>Email:</strong><br>{{ $mahasiswa->email }}</p>

        <footer>
            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" role="button" class="contrast">Edit Data Ini</a>
        </footer>
    </article>
@endsection