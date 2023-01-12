<x-app-layout>
    <main>
        <div class="md:grid md:grid-cols-2 md:max-w-6xl md:mx-auto">
            <section class="px-8 py-4">
                <div class="md:w-[65%]">
                    <h2 class="text-white text-3xl md:hidden font-semibold">Lorem Ipsum Solor Sit Smet, <span class="text-hotpink">Sonsetetur Sadipscing</span> Elitr, Sed Diam Nonumy.</h2>
                    <h2 class="text-white text-[26px] md:block hidden font-semibold">Lorem Ipsum Dolor Sit Amet,<span class="text-hotpink"> Consetetur Adipscing</span> Elit. Nulla Egestas Orci Ac Urna Convallis Pellentesque Eu Dd Arcu. Fusce <span class="text-hotpink">Suscipit</span> Rhoncus Accumsan.</h2>
                </div>
                <p class="text-grey py-4">Place a subtitle here</p>
                <div class="py-6">
                    <a href="{{ route('applications.freelancer') }}" class="rounded-lg bg-purple px-6 py-1 text-hotpink  ">Vind jouw freelancer</a>
                </div>
            </section>
            <section class="px-8 pb-18">
                <h2 class="text-2xl text-white font-bold">Onze Diensten</h2>
                <div class="py-8 gap-8 flex flex-col mx-auto md:mx-0 ">
                    <div class="h-44 md:h-40 bg-[#141414] rounded-[24px] px-4 py-3 flex flex-col gap-4">
                        <div class="flex items-center gap-6">
                            <div class="bg-purple rounded-full h-10 w-10 text-hotpink text-4xl flex items-center justify-center">
                                +
                            </div>
                            <h3 class="text-2xl text-white">Title</h3>
                        </div>
                        <p class="text-grey text-xs">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd </p>
                    </div>
                    <div class="h-44 md:h-40 bg-[#141414] rounded-[24px] px-4 py-3 flex flex-col gap-4">
                        <div class="flex items-center gap-6">
                            <div class="bg-purple rounded-full h-10 w-10 text-hotpink text-4xl flex items-center justify-center">
                                +
                            </div>
                            <h3 class="text-2xl text-white">Title</h3>
                        </div>
                        <p class="text-grey text-xs">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd </p>
                    </div>
                    <div class="h-44 bg-[#141414] rounded-[24px] px-4 py-3 flex flex-col gap-4 md:hidden">
                        <div class="flex items-center gap-6">
                            <div class="bg-purple rounded-full h-10 w-10 text-hotpink text-4xl flex items-center justify-center">
                                +
                            </div>
                            <h3 class="text-2xl text-white">Title</h3>
                        </div>
                        <p class="text-grey text-xs">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd </p>
                    </div>
                </div>
                <div class="py-6 pb-8 md:hidden">
                    <button class="rounded-lg bg-blue px-6 py-1 text-white">Lees meer</button>
                </div>
                <hr class="text-grey md:hidden">
            </section>
        </div>
        <section class="py-12">
            <div class="max-w-6xl mx-auto lg:px-0 px-4">
                <p class="font-bold text-2xl pl-2 text-blue pb-4">Freelancers </p>
                <div class="flex max-h-68 flex-row  items-start items-center overflow-x-auto gap-6 pl-3 sm:pl-0 md:pb-8 overflow-y-hidden relative no-scrollbar">
                    @foreach($freelancers as $freelancer)
                    <div class="bg-[#202020] rounded-xl flex flex-col flex-none sm:flex w-[16.5rem]">
                        <img class="h-36 w-full object-cover rounded-xl" src="{{ $freelancer['primary_picture'] }}" alt="">
                        <div class="relative flex flex-col py-5 px-6">
                            <dl class="font-bold text-xl text-white">{{ $freelancer['title'] }}</dl>
                            <p class="text-lightgrey max-h-24 break-all h-24 overflow-hidden">{{ $freelancer['description'] }}</p>
                            <div class="flex items-center space-x-2 mt-5">
                                <a href="{{ route('application' ,$freelancer['id']) }}  " class="font-bold text-hotpink">Meer</a>
                                <svg class="w-3 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                    <path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section>
        <section class="py-12">
            <div class="max-w-6xl mx-auto lg:px-0 px-4">
                <p class="font-bold text-2xl pl-2 text-blue pb-4">Werkgevers </p>
                <div class="flex max-h-68 flex-row  items-start items-center overflow-x-auto gap-6 pl-3 sm:pl-0 md:pb-8 overflow-y-hidden relative no-scrollbar">
                    @foreach($employers as $employer)
                    <div class="bg-[#202020] rounded-xl flex flex-col flex-none sm:flex w-[16.5rem]">
                        <img class="h-36 w-full object-cover rounded-xl" src="{{ $employer['primary_picture'] }}" alt="">
                        <div class="relative flex flex-col py-5 px-6">
                            <dl class="font-bold text-xl text-white">{{ $employer['title'] }}</dl>
                            <p class="text-lightgrey max-h-24 break-all h-24 overflow-hidden">{{ $employer['description'] }}</p>
                            <div class="flex items-center space-x-2 mt-5">
                                <a href="{{ route('application' ,$employer['id']) }}" class="font-bold text-hotpink">Meer</a>
                                <svg class="w-3 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                    <path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section>
        <!-- <section class="px-8 md:pt-16 md:max-w-5xl md:mx-auto =">
            <hr class="text-grey">
            <h2 class="text-white text-3xl w-fit mx-auto pt-6 md:text-4xl font-bold">Ontdek onze <span class="text-blue">Creators</span></h2>
            <div class="py-5 md:pt-16 flex flex-col md:flex-row mx-auto w-3/4 md:w-full md:items-center md:justify-between gap-3">
                <div class="h-72 ">
                    <img src="../images/profiles/reygan.png" alt="Cat" class="rounded-2xl -z-10 object-fit w-full md:h-full md:max-w-5/6 md:object-cover md:opacity-60">
                    <div class="rounded-b-2xl w-full bg-grey opacity-60 relative -top-10 h-10 px-2 z-10 md:max-w-4/6"></div>
                    <p class="z-40 relative -top-[75px] left-2 z-40 font-semibold"><span class="text-hotpink font-bold">@</span>georgei</p>
                    <button class="text-hotpink bg-purple text-xs px-1.5 py-1.5 rounded-md relative z-40 -top-24 left-36 md:left-40">Bekijk profiel</button>
                </div>
                <div class="h-72 md:h-[22rem]">
                    <img src="../images/profiles/reygan.png" alt="Cat" class="rounded-2xl -z-10 object-fit w-full md:h-full md:max-w-5/6 md:object-cover">
                    <div class="rounded-b-2xl w-full bg-grey opacity-60 relative -top-10 h-10 px-2 z-10 md:max-w-5/6"></div>
                    <p class="z-40 relative -top-[75px] left-2 z-40 font-semibold"><span class="text-hotpink font-bold">@</span>chanel</p>
                    <button class="text-hotpink bg-purple text-xs px-1.5 py-1.5 rounded-md relative z-40 -top-24 left-36 md:left-44">Bekijk profiel</button>
                </div>
                <div class="h-72 ">
                    <img src="../images/profiles/reygan.png" alt="Cat" class="rounded-2xl -z-10 object-fit w-full md:h-full md:max-w-5/6 md:object-cover md:opacity-60">
                    <div class="rounded-b-2xl w-full bg-grey opacity-60 relative -top-10 h-10 px-2 z-10 md:max-w-4/6"></div>
                    <p class="z-40 relative -top-[75px] left-2 z-40 font-semibold"><span class="text-hotpink font-bold">@</span>lisa</p>
                    <button class="text-hotpink bg-purple text-xs px-1.5 py-1.5 rounded-md relative z-40 -top-24 left-36 md:left-40">Bekijk profiel</button>
                </div>
            </div>
        </section> -->
    </main>
</x-app-layout>