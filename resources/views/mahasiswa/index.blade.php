<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Data Mahasiswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:linear-gradient(135deg,#fff5f7,#ffeaf1);
    font-family:'Poppins',sans-serif;
}

.card-custom{
    background:#fff;
    border:none;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(255,105,180,.15);
}

.title{
    color:#d63384;
    font-weight:bold;
}

.btn-pink{
    background:#ec5c93;
    color:white;
    border:none;
    border-radius:12px;
    padding:10px 20px;
}

.btn-pink:hover{
    background:#d63384;
    color:white;
}

.table thead{
    background:#ffd6e8;
}

.table thead th{
    color:#b03060;
}

.table tbody tr:hover{
    background:#fff1f6;
}

.btn-edit{
    background:#ffffff;
    color:#ec5c93;
    border:2px solid #ec5c93;
    border-radius:10px;
}

.btn-edit:hover{
    background:#ec5c93;
    color:white;
}

.btn-delete{
    background:#ff5c8d;
    color:white;
    border-radius:10px;
}

.btn-delete:hover{
    background:#dc356e;
}

.search-box{
    max-width:350px;
}

.footer{
    color:#b03060;
}

</style>

</head>

<body>

<div class="container mt-5">

<div class="card card-custom p-5">

<div class="d-flex justify-content-between align-items-center mb-4">

<h1 class="title">
🎓 Data Mahasiswa
</h1>

<a href="{{ route('mahasiswa.create') }}" class="btn btn-pink">
+ Tambah Mahasiswa
</a>

</div>

<form action="{{ route('mahasiswa.index') }}" method="GET">

<div class="input-group search-box mb-4">

<input
type="text"
name="search"
class="form-control"
placeholder="Cari nama mahasiswa..."
value="{{ request('search') }}">

<button class="btn btn-pink">

Cari

</button>

</div>

</form>

<table class="table table-bordered align-middle">

<thead>

<tr>

<th>No</th>

<th>NIM</th>

<th>Nama</th>

<th>Jurusan</th>

<th>Angkatan</th>

<th width="180">Aksi</th>

</tr>

</thead>

<tbody>

@forelse($mahasiswas as $mahasiswa)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $mahasiswa->nim }}</td>

<td>{{ $mahasiswa->nama_mahasiswa }}</td>

<td>{{ $mahasiswa->jurusan }}</td>

<td>{{ $mahasiswa->angkatan }}</td>

<td>

<a
href="{{ route('mahasiswa.edit',$mahasiswa->id) }}"
class="btn btn-edit btn-sm">

Edit

</a>

<form
action="{{ route('mahasiswa.destroy',$mahasiswa->id) }}"
method="POST"
class="d-inline">

@csrf
@method('DELETE')

<button
class="btn btn-delete btn-sm"
onclick="return confirm('Yakin ingin menghapus data?')">

Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="6" class="text-center">

Belum ada data mahasiswa.

</td>

</tr>

@endforelse

</tbody>

</table>

<hr>

<div class="footer text-center">

© {{ date('Y') }} Sistem Informasi Akademik

</div>

</div>

</div>

</body>

</html>