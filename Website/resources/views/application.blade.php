<x-app-layout>
    <div class="max-w-4xl mx-auto">
        <img src="{{ $post['primary_picture'] }}" alt="image" class="w-full md:h-80 h-72 object-cover">
        <section class="flex justify-between md:flex-row flex-col md:px-0 px-8">
            <div class="py-8 flex items-center gap-6">
                <a href="{{ route('user', $post['username'] ) }}">
                    <img src="{{ $post['profilepicture'] }}" alt="" class="rounded-full h-24 w-24 object-cover">
                </a>
                <div class="flex flex-col items-start gap-4 justify-start">
                    <p class="text-3xl text-white font-bold"><span class="text-hotpink">@</span>{{ $post['username'] }}</p>
                    <a href="" class="right-6 text-sm text-white bg-red-400 px-4 py-[2px] rounded-lg w-fit">{{ $post['sector'] }}</a>
                </div>
            </div>
            <div class="flex items-center">
                <button class="text-lightgrey border-blue border-2 rounded-lg py-1 px-2">stuur {{ $post['username'] }} een bericht</button>
            </div>
        </section>
        <section class="pb-4 md:px-0 px-8 md:pt-0 pt-12">
            <div class="flex justify-between md:flex-row flex-col">
                <div class="flex flex-col md:w-3/5">
                    <h2 class="text-hotpink text-3xl font-bold py-6">Beschrijving</h2>
                    <div class="bg-[#202020] py-5 px-5 rounded-xl">
                        <p class="text-lightgrey">
                            {{ $post['description'] }}
                        </p>
                    </div>
                </div>
                <div class="flex flex-col w-64">
                    <h2 class="text-blue text-3xl font-bold py-6">Pakket</h2>
                    <div class="bg-[#202020] text-white  py-5 px-5 rounded-xl ">
                        <h4 class="font-semibold text-lg">€ {{ $post['price'] }} p/uur</h4>
                        <li>
                            <ul></ul>
                        </li>
                    </div>
                </div>
            </div>
        </section>
        <div class="py-8">
            <hr>
        </div>
        <section class="py-8 md:px-0 px-8">
            <div class="flex justify-between md:h-96 md:flex-row flex-col md:gap-0 gap-4">
                <img src="{{ $post['primary_picture'] }}" alt="" class="md:h-96 h-80 w-[33rem] object-cover">
                <div class="md:w-[22rem] md:grid md:grid-rows-2 gap-4 flex flex-col">
                    <div>
                        <img src="{{ $post['secondary_picture'] }}" alt="" class="object-cover w-full md:h-full h-48">
                    </div>
                    <div>
                        <img src="{{ $post['tertiary_picture'] }}" alt="" class="object-cover w-full md:h-full h-48">
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>