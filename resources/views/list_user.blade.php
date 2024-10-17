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
</style>
<table>
   <thead>
      <tr>
         <th>ID</th>
         <th>Nama</th>
         <th>NPM</th>
         <th>Kelas</th>
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
            <td><!-- Aksi akan ditambahkan di sini --></td>
        </tr>
        @endforeach
   </tbody>
</table>
@endsection
