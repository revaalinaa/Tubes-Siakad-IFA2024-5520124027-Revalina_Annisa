<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Data Dosen</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:linear-gradient(135deg,#fff5f7,#ffe8ef);
    font-family:'Poppins',sans-serif;
}

.card-custom{
    border:none;
    border-radius:20px;
    box-shadow:0 15px 30px rgba(255,105,180,.15);
}

.title{
    color:#b03060;
    font-weight:bold;
    font-size:45px;
}

.btn-pink{
    background:#ec5c93;
    color:white;
    border:none;
    border-radius:12px;
    padding:10px 25px;
}

.btn-pink:hover{
    background:#d94b84;
    color:white;
}

.table thead{
    background:#ffe1ea;
}

.table thead th{
    color:#a02050;
}

.table tbody tr:hover{
    background:#fff4f7;
}

.btn-edit{
    background:#fff;
    border:2px solid #ff7aa5;
    color:#ff5d8d;
    border-radius:10px;
}

.btn-edit:hover{
    background:#ff7aa5;
    color:white;
}

.btn-delete{
    background:#ff6f91;
    color:white;
    border-radius:10px;
}

.btn-delete:hover{
    background:#ff4b79;
}

.footer{
    color:#b03060;
}

</style>

</head>

<body>

<div class="container mt-5">

<div class="card card-custom p-5">

<h1 class="title mb-4">
Data Dosen
</h1>

<a href="{{ route('dosen.create') }}" class="btn btn-pink mb-4">
+ Tambah Dosen
</a>

<table class="table align-middle">

<thead>

<tr>

<th>No</th>
<th>NIDN</th>
<th>Nama</th>
<th>Email</th>
<th>No HP</th>
<th width="170">Aksi</th>

</tr>

</thead>

<tbody>

@foreach($dosens as $dosen)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $dosen->nidn }}</td>

<td>{{ $dosen->nama_dosen }}</td>

<td>{{ $dosen->email }}</td>

<td>{{ $dosen->no_hp }}</td>

<td>

<a href="{{ route('dosen.edit',$dosen->id) }}"
class="btn btn-edit">

Edit

</a>

<form
action="{{ route('dosen.destroy',$dosen->id) }}"
method="POST"
class="d-inline">

@csrf
@method('DELETE')

<button class="btn btn-delete">

Hapus

</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

<hr>

<div class="footer">

© {{ date('Y') }} SIAKAD • Sistem Informasi Akademik

</div>

</div>

</div>

</body>
</html>