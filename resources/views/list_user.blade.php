@extends('layouts.app')

@section('content')
<style>
   body {
      background: linear-gradient(135deg, #ff4e50, #1e90ff); /* Gradasi dari merah ke biru */
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
      background-color: #ff4e50; /* Merah */
      color: #ffffff; /* Putih */
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

   /* Gaya untuk tombol "Tambah Pengguna Baru" */
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

   /* Hover efek untuk tombol "Tambah Pengguna Baru" */
   a[href="{{ route('user.create') }}"]:hover {
      background: linear-gradient(135deg, #1e90ff, #ff4e50); /* Balik gradasi untuk efek hover */
   }

   /* Gaya untuk tombol "View" */
   .btn-view {
      display: inline-block;
      padding: 8px 15px;
      background-color: #3498db; /* Biru */
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
   }

   .btn-view:hover {
      background-color: #2980b9; /* Biru lebih gelap saat hover */
   }

   /* Gaya untuk tombol "Edit" */
   .btn-edit {
      display: inline-block;
      padding: 8px 15px;
      background-color: #f39c12; /* Oranye */
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
   }

   /* Hover efek untuk tombol "Edit" */
   .btn-edit:hover {
      background-color: #e67e22; /* Oranye lebih gelap */
   }

   /* Gaya untuk tombol "Delete" */
   .btn-delete {
      display: inline-block;
      padding: 8px 15px;
      background-color: #e74c3c; /* Merah */
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
   }

   /* Hover efek untuk tombol "Delete" */
   .btn-delete:hover {
      background-color: #c0392b; /* Merah lebih gelap */
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
               <a href="{{ route('user.show', $user->id) }}" class="btn-view">View</a>
               <a href="{{ route('user.edit', $user->id) }}" class="btn-edit">Edit</a>

               <!-- Tombol Hapus -->
               <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
               </form>
            </td>
        </tr>
      @endforeach
   </tbody>
</table>
@endsection
