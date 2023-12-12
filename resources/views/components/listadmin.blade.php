<div id="listkomik" class="w-full h-full flex">
    <div class="w-full flex flex-col bg-[#588d24]">.
        <ul class="mx-6 mb-6 grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4 lg:gap-12">
            @foreach ($komik as $kmk)
                <li>
                    <a href="{{ asset($kmk->pdf_path) }}" target='_blank'>
                        <div class="h-72 grid place-items-center bg-[#7cab4d] rounded-3xl hover:bg-green-500 ease-linear duration-200">
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
