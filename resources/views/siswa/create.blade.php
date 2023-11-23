<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pembuatan Siswa</title>
</head>
<body>
    <h1>Formulir Pembuatan Siswa</h1>

    <form method="post" action="/siswa">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required >
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required>
        <label for="no_telp">Nomor HP:</label>
        <input type="text" name="no_telp" id="no_telp" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
