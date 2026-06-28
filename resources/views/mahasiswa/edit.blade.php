<h1>Edit Mahasiswa</h1>


<form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">

@csrf
@method('PUT')


NIM

<input 
type="text"
name="nim"
value="{{ $mahasiswa->nim }}">


<br>


Nama

<input 
type="text"
name="nama_mahasiswa"
value="{{ $mahasiswa->nama_mahasiswa }}">


<br>


Jurusan

<input 
type="text"
name="jurusan"
value="{{ $mahasiswa->jurusan }}">


<br>


Angkatan

<input 
type="text"
name="angkatan"
value="{{ $mahasiswa->angkatan }}">


<br>


<button>
Update
</button>


</form>