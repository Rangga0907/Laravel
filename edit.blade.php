@extends('layouts.app')

@section('content')
    <article>
        <hgroup>
            <h1>{{ isset($mahasiswa) ? 'Edit Mahasiswa' : 'Formulir Mahasiswa Baru' }}</h1>
            <p>Silakan isi detail data di bawah ini.</p>
        </hgroup>

        @if ($errors->any())
            <div class="pico-color-red-200" style="padding: 1rem; border-radius: 0.25rem; margin-bottom: 1rem;">
                <strong>Terjadi kesalahan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ isset($mahasiswa) ? route('mahasiswa.update', $mahasiswa->id) : route('mahasiswa.store') }}" method="POST">
            @csrf
            @if(isset($mahasiswa))
                @method('PUT')
            @endif

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ old('nama', $mahasiswa->nama ?? '') }}" required>
            
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" placeholder="Nomor Induk Mahasiswa" value="{{ old('nim', $mahasiswa->nim ?? '') }}" required>
            
            <div class="grid">
                <label for="jurusan">
                    Jurusan
                    <input type="text" id="jurusan" name="jurusan" placeholder="Jurusan" value="{{ old('jurusan', $mahasiswa->jurusan ?? '') }}" required>
                </label>
                <label for="email">
                    Email
                    <input type="email" id="email" name="email" placeholder="Alamat Email" value="{{ old('email', $mahasiswa->email ?? '') }}" required>
                </label>
            </div>
            
            <footer style="display: flex; justify-content: flex-end; gap: 1rem; margin-top: 1.5rem;">
                <a href="{{ route('mahasiswa.index') }}" role="button" class="secondary">Kembali</a>
                <button type="submit">{{ isset($mahasiswa) ? 'Update' : 'Simpan' }}</button>
            </footer>
        </form>
    </article>
@endsection