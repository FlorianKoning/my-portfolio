<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-title border border-transparent rounded-md font-semibold text-xs text-border uppercase tracking-widest hover:bg-title focus:bg-title active:bg-title focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
