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
            border-radius: 50%;
            border: 4px solid #ff4e50; /* Bingkai merah di sekeliling foto profil */
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

    </style>
</head>
<body>
<div class="profile-container">
    <h1>Profile User</h1>
    <div class="profile-info">
        <!-- Tampilkan gambar profil dari public/assets/img -->
        <img src="{{ asset('assets/css/img/bromo.jpg') }}" alt="Profile Picture" class="profile-pic" width="150" height="150">
        <!-- Info user -->
        <div class="info-item">Nama: {{ $nama }}</div>
        <div class="info-item">NPM: {{ $npm }}</div>
        <!-- Info user dengan kelas inline -->
        <div class="info-item">
            <span>Kelas:</span>
            <span>{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</span>
        </div>
    </div>
</div>
</body>
</html>