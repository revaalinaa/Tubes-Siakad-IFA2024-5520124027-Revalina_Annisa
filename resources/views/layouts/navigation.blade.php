<nav x-data="{ open: false }"
class="bg-gradient-to-r from-pink-100 via-pink-50 to-pink-100 border-b border-pink-200 shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="max-w-screen-xl mx-auto px-8">

        <div class="flex justify-between h-16">


            <div class="flex">


                <!-- Logo -->
                <div class="shrink-0 flex items-center">

                    <a href="{{ route('dashboard') }}">

                        <div class="flex items-center gap-3">

                    <div class="w-12 h-12 rounded-full bg-white shadow flex items-center justify-center">
                        🎓
                    </div>

                    <div>

                        <h1 class="text-3xl font-bold text-pink-600">
                            SIKAD
                        </h1>

                        <p class="text-xs text-gray-600">
                            Sistem Informasi Akademik
                        </p>

                    </div>

                </div>

                    </a>

                </div>



                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">


                @if(auth()->user()->role == 'admin')



                    <x-nav-link 
                    href="/dashboard"
                    class="text-pink-600 hover:text-pink-700">

                    Dashboard

                    </x-nav-link>




                    <x-nav-link
                    href="/dosen"
                    class="text-pink-700 hover:text-pink-500 font-semibold transition duration-300">
                    Data Dosen

                    </x-nav-link>




                    <x-nav-link
                    href="/mahasiswa"
                    class="text-pink-700 hover:text-pink-500 font-semibold transition duration-300">
                    Data Mahasiswa

                    </x-nav-link>




                   <x-nav-link
                    href="/matakuliah"
                    class="text-pink-700 hover:text-pink-500 font-semibold transition duration-300">
                    Data Mata Kuliah

                    </x-nav-link>




                    <x-nav-link
                    href="/jadwal"
                    class="text-pink-700 hover:text-pink-500 font-semibold transition duration-300">
                    Data Jadwal

                    </x-nav-link>




                    <x-nav-link
                    href="/krs"
                    class="text-pink-700 hover:text-pink-500 font-semibold transition duration-300">
                    Data KRS

                    </x-nav-link>





                @else




                    <x-nav-link 
                    href="/dashboard">

                    Dashboard

                    </x-nav-link>




                    <x-nav-link 
                    href="/jadwal">

                    Lihat Jadwal

                    </x-nav-link>




                    <x-nav-link 
                    href="/krs">

                    Isi KRS

                    </x-nav-link>




                    <x-nav-link 
                    href="/krs">

                    Daftar KRS

                    </x-nav-link>





                @endif



                </div>

            </div>





            <!-- User Dropdown -->

            <div class="hidden sm:flex sm:items-center sm:ms-6">


                <x-dropdown align="right" width="48">


                    <x-slot name="trigger">


                        <button 
                        class="inline-flex items-center px-4 py-2 rounded-xl 
                        bg-white shadow-md 
                        text-pink-600
                        font-semibold
                        hover:bg-pink-100 
                        transition">


                            <div>

                            {{ Auth::user()->name }}

                            </div>


                            <div class="ms-1">


                                <svg 
                                class="fill-current h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">


                                <path 
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"/>


                                </svg>


                            </div>


                        </button>



                    </x-slot>





                    <x-slot name="content">


                        <x-dropdown-link 
                        :href="route('profile.edit')">

                            Profile

                        </x-dropdown-link>





                        <form method="POST" action="{{ route('logout') }}">


                            @csrf



                            <x-dropdown-link 
                            :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">


                                Logout


                            </x-dropdown-link>



                        </form>


                    </x-slot>



                </x-dropdown>



            </div>





            <!-- Hamburger Mobile -->

            <div class="-me-2 flex items-center sm:hidden">


                <button 
                @click="open = ! open"
                class="p-2 rounded-md text-pink-500">


                    <svg 
                    class="h-6 w-6"
                    stroke="currentColor"
                    fill="none"
                    viewBox="0 0 24 24">


                    <path 
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"/>


                    </svg>


                </button>


            </div>




        </div>

    </div>




</nav>