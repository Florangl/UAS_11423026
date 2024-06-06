<!DOCTYPE html>
<html>
<head>
    <title>Kategori Lapangan</title>
</head>
<body>

    <h3>Data Kategori Lapangan</h3>
 
    <a href="/kategorilapangan/tambah"> + Tambah Kategori Baru</a>
    
    <br/>
    <br/>
 
    <table border="1">
        <tr>
            <th>Nama Kategori</th>
            <th>Harga</th>
            <th>Jumlah Lapangan</th>
            <th>Opsi</th>
        </tr>
        @foreach($kategori as $k)
        <tr>
            <td>{{ $k->nama_katlapangan }}</td>
            <td>{{ $k->harga_katlapangan }}</td>
            <td>{{ $k->jumlah_lapangan }}</td>
            <td>
                <a href="/kategorilapangan/edit/{{ $k->id_katlapangan }}">Edit</a>
                |
                <a href="/kategorikategori/hapus/{{ $k->id_katlapangan }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
 
 
</body>
</html>