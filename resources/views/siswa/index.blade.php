<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>
<h1>Daftar Siswa</h1>
<!-- Cek apakah ada data siswa -->

@if (count($semuaSiswa) > 0)
<ul>
    <!-- Looping melalui setiap siswa dan menampilkan datanya -->
    @foreach ($semuaSiswa as $s)
    <li>
        {{ $s->nama }} - {{ $s->alamat }} - {{ $s->no_telp }}
        <a href="{{url ('/siswa/' . $s->id) }}" class="btn-detatil">Detail</a>
        <a href="{{ url('/siswa/' . $s->id . '/edit') }}" class="btn-edit">Edit</a>
        <form action="{{ route('siswa.destroy', $s->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">
                Delete
            </button>
        </form>
    </li>
    @endforeach
</ul>
@else

<!-- Tampilkan pesan ini jika tidak ada data siswa -->
<p>Tidak ada data Siswa.</p>
@endif
</body>
</html>
