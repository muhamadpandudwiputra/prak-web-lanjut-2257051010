@extends('layouts.app')

@section('content')
<style>
   body {
      background: linear-gradient(135deg, #1e3c72, #ff0000); /* Gradasi dari biru ke merah */
   }

   table {
      width: 100%;
      border-collapse: collapse;
   }
   th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
   }
   th {
      background-color: #1e3c72; /* Biru */
      color: #ff0000; /* Merah */
   }
   tr:nth-child(even) {
      background-color: #ffcccc; /* Background merah muda */
   }
   tr:nth-child(odd) {
      background-color: #cce0ff; /* Background biru muda */
   }
   tr:hover {
      background-color: #f28b82; /* Warna saat dihover (merah lembut) */
   }

   /* Tambahkan gaya untuk link Tambah Pengguna Baru */
   a[href="{{ route('user.create') }}"] {
      display: inline-block;
      margin-bottom: 20px;
      padding: 10px 20px;
      background: linear-gradient(135deg, #ff4e50, #1e90ff); /* Gradasi dari merah ke biru */
      color: white;
      font-weight: 600;
      text-transform: uppercase;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s ease;
   }

   /* Hover efek untuk tombol */
   a[href="{{ route('user.create') }}"]:hover {
      background: linear-gradient(135deg, #1e90ff, #ff4e50); /* Balik gradasi untuk efek hover */
   }
</style>

<a href="{{ route('user.create') }}" >Tambah Pengguna Baru</a>
<table>
   <thead>
      <tr>
         <th>ID</th>
         <th>Nama</th>
         <th>NPM</th>
         <th>Kelas</th>
         <th>Foto</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
      @foreach($users as $user)
        <tr>
        <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->kelas->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</td>
                <td>
                @if($user->foto)
                    <img src="{{ asset($user->foto ?? 'uploads/img/default.jpg') }}" alt="Foto Pengguna" width="100">
                @else
                    <span>Foto tidak tersedia</span>
                @endif
                </td>
            <td>
               <a href="{{ route('user.show', $user->id) }}" class="btn btn-warning mb-3">View</a>
            </td>
        </tr>
        @endforeach
   </tbody>
</table>
@endsection
