@props(['users'])

<table class="table table-hover align-middle">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td><span class="badge bg-info text-dark">{{ $user->nama_kelas }}</span></td>
            </tr>
        @endforeach
    </tbody>
</table>