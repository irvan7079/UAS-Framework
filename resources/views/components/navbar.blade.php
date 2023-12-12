<nav class="flex flex-row p-8 justify-between items-center bg-yellow-800 z-10 sticky top-0">
    <a href="#" class="basis-1/4">
        <img src="{{ asset('assets/images/Zhongli.png') }}" alt="Logo ZhongLi" class="w-[140px] h-[120px]">
    </a>
    <ul class="flex flex-row gap-12 justify-center basis-1/2 text-white font-bold text-3xl">
        <li class="hover:text-yellow-500 duration-300"><a href="{{ route('home') }}">Home</a></li>
        <li class="hover:text-yellow-500 duration-300"><a href="#listkomik">Komik</a></li>
        <li class="hover:text-yellow-500 duration-300"><a href="#about">Tentang</a></li>
    </ul>
    <div class="basis-1/4 flex justify-end">
        @include('components.button', ['nama' => 'Login'])
    </div>
</nav>
