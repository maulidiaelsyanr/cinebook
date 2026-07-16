<!DOCTYPE html>
<html>
<head>
    <title>Daftar Bioskop</title>
    <style>
        body{
            font-family:Arial;
            margin:40px;
        }

        h2{
            color:#c62828;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th{
            background:#c62828;
            color:white;
            padding:10px;
        }

        td{
            border:1px solid #ddd;
            padding:10px;
        }

        a{
            color:#c62828;
            text-decoration:none;
        }
    </style>
</head>
<body>

<h2>Daftar Bioskop</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nama Bioskop</th>
        <th>Lokasi</th>
    </tr>

    @foreach($cinemas as $cinema)
    <tr>
        <td>{{ $cinema->cinema_id }}</td>
        <td>{{ $cinema->nama_cabang }}</td>
        <td>{{ $cinema->kota }}</td>
    </tr>
    @endforeach

</table>

<br>

<a href="/">← Kembali</a>

</body>
</html>