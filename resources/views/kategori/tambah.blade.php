<!DOCTYPE html>
<html>
<head>
    <title>Kategori Lapangan</title>
</head>
<body>
 
    <h3>Data Kategori Lapangan</h3>
 
    <a href="/kategorilapangan"> Kembali</a>
    
    <br/>
    <br/>
 
    <form action="/kategori/store" method="post">
        {{ csrf_field() }}
        Nama Kategori <input type="text" name="nama_katlapangan" required="required"> <br/>
        Harga <input type="number" name="harga_katlapangan" required="required"> <br/>
        Jumlah Lapangan <input type="number" name="jumlah_lapangan" required="required"> <br/>
        File <input type="text" name="file_katlapangan" required="required"> <br/>
        <input type="submit" value="Simpan Data">
    </form>
 
</body>
</html>