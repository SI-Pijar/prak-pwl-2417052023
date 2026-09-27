@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title mb-4">📋 Daftar Pengguna</h3>
            <x-user-table :users="$users" />
            <a href="{{ route('user.create') }}" class="btn btn-success">+ Tambah User</a>
        </div>
    </div>
@endsection