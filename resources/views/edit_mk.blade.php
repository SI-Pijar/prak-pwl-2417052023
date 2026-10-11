@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edit Mata Kuliah</h1>

    @if ($errors->any())
        <div style="background:#f8d7da; color:#721c24; padding:10px; margin-bottom:10px;">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_mk">Nama Mata Kuliah:</label><br>
        <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required><br><br>

        <label for="sks">SKS:</label><br>
        <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" required><br><br>

        <button type="submit">Update</button>
    </form>
</div>
@endsection