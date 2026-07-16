<!DOCTYPE html>
<html>
<head>
<title>Jadwal Tayang</title>

<style>
body{
font-family:Arial;
margin:40px;
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

<h2>Jadwal Tayang</h2>

<table>

<tr>
<th>ID</th>
<th>Film</th>
<th>Studio</th>
<th>Tanggal</th>
<th>Jam</th>
<th>Harga Tiket</th>
</tr>

@foreach($showtimes as $showtime)

<tr>
 <td>{{ $showtime->showtime_id }}</td>
 <td>{{ $showtime->movie_id }}</td>
 <td>{{ $showtime->studio_id }}</td>
 <td>{{ $showtime->tanggal_tayang }}</td>
 <td>{{ $showtime->jam_mulai }}</td>
 <td>Rp {{ number_format($showtime->harga_tiket,0,',','.') }}</td>
</tr>

@endforeach

</table>

<br>

<a href="/">← Kembali</a>

</body>
</html>