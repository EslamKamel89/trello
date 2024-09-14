<div class="max-h-full w-[260px] shrink-0 self-start rounded-lg bg-white shadow-lg">
    <!-- //! Title Container -->
    <div class="flex items-center justify-between">
        <!-- //? Form -->
        <div x-data="{ editing: false }" x-on:click.outside="editing = false"
            class="flex h-8 w-full min-w-0 items-center px-4 pr-0">
            <button class="w-full text-left px-1.5" x-on:click="editing = true" x-show="!editing">
                Column Title
            </button>
            <div x-show="editing">
                <form action="">
                    <x-text-input value='Column Title' class="px-1.5 w-full h-8" />
                </form>
            </div>
        </div>
        <!--  Form -->
        <!-- //! Button -->
        <div class="px-3.5 py-3">
            <x-dropdown>
                <x-slot name="trigger">
                    <x-svg.ellipsis />
                </x-slot>
                <x-slot name="content">drop down content</x-slot>
            </x-dropdown>
        </div>
        <!-- Button -->
    </div>
    <!--  Title Container -->
    <div>cards</div>
    <div>create card</div>
</div>