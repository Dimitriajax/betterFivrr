<x-app-layout>
    <div class="max-w-6xl h-screen flex flex-col items-center mx-auto ">
        @foreach($freelancers as $freelancer)
        <a href="{{ route('user', $freelancer['username'])  }}" class="flex">
            <div class=" h-fit border-b-[3px] border-b-grey w-96 flex">
                <img src="{{ $freelancer['profilepicture'] }}" alt="$freelancer['profilepicture']  }}_logo" class="rounded-full w-10 h-10 ">
                <div class="pl-4 pb-2">
                    <p class=" text-white text-3xl text-bold">{{ $freelancer["username"] }}</p>
                    <p class="text-lightgrey">{{ $freelancer["job"] }}</p>
                </div>
            </div>
        </a>
        @endforeach
        @foreach($employers as $employer)
        <a href="{{ route('user', $employer['company_name'])  }}" class="flex">
            <div class="h-fit border-b-[3px] border-b-grey w-96 flex">
                <img src="{{ $employer['company_logo'] }}" alt="$employer['company_logo'] }}_logo" class="rounded-full w-10 h-10 ">
                <div class="pl-4 pb-4">
                    <p class=" text-white text-3xl text-bold">{{ $employer["company_name"] }}</p>
                    <p class="text-lightgrey">{{ $employer["address"] }}</p>
                </div>
            </div>
        </a>
        @endforeach
        @if($employers)
        <div class="w-full mx-auto h-fit border-b-[3px] border-b-grey pt-20">
            <h2 class="text-white text-3xl font-bold">Beschikbare vacatures bij </h2>
            @foreach($employerPosts as $post)
            <a href="{{ route('application', $post['id']) }}">
                <div class=" w-full h-fit flex py-4">
                    <img src="{{ $employer['company_logo'] }}" alt="" class="h-10 w-10">
                    <div class="pl-4">
                        <p class="text-2xl text-hotpink font-bold">{{ $post["title"] }}</p>
                        <p class="text-xl text-lightgrey">{{ $employer["address"] }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @endif
    </div>

</x-app-layout>