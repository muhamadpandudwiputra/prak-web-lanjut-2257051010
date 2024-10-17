<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .profile-container {
            text-align: center;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            width: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-picture {
            margin-bottom: 30px;
        }

        .profile-picture img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #ddd;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }

        .profile-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .profile-info div {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            width: 100%;
        }

        .profile-info div span {
            font-weight: normal;
            font-size: 20px;
        }

    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-picture">
            <img src="profil.jpg" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <div>Nama: <span>{{ $nama }}</span></div>
            <div>Kelas: <span>{{ $kelas }}</span></div>
            <div>NPM: <span>{{ $npm }}</span></div>
        </div>
    </div>
</body>
</html>
