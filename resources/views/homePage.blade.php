<x-layouts.app>
    {{-- intro dunction screen --}}
    <div class="min-h-screen flex flex-col bg-gradient-to-bl from-gradientBackground to-background shadow-xl">
        <x-introduction-screen />
    </div>

    {{-- about me screen --}}
    <div class="min-h-screen flex flex-col bg-secondBackground">
        <x-aboutme-screen id="aboutMe" />
    </div>

    {{-- projects screen --}}
    <div class="min-h-screen flex flex-col bg-secondBackground">
        <x-projects-screen />
    </div>

    {{-- projects screen --}}
    <div class="min-h-screen flex flex-col bg-secondBackground">
    </div>
</x-layouts.app>




