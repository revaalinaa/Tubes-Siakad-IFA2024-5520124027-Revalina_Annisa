<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Data Jadwal</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
    background:linear-gradient(135deg,#fff5f8,#ffe9f2);
    font-family:Poppins,sans-serif;
}

.card-custom{
    border:none;
    border-radius:25px;
    box-shadow:0 15px 35px rgba(255,105,180,.15);
}

.title{
    color:#c2185b;
    font-size:48px;
    font-weight:700;
}

.btn-pink{
    background:#ec5c93;
    color:white;
    border:none;
    border-radius:12px;
    padding:10px 24px;
}

.btn-pink:hover{
    background:#d63384;
    color:white;
}

.table thead{
    background:#ffdce8;
}

.table thead th{
    color:#c2185b;
    text-align:center;
}

.table td{
    vertical-align:middle;
}

.table tbody tr:hover{
    background:#fff3f8;
}

.badge-user{
    width:52px;
    height:52px;
    border-radius:15px;
    background:#ffe0ec;
    display:flex;
    justify-content:center;
    align-items:center;
    color:#ff4f90;
    font-size:22px;
}

.btn-delete{
    background:#ff4f90;
    color:white;
    border:none;
    border-radius:10px;
}

.btn-delete:hover{
    background:#d63384;
    color:white;
}

.footer{
    color:#b03060;
}

</style>

</head>

<body>

<div class="container py-5">

<div class="card card-custom p-5">

<div class="d-flex justify-content-between align-items-center mb-4">

<h1 class="title">
📅 Data Jadwal
</h1>

<a href="{{ route('jadwal.create') }}"
class="btn btn-pink">

<i class="bi bi-plus-circle"></i>

Tambah Jadwal

</a>

</div>

<table class="table table-bordered align-middle">

<thead>

<tr>

<th width="80"></th>
<th>Dosen</th>
<th>Mata Kuliah</th>
<th>Hari</th>
<th>Jam</th>
<th>Kelas</th>
<th width="150">Aksi</th>

</tr>

</thead>

<tbody>

@forelse($jadwals as $jadwal)

<tr>

<td class="text-center">
    <div class="badge-user">
        <i class="bi bi-person-fill"></i>
    </div>
</td>

<td>{{ $jadwal->dosen->nama_dosen }}</td>

<td>{{ $jadwal->matakuliah->nama_mk }}</td>

<td>{{ $jadwal->hari }}</td>

<td>{{ $jadwal->jam }}</td>

<td>{{ $jadwal->kelas }}</td>

<td>

<form
action="{{ route('jadwal.destroy',$jadwal->id) }}"
method="POST">

@csrf
@method('DELETE')

<button
class="btn btn-delete"
onclick="return confirm('Yakin ingin menghapus jadwal?')">

<i class="bi bi-trash"></i>

Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="7" class="text-center">

Belum ada data Jadwal

</td>

</tr>

@endforelse

</tbody>

</table>

<hr>

<div class="text-center footer">

© {{ date('Y') }} SIAKAD - Sistem Informasi Akademik 💗

</div>

</div>

</div>

</body>
</html>