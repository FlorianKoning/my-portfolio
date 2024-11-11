<div id="about-me" class="object-none h-screen relative flex flex-col phone:justify-around flex-grow">
    <div class="sm:h-screen relative isolate flex md:flex-row phone:flex-col items-center justify-evenly pt-14 lg:px-8">
        {{-- general info --}}
        <div class="textSection scrollHidden flex flex-col gap-12 mx-auto max-w-2xl phone:py-10">

            <p class="text-base text-title lg:-indent-8 phone:-indent-4">{{ __('<div>') }}</p>

            <div class="w-fit h-fit p-5 rounded-tl-[40px] rounded-br-[40px] border-2 border-title bg-gradient-to-bl from-gradientBackground to-background shadow-xl">
                <h1 class="phone:text-base xl:text-3xl font-medium text-white">Florian Koning</h1>
            </div>

            <div class="typeAnimation hone:w-80 lg:w-auto h-fit p-5 rounded-xl border-2 bg-gradient-to-bl from-gradientBackground to-background shadow-xl">
                <h1
                    id="aboutMeText" 
                    value="" 
                    class="break-words phone:text-xs xl:text-xl font-medium text-white">
                </h1>
            </div>

            <p class="text-base text-title lg:-indent-8 phone:-indent-4">{{ __('</div>') }}</p>
        </div>

        {{-- foto --}}
        <div class="textSection scrollHidden hidden md:flex flex-col gap-12 mx-auto max-w-2xl phone:py-10">
            <div class="md:w-52 xl:w-80 h-fit rounded-tl-[40px] rounded-br-[40px] shadow-xl">
                <img class="w-80 rounded-tl-[40px] rounded-br-[40px] mx-auto border-4 border-title" src="{{url('/images/fotoMe.jpg')}}" alt="selfie">
            </div>
        </div>
    </div>
</div>
