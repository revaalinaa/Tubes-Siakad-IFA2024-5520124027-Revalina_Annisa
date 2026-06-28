<x-app-layout>

<style>

body{
    background:linear-gradient(135deg,#fff3f8,#ffe8f2);
}

.card-form{
    max-width:850px;
    margin:50px auto;
    background:#fff;
    border-radius:30px;
    padding:50px 60px;
    box-shadow:0 18px 40px rgba(255,105,180,.15);
}

.title{
    font-size:48px;
    font-weight:700;
    color:#c2185b;
    text-align:center;
    margin-bottom:40px;
}

.form-label{
    font-weight:600;
    color:#c2185b;
    margin-bottom:8px;
}

.form-control{
    border:2px solid #ffd6e7;
    border-radius:12px;
    padding:12px;
}

.form-control:focus{
    border-color:#ff6fa5;
    box-shadow:0 0 0 .2rem rgba(255,111,165,.2);
}

.btn-pink{
    background:#ff5c9a;
    color:white;
    border:none;
    border-radius:15px;
    padding:14px 45px;
    font-size:20px;
    font-weight:600;
    min-width:180px;
    transition:.3s;
}

.btn-pink:hover{
    background:#e84b87;
    transform:translateY(-2px);
}

.btn-back{
    background:#f8d7e4;
    color:#c2185b;
    border:none;
    border-radius:15px;
    padding:14px 45px;
    font-size:20px;
    font-weight:600;
    min-width:180px;
    text-align:center;
    text-decoration:none;
    transition:.3s;
}

.btn-back:hover{
    background:#f3bfd4;
    color:#c2185b;
    transform:translateY(-2px);
}

</style>

<div class="container py-5">

<div class="card-form">

<h2 class="title">
🎓 Tambah Mahasiswa
</h2>

<form action="{{ route('mahasiswa.store') }}" method="POST">
@csrf

<div class="row mb-4 align-items-center">
    <label class="col-md-3 form-label">NIM</label>
    <div class="col-md-9">
        <input type="text" name="nim" class="form-control">
    </div>
</div>

<div class="row mb-4 align-items-center">
    <label class="col-md-3 form-label">Nama Mahasiswa</label>
    <div class="col-md-9">
    <input type="text" name="nama_mahasiswa" class="form-control">
</div>

<div class="row mb-4 align-items-center">
    <label class="col-md-3 form-label">Jurusan</label>
    <div class="col-md-9">
        <input type="text" name="jurusan" class="form-control">
    </div>
</div>

<div class="row mb-5 align-items-center">
    <label class="col-md-3 form-label">Angkatan</label>
    <div class="col-md-9">
        <input type="text" name="angkatan" class="form-control">
    </div>
</div>

<div class="d-flex justify-content-center gap-3 mt-5">

    <button type="submit" class="btn btn-pink">
        💾 Simpan
    </button>

    <a href="{{ route('mahasiswa.index') }}" class="btn btn-back">
        ← Kembali
    </a>

</div>

</form>

</div>

</div>

</x-app-layout>