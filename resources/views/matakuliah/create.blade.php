<x-app-layout>

<div class="min-h-screen bg-pink-50 py-10">


<div class="max-w-xl mx-auto">


<div class="bg-white shadow-xl rounded-3xl p-8">


<h1 class="text-3xl font-bold text-pink-600 mb-6 text-center">

Tambah Mata Kuliah

</h1>



<form action="/matakuliah" method="POST">


@csrf



<div class="mb-4">

<label class="block text-gray-700 font-semibold mb-2">
Kode MK
</label>


<input 
type="text"
name="kode_mk"

placeholder="Masukkan kode MK"

class="w-full px-4 py-3 rounded-xl border border-pink-200 
focus:ring-2 focus:ring-pink-300 focus:outline-none">


</div>





<div class="mb-4">


<label class="block text-gray-700 font-semibold mb-2">

Nama MK

</label>


<input 

type="text"

name="nama_mk"

placeholder="Masukkan nama mata kuliah"

class="w-full px-4 py-3 rounded-xl border border-pink-200
focus:ring-2 focus:ring-pink-300 focus:outline-none">


</div>





<div class="mb-4">


<label class="block text-gray-700 font-semibold mb-2">

SKS

</label>


<input 

type="number"

name="sks"

placeholder="Jumlah SKS"

class="w-full px-4 py-3 rounded-xl border border-pink-200
focus:ring-2 focus:ring-pink-300 focus:outline-none">


</div>





<div class="mb-6">


<label class="block text-gray-700 font-semibold mb-2">

Semester

</label>


<input 

type="number"

name="semester"

placeholder="Semester"

class="w-full px-4 py-3 rounded-xl border border-pink-200
focus:ring-2 focus:ring-pink-300 focus:outline-none">


</div>






<button

class="w-full bg-pink-400 hover:bg-pink-500 
text-white font-bold py-3 rounded-xl shadow">


Simpan


</button>



</form>



</div>


</div>


</div>


</x-app-layout>