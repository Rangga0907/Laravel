@extends('layouts.app')

@section('content')
    <article>
        <header>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <hgroup>
                    <h1>Data Mahasiswa</h1>
                    <h2>Daftar mahasiswa yang terdaftar di sistem</h2>
                </hgroup>
                <a href="{{ route('mahasiswa.create') }}" role="button">Tambah Data</a>
            </div>
        </header>

        @if (session('success'))
            <div class="pico-color-green-200" style="padding: 1rem; border-radius: 0.25rem; margin-bottom: 1rem;">
                {{ session('success') }}
            </div>
        @endif

        <figure>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswas as $mhs)
                    <tr>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" role="button" class="secondary outline">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="aksi-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="contrast" onclick="return confirm('Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </figure>
    </article>
@endsection