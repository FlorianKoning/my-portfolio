<x-layouts.app>
    {{-- intro dunction screen --}}
    <div class="min-h-screen flex flex-col bg-gradient-to-bl from-gradientBackground to-background shadow-xl">
        <x-introduction-screen />
    </div>

    {{-- about me screen --}}
    <div class="min-h-screen flex flex-col bg-secondBackground shadow-xl">
        <x-aboutme-screen id="aboutMe" />
    </div>

    {{-- projects screen --}}
    <div class="min-h-screen flex flex-col bg-gradient-to-bl from-gradientBackground to-background shadow-xl">
        <x-projects-screen />
    </div>

    {{-- projects screen --}}
    <div class="min-h-screen flex flex-col bg-secondBackground">
        <x-contact-screen />
    </div>


    {{-- Success notivication --}}
    @if (session()->has('succes_contact'))
        <x-succes-notification :option="true" :message="session('succes_contact')" />
    @endif
</x-layouts.app>




