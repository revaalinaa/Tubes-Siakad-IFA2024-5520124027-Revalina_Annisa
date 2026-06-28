<style>
body{
    background: linear-gradient(135deg,#fff0f7,#ffe8f2);
    min-height:100vh;
}
</style>
<x-app-layout>

<style>
body{
    background:linear-gradient(135deg,#fff7fb,#ffeef5);
}

.wrapper{
    max-width:1400px;
    margin:auto;
    padding:35px;
}

.banner{

    background:linear-gradient(90deg,#ffdbe8,#fff7fb);
    border-radius:30px;
    padding:40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 20px 45px rgba(255,105,180,.15);
    margin-bottom:35px;

}

.banner-left{
    display:flex;
    align-items:center;
    gap:30px;
}

.logo-circle{

    width:130px;
    height:130px;
    border-radius:50%;
    background:white;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:65px;
    box-shadow:0 15px 30px rgba(255,105,180,.15);

}

.banner h1{

    font-size:65px;
    color:#c2185b;
    font-weight:bold;

}

.banner p{

    font-size:24px;
    color:#555;

}

.banner-right{

    font-size:120px;

}

.cards{

    display:grid;
    grid-template-columns:repeat(5,1fr);
    gap:30px;

}

.card-soft{

    background:white;
    border-radius:28px;
    padding:30px;
    box-shadow:0 15px 35px rgba(255,105,180,.12);
    transition:.3s;

}

.card-soft:hover{

    transform:translateY(-10px);

}

.icon{

    width:90px;
    height:90px;
    border-radius:25px;
    background:#ffe5ef;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:45px;
    margin-bottom:20px;

}

.title{

    color:#d81b60;
    font-size:24px;

}

.total{

    font-size:65px;
    font-weight:bold;
    color:#444;

}

.desc{

    color:#888;

}

.footer{

    margin-top:40px;
    background:white;
    padding:25px;
    border-radius:25px;
    text-align:center;
    box-shadow:0 15px 35px rgba(255,105,180,.1);

}

.footer h3{

    color:#d81b60;

}

.footer p{

    color:#777;

}
</style>

<div class="wrapper">

<div class="banner">

<div class="banner-left">

<div class="logo-circle">
🎀
</div>

<div>

<h1>Dashboard Admin</h1>

<p>
Selamat datang di Sistem Informasi Akademik 💗
</p>

</div>

</div>

<div class="banner-right">
🎓
</div>

</div>

<div class="cards">

<div class="card-soft">

<div class="icon">🎓</div>

<div class="title">
Mahasiswa
</div>

<div class="total">
{{ $mahasiswa }}
</div>

<div class="desc">
Total Mahasiswa
</div>

</div>

<div class="card-soft">

<div class="icon">👨‍🏫</div>

<div class="title">
Dosen
</div>

<div class="total">
{{ $dosen }}
</div>

<div class="desc">
Total Dosen
</div>

</div>

<div class="card-soft">

<div class="icon">📚</div>

<div class="title">
Mata Kuliah
</div>

<div class="total">
{{ $matakuliah }}
</div>

<div class="desc">
Total Mata Kuliah
</div>

</div>

<div class="card-soft">

<div class="icon">🗓️</div>

<div class="title">
Jadwal
</div>

<div class="total">
{{ $jadwal }}
</div>

<div class="desc">
Total Jadwal
</div>

</div>

<div class="card-soft">

<div class="icon">📝</div>

<div class="title">
KRS
</div>

<div class="total">
{{ $krs }}
</div>

<div class="desc">
Total KRS
</div>

</div>

</div>

<div class="footer">

<h3>
© 2026 SIAKAD - Sistem Informasi Akademik 💗
</h3>

<p>
All Rights Reserved
</p>

</div>

</div>

</x-app-layout>