<div id="projects" class="h-screen relative flex flex-col phone:justify-around flex-grow">
    <div class="sm:h-screen relative isolate flex flex-col justify-between items-center pt-14 lg:px-8">
        {{-- page title --}}
        <div class="textSection scrollHidden flex flex-col justify-start xl:mt-5">
            <h1 class="xl:text-5xl phone:text-3xl font-semibold text-title">Mijn Projecten</h1>
        </div>

        <div class="sm:h-screen pt-14 lg:px-8">
            {{-- project list --}}
            <div class="">
                <ul role="list" class="grid phone:grid-rows-2 lg:grid-cols-3 gap-x-3 gap-y-8 sm:gap-x-6 xl:gap-x-8">
                  {{-- password manager --}}
                    <a href="https://github.com/FlorianKoning/Password-Manager" target="_blank">
                        <li class="textSection scrollHidden">
                            <div class="bg-secondBackground hover:bg-hoverTitle relative p-5 rounded-lg transition duration-500 ease-in-out">
                                <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg focus-within:ring-2 focus-within:ring-title focus-within:ring-offset-2">
                                    <img src="{{url('/images/password-manager.png')}}" alt="" class="pointer-events-none object-cover">
                                    <button type="button" class="absolute inset-0 focus:outline-none">
                                        <span class="sr-only text-white">Password Manager</span>
                                    </button>
                                </div>
                                <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-white">Password Manager</p>
                                <div class="flex flex-row gap-6 mt-3 size-8">
                                    <img src="{{url('/images/laravel.png')}}" alt="" class="pointer-events-none object-cover">
                                    <img src="{{url('/images/javascript.png')}}" alt="" class="pointer-events-none object-cover">
                                    <img src="{{url('/images/tailwind.png')}}" alt="" class="pointer-events-none object-cover">
                                </div>
                            </div>
                        </li>
                    </a>

                    {{-- portfolio website --}}
                    <li class="textSection scrollHidden">
                      <div class="bg-secondBackground hover:bg-hoverTitle relative p-5 rounded-lg transition duration-500 ease-in-out">
                        <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg focus-within:ring-2 focus-within:ring-title focus-within:ring-offset-2">
                          <img src="{{url('/images/portfolio.png')}}" alt="" class="pointer-events-none object-cover">
                          <button type="button" class="absolute inset-0 focus:outline-none">
                            <span class="sr-only text-white">Mijn Portfolio Website</span>
                          </button>
                        </div>
                        <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-white">Mijn Portfolio Website</p>
                        <div class="flex flex-row gap-6 mt-3 size-8">
                          <img src="{{url('/images/laravel.png')}}" alt="" class="pointer-events-none object-cover">
                          <img src="{{url('/images/javascript.png')}}" alt="" class="pointer-events-none object-cover">
                          <img src="{{url('/images/tailwind.png')}}" alt="" class="pointer-events-none object-cover">
                        </div>
                      </div>
                    </li>

                    {{-- E-commerce website --}}
                    <a href="https://dbmmilitaria.nl/" target="_blank">
                        <li class="textSection scrollHidden">
                            <div class="bg-secondBackground hover:bg-hoverTitle relative p-5 rounded-lg transition duration-500 ease-in-out">
                                <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg focus-within:ring-2 focus-within:ring-title focus-within:ring-offset-2">
                                    <img src="{{url('/images/dbmMilitaria.png')}}" alt="" class="pointer-events-none object-cover">
                                    <button type="button" class="absolute inset-0 focus:outline-none">
                                        <span class="sr-only text-white">E-commerce website DBMmilitaria.nl</span>
                                    </button>
                                </div>
                                <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-white">E-commerce website DBMmilitaria.nl</p>
                                <div class="flex flex-row gap-6 mt-3 size-8">
                                    <img src="{{url('/images/laravel.png')}}" alt="" class="pointer-events-none object-cover">
                                    <img src="{{url('/images/javascript.png')}}" alt="" class="pointer-events-none object-cover">
                                    <img src="{{url('/images/tailwind.png')}}" alt="" class="pointer-events-none object-cover">
                                </div>
                            </div>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
