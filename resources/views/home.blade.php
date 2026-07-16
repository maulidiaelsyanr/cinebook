<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CineBook</title>

    <style>
        body{
            font-family:Arial,sans-serif;
            background:#f5f5f5;
            margin:0;
        }

        header{
            background:#c62828;
            color:white;
            padding:20px;
            text-align:center;
        }

        .container{
            width:80%;
            margin:40px auto;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:10px;
            margin-bottom:20px;
            box-shadow:0 2px 10px rgba(0,0,0,.1);
        }

        ul{
            line-height:35px;
        }
    </style>

</head>
<body>

<header>
    <h1>CineBook</h1>
    <p>Sistem Informasi Pemesanan Tiket Bioskop</p>
</header>

<div class="container">

    <div class="card">
        <h2>Menu</h2>

        <ul>
            <li><a href="/movies">🎬 Daftar Film</a></li>
            <li><a href="/cinemas">🏢 Daftar Bioskop</a></li>
            <li><a href="/showtimes">🕒 Jadwal Tayang</a></li>
            <li><a href="/bookings">🎟️ Pemesanan Tiket</a></li>
        </ul>

    </div>

</div>

</body>
</html>