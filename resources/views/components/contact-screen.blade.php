<div id="contact" class="h-screen relative flex flex-col phone:justify-around flex-grow">
    <div class="sm:h-screen relative isolate flex md:flex-row phone:flex-col justify-between items-center pt-14 lg:px-8">

        {{-- general info --}}
        <div class="textSection scrollHidden hidden lg:flex mx-auto max-w-4xl phone:py-10">
            <div class="flex flex-col phone:gap-4 xl:gap-10 rounded-tl-[100px] rounded-br-[100px] bg-gradient-to-bl from-gradientBackground to-background border-2 border-title p-8 ring-1 ring-gray-900/10 sm:mx-8 sm:p-10 lg:mx-0 shadow-md">
                <form method="POST" action="{{ route('home.contact') }}">
                    @csrf

                    <div class="space-y-12">
                      <div class="pb-12">
                        {{-- form title --}}
                        <div>
                            <h2 class="text-2xl font-semibold text-title text-center">Contact Form</h2>
                            <p class="mt-1 text-sm text-white">Hier kunt u contact met opnemen door uw email achter te laten samen met een berictje.</p>
                        </div>

                        {{-- form inputs --}}
                        <div class="pt-12 w-full h-full flex flex-col content-center gap-6">
                            {{-- full name input --}}
                            <div class="sm:col-span-4">
                                <label for="fullName" class="block text-sm/6 font-medium text-title">Uw volledige naam</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-title focus-within:ring-2 focus-within:ring-inset focus-within:ring-title sm:max-w-full">
                                        <input type="text" name="fullName" id="fullName" autocomplete="fullName" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="Florian Koning">
                                    </div>
                                </div>
                            </div>

                            {{-- email input --}}
                            <div class="sm:col-span-4">
                                <label for="email" class="block text-sm/6 font-medium text-title">Uw Email Address</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-title focus-within:ring-2 focus-within:ring-inset focus-within:ring-title sm:max-w-full">
                                        <input type="text" name="email" id="email" autocomplete="email" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="example@gmail.com">
                                    </div>
                                </div>
                            </div>

                            {{-- subject input --}}
                            <div class="sm:col-span-4">
                                <label for="subject" class="block text-sm/6 font-medium text-title">Uw onderwerp</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-title focus-within:ring-2 focus-within:ring-inset focus-within:ring-title sm:max-w-full">
                                        <input type="text" name="subject" id="subject" autocomplete="subject" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="Software Developer">
                                    </div>
                                </div>
                            </div>

                            {{-- message input --}}
                            <div class="sm:col-span-4">
                                <label for="message" class="block text-sm/6 font-medium text-title">Uw bericht</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-title focus-within:ring-2 focus-within:ring-inset focus-within:ring-title sm:max-w-full">
                                        <textarea type="text" rows="4" name="message" id="message" autocomplete="message" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-white placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="Software Developer"></textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- submit button --}}
                            <div class="sm:col-span-4">
                                <div class="mt-2">
                                    <button type="submit" class="text-lg p-2 rounded-lg bg-secondBackground hover:bg-title text-white shadow-md transition duration-300 ease-in-out">Stuur Email</button>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
        </div>
</div>



