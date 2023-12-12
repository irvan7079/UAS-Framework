<div id="listkomik" class="w-full h-full flex">
    <div class="w-full flex flex-col bg-[#8d6624]">.
        <ul class="mx-6 mb-6 grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4 lg:gap-12">
            @foreach ($komik as $kmk)
                <li>
                    <a href="{{ route('login') }}">
                        <div class="h-72 grid place-items-center bg-[#9d7d44] rounded-3xl hover:bg-yellow-500 ease-linear duration-200">
                            <img src="{{ asset($kmk->image_path) }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                        </div>

                        <div class="pt-5 mb-2 text-white">
                            <h4 class="font-oswald font-bold uppercase">{{ $kmk->nama }}</h4>
                            <p class="paragraph">{{ "Genre: ".$kmk->genre }}</p>
                            <p class="paragraph">{{ "Rating: ".$kmk->rating }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
