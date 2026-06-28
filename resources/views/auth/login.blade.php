<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login SIAKAD</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:'Poppins',sans-serif;
    }

    body{

        min-height:100vh;

        display:flex;
        justify-content:center;
        align-items:center;

        background:
        radial-gradient(circle at top left,#ffc9de 0,#ffc9de 15%,transparent 16%),
        radial-gradient(circle at bottom right,#ffdce9 0,#ffdce9 15%,transparent 16%),
        linear-gradient(135deg,#ffe6ef,#ffd6e6);

        overflow:hidden;

    }

    .login-box{

        width:1100px;
        height:650px;

        display:flex;

        background:white;

        border-radius:25px;

        overflow:hidden;

        box-shadow:0 25px 60px rgba(255,105,180,.25);

    }

    .left{

        width:45%;

        background:linear-gradient(135deg,#ffd3e5,#ffc4dc);

        display:flex;

        flex-direction:column;

        justify-content:center;

        align-items:center;

        text-align:center;

        padding:50px;

    }

    .left img{

        width:180px;
        margin-bottom:25px;

    }

    .left h1{

        color:#e91e63;
        font-size:60px;

    }

    .left p{

        margin-top:10px;

        color:#666;

        line-height:28px;

    }

    .right{

        width:55%;

        display:flex;

        justify-content:center;

        flex-direction:column;

        padding:70px;

    }

    .right h2{

        font-size:50px;

        color:#e91e63;

        margin-bottom:10px;

    }

    .subtitle{

        color:#777;

        margin-bottom:40px;

    }

    label{

        display:block;

        margin-bottom:10px;

        font-weight:600;

    }

    input{

        width:100%;

        height:55px;

        border:2px solid #ffd0df;

        border-radius:15px;

        padding:15px;

        margin-bottom:25px;

        outline:none;

    }

    input:focus{

        border-color:#ff5d97;

    }

    .remember{

        display:flex;

        align-items:center;

        gap:10px;

        margin-bottom:30px;

    }

    .remember input{

        width:18px;

        height:18px;

        margin:0;

    }

    button{

        width:100%;

        height:58px;

        border:none;

        border-radius:15px;

        background:#ef4d96;

        color:white;

        font-size:18px;

        font-weight:bold;

        cursor:pointer;

        transition:.3s;

    }

    button:hover{

        background:#df3d86;

    }

    </style>

</head>

<body>

<div class="login-box">

<div class="left">


<h1>SIAKAD</h1>

<p>

Sistem Informasi Akademik

<br><br>

Solusi terbaik untuk pengelolaan akademik kampus.

</p>

</div>

<div class="right">

<h2>Login</h2>

<p class="subtitle">

Masuk untuk melanjutkan ke sistem

</p>

<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">

@csrf

<label>Email</label>

<input
type="email"
name="email"
value="{{ old('email') }}"
required>

<label>Password</label>

<input
type="password"
name="password"
required>

<div class="remember">

<input
type="checkbox"
name="remember">

Remember me

</div>

<button>

LOGIN

</button>

</form>

</div>

</div>

</body>

</html>