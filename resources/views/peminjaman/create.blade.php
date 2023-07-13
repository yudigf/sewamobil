<h1>Peminjaman Mobil</h1>

<form action="{{ route('peminjaman.store') }}" method="POST">
    @csrf
    <div>
        <label for="mobil_id">Pilih Mobil:</label>
        <select name="mobil_id" id="mobil_id" required>
            @foreach ($mobils as $mobil)
                <option value="{{ $mobil->id }}">{{ $mobil->merek }} - {{ $mobil->model }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="tanggal_mulai">Tanggal Mulai:</label>
        <input type="date" name="tanggal_mulai" id="tanggal_mulai" required>
    </div>
    <div>
        <label for="tanggal_selesai">Tanggal Selesai:</label>
        <input type="date" name="tanggal_selesai" id="tanggal_selesai" required>
    </div>
    <button type="submit">Pinjam Mobil</button>
</form>
