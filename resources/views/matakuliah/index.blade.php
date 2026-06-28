<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Data Mata Kuliah</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{

    background:linear-gradient(135deg,#fff4f8,#ffe9f2);
    font-family:Poppins,sans-serif;

}

.card-custom{

    border:none;
    border-radius:25px;
    box-shadow:0 15px 35px rgba(255,105,180,.15);

}

.title{

    color:#c2185b;
    font-weight:700;
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

    background:#d63384;
    color:white;

}

.table thead{

    background:#ffdce8;

}

.table thead th{

    color:#b03060;
    text-align:center;

}

.table td{

    vertical-align:middle;

}

.table tbody tr:hover{

    background:#fff2f7;

}

.badge-code{

    background:#ffe2ee;
    color:#d63384;
    padding:8px 15px;
    border-radius:10px;
    font-weight:bold;

}

.btn-edit{

    border:2px solid #ff6fa3;
    color:#ff4f90;
    border-radius:10px;

}

.btn-edit:hover{

    background:#ff6fa3;
    color:white;

}

.btn-delete{

    background:#ff4f90;
    color:white;
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
📚 Data Mata Kuliah
</h1>

<a href="{{ route('matakuliah.create') }}"
class="btn btn-pink">

<i class="bi bi-plus-circle"></i>

Tambah MK

</a>

</div>

<table class="table table-bordered align-middle">

<thead>

<tr>

<th>Kode</th>
<th>Nama Mata Kuliah</th>
<th>SKS</th>
<th>Semester</th>
<th width="190">Aksi</th>

</tr>

</thead>

<tbody>

@forelse($matakuliahs as $mk)

<tr>

<td>

<span class="badge-code">

{{ $mk->kode_mk }}

</span>

</td>

<td>{{ $mk->nama_mk }}</td>

<td>{{ $mk->sks }}</td>

<td>{{ $mk->semester }}</td>

<td>

<a href="{{ route('matakuliah.edit',$mk->id) }}"
class="btn btn-edit btn-sm">

<i class="bi bi-pencil-square"></i>

Edit

</a>

<form
action="{{ route('matakuliah.destroy',$mk->id) }}"
method="POST"
class="d-inline">

@csrf
@method('DELETE')

<button
class="btn btn-delete btn-sm"
onclick="return confirm('Yakin ingin menghapus data?')">

<i class="bi bi-trash"></i>

Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="5" class="text-center">

Belum ada data Mata Kuliah

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