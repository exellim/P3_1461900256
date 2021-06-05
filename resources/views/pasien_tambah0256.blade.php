<form action="{{ route('pasien0256.store') }}" method="post">
    @csrf
    id: <input type="text" name="id">
    nama: <input type="text" name="nama">
    alamat: <input type="text" name="alamat">
    <button type="Submit">Simpan Data</button>
</form>
