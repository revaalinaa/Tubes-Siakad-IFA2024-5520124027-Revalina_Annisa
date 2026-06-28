<h2>Edit Dosen</h2>


<form action="/dosen/{{$dosen->id}}" method="POST">

@csrf

@method('PUT')


NIDN

<input type="text" name="nidn"
value="{{$dosen->nidn}}">


<br>


Nama

<input type="text" name="nama_dosen"
value="{{$dosen->nama_dosen}}">


<br>


Email

<input type="email" name="email"
value="{{$dosen->email}}">


<br>


No HP

<input type="text" name="no_hp"
value="{{$dosen->no_hp}}">


<br>


<button>
Update
</button>


</form>