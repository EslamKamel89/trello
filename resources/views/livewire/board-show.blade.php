<div class="h-full">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __( $board?->title ?? "Board Not Found" ) }}
        </h2>
    </x-slot>
    <!--//! Main Container -->
    <div class="w-full h-max p-6 overflow-x-scroll">
        <!--//? Flex Container -->
        <div class="flex w-max space-x-6  h-[calc(theme('height.screen')-240px)]">
            @foreach ( range( 1, 10 ) as $column )
				<!--//! Column -->
				<livewire:column key="{{'column ' . $column}}" />
				<!--// Column -->
			@endforeach
        </div>
        <!-- Flex Container -->
    </div>
    <!-- Main Container -->
</div>