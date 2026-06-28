<x-app-layout>

<div class="min-h-screen bg-pink-50 py-10">

<div class="max-w-xl mx-auto bg-white rounded-3xl shadow-lg p-8">


<h1 class="text-3xl font-bold text-pink-600 mb-8 text-center">

🌸 Tambah Jadwal

</h1>



<form action="/jadwal" method="POST">

@csrf



<div class="mb-5">

<label class="block text-pink-700 font-semibold mb-2">
Dosen
</label>

<select 
name="dosen_id"
class="w-full rounded-xl border-pink-200 focus:ring-pink-300 focus:border-pink-400">

@foreach($dosen as $d)

<option value="{{$d->id}}">
{{$d->nama_dosen}}
</option>

@endforeach

</select>

</div>




<div class="mb-5">

<label class="block text-pink-700 font-semibold mb-2">
Mata Kuliah
</label>


<select 
name="matakuliah_id"
class="w-full rounded-xl border-pink-200 focus:ring-pink-300 focus:border-pink-400">


@foreach($matakuliah as $m)

<option value="{{$m->id}}">
{{$m->nama_mk}}
</option>

@endforeach


</select>

</div>




<div class="mb-5">

<label class="block text-pink-700 font-semibold mb-2">
Hari
</label>


<input 
type="text"
name="hari"

class="w-full rounded-xl border-pink-200 focus:ring-pink-300 focus:border-pink-400"
placeholder="Contoh: Senin">


</div>




<div class="mb-5">


<label class="block text-pink-700 font-semibold mb-2">
Jam
</label>


<input 

type="time"

name="jam"

class="w-full rounded-xl border-pink-200 focus:ring-pink-300 focus:border-pink-400">


</div>




<div class="mb-6">


<label class="block text-pink-700 font-semibold mb-2">
Kelas
</label>


<input 

type="text"

name="kelas"

class="w-full rounded-xl border-pink-200 focus:ring-pink-300 focus:border-pink-400"

placeholder="Contoh: IFA">


</div>




<button

class="w-full bg-pink-400 hover:bg-pink-500 text-white font-bold py-3 rounded-xl transition">


Simpan


</button>



</form>



</div>


</div>


</x-app-layout>