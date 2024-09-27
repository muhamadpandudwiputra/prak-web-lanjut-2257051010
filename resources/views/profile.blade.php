<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>

    <!-- Import Google Font -->
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
            background: linear-gradient(to bottom, #00aaff, #ffffff); /* Latar belakang sesuai gambar */
        }
        .profile-container {
            text-align: center;
            background-color: white; /* Warna kartu putih */
            padding: 40px 20px; /* Padding lebih kecil */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
            width: 300px; /* Lebar kartu */
        }

        .Foto-Profil img {
            width: 100px; /* Ukuran gambar lebih kecil */
            height: 100px;
            object-fit: cover;
            margin-bottom: 20px; /* Jarak bawah gambar */
        }

        .Info-Profil h2 {
            font-size: 1.2em;
            margin: 0 0 10px; /* Nama lebih besar dan margin lebih rapi */
            color: Black;
        }

        .Info-Profil p {
            margin: 5px 0;
            color: #666;
        }

        .info-item {
            font-weight: 600;
            color: #00aaff; /* Warna teks sesuai gambar */
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="Foto-Profil">
            <img src="{{ asset('assets/img/PANTAI.jpg') }}" alt="Foto Profil">
        </div>
        <div class="Info-Profil">
            <div class="info-item"><?= $nama ?></div>
            <div class="info-item"><?= $kelas ?></div>
            <div class="info-item"><?= $npm ?></div>
        </div>
    </div>
</body>
</html>
