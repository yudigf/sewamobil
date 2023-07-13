<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="address">Alamat:</label>
        <input type="text" name="address" id="address" required>
    </div>
    <div>
        <label for="phone_number">Nomor Telepon:</label>
        <input type="text" name="phone_number" id="phone_number" required>
    </div>
    <div>
        <label for="sim_number">Nomor SIM:</label>
        <input type="text" name="sim_number" id="sim_number" required>
    </div>
    <button type="submit">Daftar</button>
</form>
