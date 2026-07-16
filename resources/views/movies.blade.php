<!DOCTYPE html>
<html>
<head>
    <title>Daftar Film</title>
    <style>
        body{
            font-family:Arial,sans-serif;
            background:#f4f4f4;
            padding:40px;
        }

        h2{
            color:#c62828;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        th,td{
            border:1px solid #ddd;
            padding:10px;
            text-align:left;
        }

        th{
            background:#c62828;
            color:white;
        }

        a{
            text-decoration:none;
            color:#c62828;
        }
    </style>
</head>
<body>

<h2>Daftar Film</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Judul Film</th>
        <th>Durasi</th>
    </tr>

    @foreach($movies as $movie)
    <tr>
        <td>{{ $movie->movie_id }}</td>
        <td>{{ $movie->judul }}</td>
        <td>{{ $movie->durasi }}</td>
    </tr>
    @endforeach

</table>

<br>

<a href="/">← Kembali</a>

</body>
</html>