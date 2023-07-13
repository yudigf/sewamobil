<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mobil yang Sedang Disewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Daftar Mobil yang Sedang Disewa</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Merek</th>
                    <th>Model</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjamans as $peminjaman)
                    <tr>
                        <td>{{ $peminjaman->mobil->merek }}</td>
                        <td>{{ $peminjaman->mobil->model }}</td>
                        <td>{{ $peminjaman->tanggal_mulai }}</td>
                        <td>{{ $peminjaman->tanggal_selesai }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
