<div id="home" class="h-screen relative flex flex-col phone:justify-around flex-grow">
    <div class="sm:h-screen relative isolate flex md:flex-row phone:flex-col justify-between items-center pt-14 lg:px-8">

        {{-- general info --}}
        <div class="textSection scrollHidden hidden lg:block mx-auto max-w-2xl phone:py-10">
            <div class="flex flex-col phone:gap-4 xl:gap-10 w-[350px] rounded-tl-[100px] rounded-br-[100px] bg-border p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:p-10 lg:mx-0 shadow-md">
                <div class="flex flex-col mx-auto">
                    <img class="phone:size-16 xl:size-24 mx-auto rounded-full border border-title" src="{{url('/images/me-cropped.jpg')}}" alt="selfie">
                    <h1 class=" xl:text-xl font-medium text-title mx-auto">Florian</h1>
                    <p class="text-base font-normal text-white">Full-stack Developer</p>
                </div>
                <div class="flex flex-col gap-4 mx-auto">
                    <div class="flex flex-row gap-4">
                        <i class="w-4 text-title my-auto fa-solid fa-envelope"></i>
                        <p class="text-white text-sm text-light">florian.koning2004@gmail.com</p>
                    </div>
                    <div class="flex flex-row gap-4">
                        <i class="w-4 text-title my-auto fa-solid fa-location-dot"></i>
                        <p class="text-white text-sm text-light">Nederland - Delft</p>
                    </div>
                    {{-- <div class="flex flex-row gap-4">
                        <i class="w-4 text-title my-auto fa-solid fa-briefcase"></i>
                        <p class="text-white text-sm text-light">Part Time</p>
                    </div> --}}
                    <div class="flex flex-row gap-4">
                        <i class="w-4 text-title my-auto fa-solid fa-link"></i>
                        <p class="text-white text-sm text-light">www.floriankoning.nl</p>
                    </div>
                    <div class="grid grid-cols-3 grid-rows-2 gap-4">
                        <button class="bg-title font-medium text-sm px-2 rounded-[20px] cursor-default">PHP</button>
                        <button class="bg-title font-medium text-sm px-2 rounded-[20px] cursor-default">Laravel</button>
                        <button class="bg-title font-medium text-sm px-2 rounded-[20px] cursor-default">HTML</button>
                        <button class="bg-title font-medium text-sm px-2 rounded-[20px] cursor-default">CSS</button>
                        <button class="bg-title font-medium text-sm px-2 rounded-[20px] cursor-default">GIT</button>
                    </div>
                </div>
            </div>
        </div>



        {{-- page title --}}
        <div class="textSection scrollHidden mx-auto max-w-2xl">
            <div class="flex flex-col phone:gap-1 xl:gap-3 w-auto p-10 text-white phone:text-base xl:text-2xl font-light">
                <p class="text-title text-base -indent-8">{{ __('<h1>') }}</p>
                <h1><span class="xl:text-5xl phone:text-xl font-normal text-title">Hey</span><br>IK BEN <span class="ml-2 phone:text-xl xl:text-5xl font-medium text-title">Florian Koning</span></h1>
                <p>Gedreven Developer met ervaring in Laravel en moderne frontend</p>
                <p class="text-title text-base -indent-8">{{ __('</h1>') }}</p>
            </div>
        </div>


        {{-- general info for on phone and ipad --}}
        <div class="textSection scrollHidden lg:hidden block mx-auto max-w-2xl min-[400px]:py-10">
            <div class="flex flex-col phone:gap-4 xl:gap-10 w-[350px] rounded-tl-[100px] rounded-br-[100px] bg-border p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:p-10 lg:mx-0">
                <div class="flex flex-col mx-auto">
                    <img class="phone:size-16 xl:size-24 mx-auto rounded-full border border-title" src="{{url('/images/me-cropped.jpg')}}" alt="selfie">
                    <h1 class=" xl:text-xl font-medium text-title mx-auto">Florian</h1>
                    <p class="text-base font-normal text-white">Full-stack Developer</p>
                </div>
                <div class="flex flex-col gap-3 mx-auto">
                    <div class="flex flex-row gap-4">
                        <i class="text-title my-auto fa-solid fa-envelope"></i>
                        <p class="text-white text-sm text-light">florian.koning2004@gmail.com</p>
                    </div>
                    <div class="flex flex-row gap-4">
                        <i class="text-title my-auto fa-solid fa-location-dot"></i>
                        <p class="text-white text-sm text-light">Nederland - Delft</p>
                    </div>
                    <div class="flex flex-row gap-4">
                        <i class="text-title my-auto fa-solid fa-link"></i>
                        <p class="text-white text-sm text-light">www.floriankoning.nl</p>
                    </div>
                    <div class="grid grid-cols-3 grid-rows-2 gap-4">
                        <button class="bg-title font-medium text-sm px-2 rounded-[20px] cursor-default">PHP</button>
                        <button class="bg-title font-medium text-sm px-2 rounded-[20px] cursor-default">Laravel</button>
                        <button class="bg-title font-medium text-sm px-2 rounded-[20px] cursor-default">HTML</button>
                        <button class="bg-title font-medium text-sm px-2 rounded-[20px] cursor-default">CSS</button>
                        <button class="bg-title font-medium text-sm px-2 rounded-[20px] cursor-default">GIT</button>
                    </div>
                </div>
            </div>
        </div>


        {{-- experience details --}}
        <div class="textSection scrollHidden hidden lg:block mx-auto max-w-2xl sm:py-48 lg:py-56">
            <div class="flex flex-col gap-12 w-60 rounded-[50px] bg-border p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:p-10 lg:mx-0 shadow-sm">
                <div class="flex flex-row gap-4">
                    <span class="digit-box text-4xl font-medium text-title" secondValue="300" value="3">0</span>
                    <p class="text-base font-normal text-white">Programeer Talen</p>
                </div>
                <div class="flex flex-row gap-4">
                    <span class="digit-box text-4xl font-medium text-title" secondValue="500" value="5">0</span>
                    <p class="text-base font-normal text-white">Development Tool</p>
                </div>
                <div class="flex flex-row gap-4">
                    <span class="digit-box text-4xl font-medium text-title" secondValue="100" value="2">0</span>
                    <p class="text-base font-normal text-white">Jaar aan Ervaring</p>
                </div>
            </div>
        </div>
    </div>

    {{-- bounsing mouse --}}
    <div class="textSection scrollHidden hidden xl:flex relative isolate justify-center items-center px-6 lg:px-8">
        <div class="animate-bounce">
            <i class="text-title text-xl fa-solid fa-arrow-down"></i>
        </div>
    </div>
</div>
