@extends('layouts.app')

@section('content')

<div class="container">
    <h1>{{ $title }}</h1>

    @if (session('success'))
        <div style="background:#d4edda; color:#155724; padding:10px; margin-bottom:10px;">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div style="background:#f8d7da; color:#721c24; padding:10px; margin-bottom:10px;">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ route('user.create') }}">Tambah User</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <td>ID</td>
                <td>NAMA</td>
                <td>NPM</td>
                <td>KELAS</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->kelas->nama_kelas ?? '-' }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}"
                           style="background:#0d6efd; color:white; padding:5px 10px; border-radius:5px; text-decoration:none;">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    style="background:#dc3545; color:white; padding:5px 10px; border:none; border-radius:5px; cursor:pointer;"
                                    onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection