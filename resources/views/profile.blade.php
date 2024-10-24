<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #ff4e50, #1e90ff); /* Gradasi merah dan biru */
            position: relative;
        }

        .profile-container {
            text-align: center;
            background: #ffffff; /* Latar belakang putih untuk kontainer */
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 600px;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 28px;
            color: #333;
        }

        .profile-pic {
            margin-bottom: 20px;
            border-radius: 50%; /* Membuat foto berbentuk lingkaran */
            border: 4px solid #ff4e50; /* Bingkai merah di sekeliling foto profil */
            width: 150px;
            height: 150px;
            object-fit: cover; /* Memastikan gambar tetap proporsional */
        }

        .profile-info {
            width: 70%;
            margin: 0 auto;
        }

        .info-item {
            background: #1e90ff; /* Background biru untuk elemen inline */
            color: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 20px;
            font-weight: 600;
            text-align: center;
            font-size: 16px;
        }

        .info-item-inline {
            background: #1e90ff; /* Background biru untuk elemen inline */
            color: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 20px;
            font-weight: 600;
            text-align: center;
            font-size: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .info-item span:first-child {
            font-weight: bold;
        }

        /* Tombol Back di pojok kiri atas */
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 8px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #ff4e50; /* Efek hover merah */
        }

        /* Styling untuk ikon panah */
        .back-button::before {
            content: '←'; /* Ikon panah */
            margin-right: 10px; /* Jarak antara panah dan teks */
            font-size: 16px; /* Ukuran ikon panah */
        }

    </style>
</head>
<body>

<!-- Tombol Back di pojok kiri atas -->
<!-- Tombol Back di pojok kiri atas -->
<a href="{{ route('user.list') }}" class="back-button">Back</a>


<div class="profile-container">
    <h1>Profile User</h1>
    <div class="profile-info">
        <!-- Tampilkan gambar profil dari public/assets/img -->
        <img src="{{ asset($user->foto ?? 'assets/img/default-foto.jpg') }}" alt="Profile Image" class="profile-pic">
        <!-- Info user -->
        <div class="info-item">Nama: {{ $user->nama }}</div>
        <div class="info-item">NPM: {{ $user->npm }}</div>
        <div class="info-item">Kelas: {{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</div>
    </div>
</div>

</body>
</html>