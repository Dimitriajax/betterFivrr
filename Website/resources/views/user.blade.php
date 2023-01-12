<x-app-layout>
    <img src="" alt="background" class="absolute -z-10 w-screen h-screen object-cover">
    <div class="bg-dark md:max-w-5xl h-screen mx-auto h-screen overflow-y-auto no-scrollbar px-4 md:px-0">
        <div class="md:grid md:grid-cols-2 md:py-16 py-14 grid-column-size flex flex-col md:max-w-4xl m-auto">
            <div class="md:grid md:grid-cols-2 md:mx-0 mx-auto w-[90%] md:w-full">
                <img class="rounded-full w-48 h-48 object-cover" src="{{ $userInfo['profilepicture'] }}" alt="CATboy">
                <div class="md:py-0 py-4">
                    <div class="text-lightgrey text-sm">
                        <span class="text-hotpink">@</span>{{ $userInfo["username"] }}
                    </div>
                    <div class="text-lightgrey text-3xl flex">
                        <p>{{ $userInfo["firstname"] }}</p>
                        <p class="pl-2">{{ $userInfo["middlename"] }}</p>
                        <p class="pl-2">{{ $userInfo["lastname"] }}</p>
                    </div>
                    <div class="text-blue">{{ $userInfo["job"] }}</div>
                    <hr class="my-5 border-grey">
                    <div class="grid grid-cols-2">
                        <div>
                            <h2 class="text-xl text-lightgrey">
                                Skills
                            </h2>
                            <ul>
                                <li class="text-grey">- Lorem</li>
                                <li class="text-grey">- Frontend</li>
                                <li class="text-grey">- Php</li>
                                <li class="text-grey">- Vuejs</li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="text-xl text-lightgrey text-right">
                                Tarief
                            </h2>
                            <p class="text-grey text-right">
                                €1.000 p/u -
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:px-10 md:w-full w-[90%] md:mx-0 mx-auto">
                <h2 class="text-2xl text-lightgrey font-bold">
                    About me
                </h2>
                <p class="text-grey pt-2">
                    {{ $userInfo["about"] }}
                </p>
            </div>
        </div>
        <hr class="profile-divider border-grey">
        <div class="max-w-4xl mx-auto md:py-8 py-10 flex justify-between md:flex-row flex-col md:px-0 px-4">
            <div class="flex justify-between flex-col">
                <div>
                    <h1 class="text-lightgrey text-3xl font-bold">Mijn <span class="text-hotpink">aanvragen</span></h1>
                </div>
                <div class="md:w-[28.5rem] ">
                    @foreach($posts as $post)
                    <div class="bg-[#202020] w-full h-fit rounded-2xl mt-5 p-3 flex md:flex-row flex-col">
                        <div class=" p-2 md:w-8/12">
                            <h2 class="text-lightgrey text-xl pb-2 font-semibold">{{ $post['title'] }}</h2>
                            <p class="text-sm text-grey ">{{ $post['description'] }}</p>
                        </div>
                        <div class="flex md:flex-col text-center justify-between items-end py-4">
                            <div>
                                <a href="" class="right-6 text-sm text-white bg-red-400 px-4 py-[2px] rounded-lg w-fit">{{ $post['sector'] }}</a>
                            </div>
                            <div class="flex items-center space-x-1 mt-5">
                                <a href="{{ route('application', $post['id']) }}" class="font-bold text-hotpink">Bekijk vacature</a>
                                <svg class="w-3 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                    <path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div>
                <div class="md:py-5 flex py-6">
                    <div class="flex gap-4 items-center">
                        <h2 class="text-lightgrey text-3xl font-bold">Rating</h2>
                        <div class="rounded-full font-bold text-hotpink bg-purple w-8 h-8 flex justify-center items-center">
                            4
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-lightgrey text-xl">Reviews</h2>
                </div>
                <div class="bg-[#202020] md:w-96 w-full h-fit rounded-2xl mt-5 p-3 text-lightgrey flex justify-between md:flex-row flex-col md:gap-0 gap-2">
                    <div class="md:w-52 w-full md:order-1 order-2">
                        <p>"Fijne medewerker"</p>
                        <div class="flex justify-between">
                            <p class="text-blue font-semibold">3/5</p>
                            <a class="text-blue">Bekijk review</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-[2px] justify-start w-32 md:order-2 order-1 ">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8">
                    </div>
                </div>
                <div class="bg-[#202020] md:w-96 h-fit rounded-2xl mt-5 p-3 text-lightgrey flex justify-between md:flex-row flex-col md:gap-0 gap-2">
                    <div class="md:w-52 w-full md:order-1 order-2">
                        <p>"Fantastisch eindproduct"</p>
                        <div class="flex justify-between">
                            <p class="text-blue font-semibold">4/5</p>
                            <a class="text-blue">Bekijk review</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-[2px] w-32 md:order-2 order-1 ">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8">
                    </div>
                </div>
                <div class="bg-[#202020] md:w-96 h-fit rounded-2xl mt-5 p-3 text-lightgrey flex justify-between md:flex-row flex-col md:gap-0 gap-2">
                    <div class="md:w-52 w-full md:order-1 order-2">
                        <p>"Goede comminucatie hoor"</p>
                        <div class="flex justify-between">
                            <p class="text-blue font-semibold">4/5</p>
                            <a class="text-blue">Bekijk review</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-[2px] w-32 md:order-2 order-1 ">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8 ">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8 ">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8">
                        <img src="../images/profiles/star.png" alt="Star" class="md:h-6 md:w-6 w-8 h-8">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>