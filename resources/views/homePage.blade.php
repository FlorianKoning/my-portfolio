{{-- js and css files --}}
<link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css" >
<script defer src="{{ asset('js/index.js') }}" type="text/javascript"></script>



<x-layouts.app>
    {{-- intro dunction screen --}}
    <div class="min-h-screen flex flex-col bg-gradient-to-bl from-gradientBackground to-background">
        <x-introduction-screen />
    </div>

</x-layouts.app>




