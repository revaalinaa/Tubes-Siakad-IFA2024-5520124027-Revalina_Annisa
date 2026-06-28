<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KRS Saya</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{

background:linear-gradient(135deg,#ffeaf4,#fff4f8);
padding:40px;

}

.container{

max-width:1100px;
margin:auto;
background:#fff;
padding:40px;
border-radius:25px;
box-shadow:0 15px 40px rgba(255,105,180,.15);

}

.header{

display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:35px;

}

h1{

font-size:55px;
color:#c2185b;
font-weight:700;

}

.btn{

background:#ec5a97;
color:white;
padding:12px 28px;
border-radius:14px;
text-decoration:none;
font-size:18px;
font-weight:600;
transition:.3s;

}

.btn:hover{

background:#d94883;

}

.card{

background:#fff8fb;
padding:25px;
border-radius:20px;
margin-bottom:35px;

}

.card h2{

color:#c2185b;
margin-bottom:20px;

}

select{

width:350px;
padding:12px;
border:2px solid #f7bfd5;
border-radius:10px;
font-size:16px;
outline:none;

}

button{

background:#ff4f8b;
color:white;
border:none;
padding:12px 28px;
border-radius:10px;
font-size:16px;
cursor:pointer;
transition:.3s;

}

button:hover{

background:#d93d74;

}

table{

width:100%;
border-collapse:collapse;
margin-top:25px;

}

table th{

background:#ffebf4;
padding:15px;
color:#c2185b;
font-size:18px;

}

table td{

padding:15px;
border-bottom:1px solid #eee;
text-align:center;

}

tr:hover{

background:#fff7fa;

}

.btn-delete{

background:#ff4f8b;
color:white;
padding:8px 18px;
text-decoration:none;
border-radius:8px;

}

.btn-delete:hover{

background:#d93d74;

}

.footer{

margin-top:40px;
text-align:center;
color:#c2185b;
font-size:22px;

}

</style>

</head>
<body>

<div class="container">

<div class="header">

<h1>📚 KRS Saya</h1>
 <a href="{{ route('krs.export') }}" class="btn">
        <i class="fa-solid fa-file-pdf"></i>
        Export PDF
    </a>
</div>


<div class="card">

<h2>Ambil Mata Kuliah</h2>

<form action="{{ route('krs.store') }}" method="POST">

@csrf

<select name="jadwal_id">

@foreach($jadwals as $jadwal)

<option value="{{ $jadwal->id }}">

{{ $jadwal->matakuliah->nama_mk }}
-
{{ $jadwal->hari }}
-
{{ $jadwal->jam }}

</option>

@endforeach

</select>

<button type="submit">

<i class="fa-solid fa-plus"></i>

Ambil

</button>

</form>

</div>



<h2 style="color:#c2185b;margin-bottom:20px;">
Daftar KRS Saya
</h2>

<table>

<thead>

<tr>

<th>No</th>
<th>Mata Kuliah</th>
<th>Hari</th>
<th>Jam</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

@foreach($krs as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item->jadwal->matakuliah->nama_mk }}</td>

<td>{{ $item->jadwal->hari }}</td>

<td>{{ $item->jadwal->jam }}</td>

<td>

<form action="{{ route('krs.destroy',$item->id) }}" method="POST">

@csrf
@method('DELETE')

<button class="btn-delete">

<i class="fa-solid fa-trash"></i>

Hapus

</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

<div class="footer">

© 2026 SIAKAD - Sistem Informasi Akademik 💗

</div>

</div>

</body>
</html>