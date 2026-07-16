<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pemesanan Tiket</title>

    <style>
        body{
            font-family:Arial,sans-serif;
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
            padding:10px;
            border:1px solid #ddd;
        }

        a{
            color:#c62828;
            text-decoration:none;
        }
    </style>
</head>
<body>

<h2>Pemesanan Tiket</h2>

<table>
    <tr>
        <th>ID</th>
        <th>User</th>
        <th>Jadwal</th>
        <th>Tanggal Booking</th>
        <th>Total Bayar</th>
        <th>Status</th>
    </tr>

    @foreach($bookings as $booking)
    <tr>
        <td>{{ $booking->booking_id }}</td>
        <td>{{ $booking->user_id }}</td>
        <td>{{ $booking->showtime_id }}</td>
        <td>{{ $booking->tanggal_booking }}</td>
        <td>Rp {{ number_format($booking->total_bayar,0,',','.') }}</td>
        <td>{{ $booking->status_pembayaran }}</td>
    </tr>
    @endforeach

</table>

<br>

<a href="/">← Kembali</a>

</body>
</html>