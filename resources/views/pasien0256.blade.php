<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Rumah Sakit</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
  <div style="overflow-x: auto;">

  <a class="pasien_tambah" href="{{ route('pasien0256.create') }}">Tambah Data</a>
  <form action="/pasien/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari pasien .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
  <table>
      <thead>
          <tr>
              <th>id</th>
              <th>nama</th>
              <th>alamat</th>
              <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        @foreach($pasien0256 as $pasien)
        <tr>
            <td>{{$pasien->id}}</td>
            <td>{{$pasien->nama}}</td>
            <td>{{$pasien->alamat}}</td>
            <td><a href="{{ url('pasien0256/'.$pasien->id. '/edit') }}">Edit</a>
            |
            <form action="{{ url('pasien0256/'. $pasien->id) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <button type="submit">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
      </tbody>
  </table>
  </div>
</body>