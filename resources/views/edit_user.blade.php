@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edit User</h1>

    @if ($errors->any())
        <div style="background:#f8d7da; color:#721c24; padding:10px; margin-bottom:10px;">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" required><br><br>

        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" value="{{ old('npm', $user->npm) }}" required><br><br>

        <label for="kelas_id">Kelas:</label><br>
        <select id="kelas_id" name="kelas_id" required>
            @foreach ($kelas as $k)
                <option value="{{ $k->id }}" {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                    {{ $k->nama_kelas }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update</button>
        <a href="{{ url('/user') }}">Batal</a>
    </form>
</div>
@endsection