<form action="{{ url('pasien0256/'.$pasien->id) }}" method="patch">
    @csrf
    <input type="hidden" name="method" value="patch">
    id <input type="text" name="id" value="{{ $pasien->id }}">
    nama <input type="text" name="nama" value="{{ $pasien->nama }}">
    alamat <input type="text" name="alamat" value="{{ $pasien->alamat }}">
    <button type="Submit">Simpan Data</button>
</form>
