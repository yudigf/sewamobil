<h1>Daftar Mobil</h1>

<form action="{{ route('mobil.search') }}" method="GET">
    <input type="text" name="keyword" placeholder="Cari mobil...">
    <button type="submit">Cari</button>
</form>

<table>
    <thead>
        <tr>
            <th>Merek</th>
            <th>Model</th>
            <th>Nomor Plat</th>
            <th>Tarif Sewa per Hari</th>
            <th>Tersedia</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mobils as $mobil)
            <tr>
                <td>{{ $mobil->merek }}</td>
                <td>{{ $mobil->model }}</td>
                <td>{{ $mobil->nomor_plat }}</td>
                <td>{{ $mobil->tarif_sewa_per_hari }}</td>
                <td>{{ $mobil->tersedia ? 'Ya' : 'Tidak' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
