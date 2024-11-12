<button {{ $attributes->merge(['type' => 'submit', 'class' => 'block text-center px-4 py-2 bg-cyan-400 border border-transparent rounded-md
font-semibold text-xs text-black uppercase tracking-widest hover:bg-transparent hover:border-white hover:text-white focus:bg-transparent active:bg-transparent
transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
