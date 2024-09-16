<div class="flex max-h-full w-[260px] shrink-0 flex-col self-start rounded-lg bg-white shadow-lg">
    <!-- //! Title Container -->
    <div class="flex items-center justify-between">
        <!-- //? Form -->
        <div x-data="{ editing: false }" x-on:click.outside="editing = false"
            class="flex h-8 w-full min-w-0 items-center px-4 pr-0">
            <button class="w-full px-1.5 text-left font-medium" x-on:click="editing = true" x-show="!editing">
                {{ $column->title }}
            </button>
            <div x-show="editing">
                <form action="">
                    <x-text-input value="Column Title" class="h-8 w-full px-1.5" />
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
    <div class="space-y-1.5 overflow-y-scroll p-3 pt-0">
        @foreach ( $cards as $card )
			<livewire:card wire:key="{{ 'card ' . $card->id }}" :card="$card" />
		@endforeach
    </div>
    <div class="p-3">create card</div>
</div>
