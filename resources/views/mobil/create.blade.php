<form action="{{ route('mobil.store') }}" method="POST">
    @csrf
    <div>
        <label for="merek">Merek:</label>
        <input type="text" name="merek" id="merek" required>
    </div>
    <div>
        <label for="model">Model:</label>
        <input type="text" name="model" id="model" required>
    </div>
    <div>
        <label for="nomor_plat">Nomor Plat:</label>
        <input type="text" name="nomor_plat" id="nomor_plat" required>
    </div>
    <div>
        <label for="tarif_sewa_per_hari">Tarif Sewa per Hari:</label>
        <input type="number" name="tarif_sewa_per_hari" id="tarif_sewa_per_hari" step="0.01" required>
    </div>
    <button type="submit">Tambah Mobil</button>
</form>
