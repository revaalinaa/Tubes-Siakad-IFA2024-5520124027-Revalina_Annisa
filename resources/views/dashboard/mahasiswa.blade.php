<div class="bg-white shadow rounded-2xl p-8">


<h1 class="text-3xl text-pink-600 font-bold">
    Dashboard Mahasiswa
</h1>



<div class="mt-5 bg-pink-50 p-5 rounded-xl">

    Selamat datang mahasiswa,
    {{ Auth::user()->name }}

</div>




<div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-6">


    <div class="bg-pink-100 p-5 rounded-xl">

        <h3 class="font-bold text-pink-600">
            Jadwal Kuliah
        </h3>

        <p class="mt-2 text-gray-600">
            Lihat jadwal kuliah
        </p>

        <a href="/jadwal"
        class="inline-block mt-4 bg-pink-400 text-white px-5 py-3 rounded-xl">

        Lihat Jadwal

        </a>

    </div>





    <div class="bg-pink-100 p-5 rounded-xl">

        <h3 class="font-bold text-pink-600">
            Isi KRS
        </h3>

        <p class="mt-2 text-gray-600">
            Ambil mata kuliah
        </p>


        <a href="/krs/create"
        class="inline-block mt-4 bg-pink-400 text-white px-5 py-3 rounded-xl">

        Tambah KRS

        </a>


    </div>





    <div class="bg-pink-100 p-5 rounded-xl">


        <h3 class="font-bold text-pink-600">
            Daftar KRS
        </h3>


        <p class="mt-2 text-gray-600">
            Lihat KRS yang diambil
        </p>


        <a href="/krs"
        class="inline-block mt-4 bg-pink-400 text-white px-5 py-3 rounded-xl">

        Lihat KRS

        </a>


    </div>



</div>


</div>