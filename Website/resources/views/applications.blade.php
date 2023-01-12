<x-app-layout>
    <div class="">
        <div class="md:max-w-6xl mx-auto md:px-0 px-8 pt-20 flex md:flex-row flex-col items-center md:gap-12 gap-6">
            <h2 class="text-white text-4xl font-bold md:w-2/5">Ga opzoek naar de <span class="text-hotpink">{{ $search  }}</span> die bij <span class="text-hotpink">jou</span> past!</h2>
            <img src="../images/pexels-andrea-piacquadio-3764494.jpg" class="w-96 h-40 object-cover rounded-md">
        </div>
        <section class="max-w-6xl mx-auto py-8 md:px-0 px-8">
            <p class="text-white font-bold text-xl">Filter:</p>
            <div class="flex flex-wrap gap-4 pt-4">
                <a href="" class="right-6 text-sm text-white bg-red-500 px-4 py-[2px] rounded-lg w-fit">IT</a>
                <a href="" class="right-6 text-sm text-white bg-red-400 px-4 py-[2px] rounded-lg w-fit">Kunst</a>
                <a href="" class="right-6 text-sm text-white bg-orange-500 px-4 py-[2px] rounded-lg w-fit">Dans</a>
                <a href="" class="right-6 text-sm text-white bg-yellow-500 px-4 py-[2px] rounded-lg w-fit">Theater</a>
                <a href="" class="right-6 text-sm text-white bg-yellow-400 px-4 py-[2px] rounded-lg w-fit">Sport</a>
                <a href="" class="right-6 text-sm text-white bg-green-400 px-4 py-[2px] rounded-lg w-fit">Muziek</a>
                <a href="" class="right-6 text-sm text-white bg-green-500 px-4 py-[2px] rounded-lg w-fit">Natuur</a>
                <a href="" class="right-6 text-sm text-white bg-cyan-400 px-4 py-[2px] rounded-lg w-fit">Fotografie</a>
                <a href="" class="right-6 text-sm text-white bg-blue px-4 py-[2px] rounded-lg w-fit">Videografie</a>
                <a href="" class="right-6 text-sm text-white bg-violet-600 px-4 py-[2px] rounded-lg w-fit">Culinair</a>
            </div>
        </section>
        @foreach( $sectors as $sector)
        <section>
            <div class="max-w-6xl mx-auto lg:px-0 px-4">
                <p class="font-bold text-2xl pl-2 text-blue pb-4">{{ $sector }} </p>
                <div class="flex max-h-68 flex-row  items-start items-center overflow-x-auto gap-6 pl-3 sm:pl-0 md:pb-8 overflow-y-hidden relative no-scrollbar">
                    @foreach($posts[$sector] as $post)
                    <div class="bg-[#202020] rounded-xl flex flex-col flex-none sm:flex w-[16.5rem]">
                        <img class="h-36 w-full object-cover rounded-xl" src="{{ $post['primary_picture'] }}" alt="">
                        <div class="relative flex flex-col py-5 px-6">
                            <dl class="font-bold text-xl text-white">{{ $post['title'] }}</dl>
                            <p class=" text-lightgrey max-h-24 break-all h-24 overflow-hidden">{{ $post['description'] }}</p>
                            <div class="flex items-center space-x-2 mt-5">
                                <a href="{{ route('application', $post['id']) }}" class="font-bold text-hotpink">Meer</a>
                                <svg class="w-3 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                    <path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section>
        @endforeach
    </div>
</x-app-layout>