<h2>Data KRS</h2>

<table border="1">

<tr>
<th>Mahasiswa</th>
<th>Mata Kuliah</th>
<th>Hari</th>
<th>Jam</th>
</tr>


@foreach($krs as $k)

<tr>

<td>
{{ $k->mahasiswa->nama_mahasiswa }}
</td>

<td>
{{ $k->jadwal->matakuliah->nama_mk }}
</td>

<td>
{{ $k->jadwal->hari }}
</td>

<td>
{{ $k->jadwal->jam }}
</td>


</tr>

@endforeach


</table>