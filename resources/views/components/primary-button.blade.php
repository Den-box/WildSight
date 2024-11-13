<button {{ $attributes->merge(['type' => 'submit', 'class' => 'block text-center px-4 py-4 bg-button border border-transparent rounded-lg text-black
uppercase hover:bg-button_hover focus:bg-button_hover active:bg-button_hover
transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
