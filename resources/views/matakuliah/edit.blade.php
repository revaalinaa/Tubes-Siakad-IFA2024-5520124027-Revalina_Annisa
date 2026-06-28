<h1>Edit Mata Kuliah</h1>


<form action="/matakuliah/{{ $matakuliah->id }}" method="POST">

@csrf

@method('PUT')


<label>Kode MK</label>
<br>
<input type="text" 
name="kode_mk" 
value="{{ $matakuliah->kode_mk }}">


<br><br>


<label>Nama MK</label>
<br>
<input type="text" 
name="nama_mk" 
value="{{ $matakuliah->nama_mk }}">


<br><br>


<label>SKS</label>
<br>
<input type="text" 
name="sks" 
value="{{ $matakuliah->sks }}">


<br><br>


<label>Semester</label>
<br>
<input type="text" 
name="semester" 
value="{{ $matakuliah->semester }}">


<br><br>


<button type="submit">
Update
</button>


</form>