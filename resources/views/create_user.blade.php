<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #007BFF, #FF6347); /* Gradien dari biru ke merah */
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: 600;
            font-size: 14px;
            color: #333;
            text-align: left;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input:focus, select:focus {
            border-color: #007BFF; /* Warna fokus biru */
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Efek shadow biru */
        }

        select option[disabled] {
            color: #999;
        }

        button {
            background-color: #FF6347; /* Warna tombol merah */
            color: white;
            padding: 12px 0;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #FF4500; /* Warna hover merah lebih tua */
        }

        .version {
            margin-bottom: 15px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="version">{{ app() -> version() }}</div>
    <h1>Create User</h1>

    <form action="/user/store" method="POST">

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" required>

        <label for="kelas_id">Kelas:</label>
        <select id="kelas_id" name="kelas_id" required>
            <option value="" disabled selected>Pilih Kelas</option>
            @foreach($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>


        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto"><br><br>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection
</html>