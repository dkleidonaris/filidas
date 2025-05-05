@props(['route', 'name', 'highlight'])

<div
	@mouseover="showDropdown = true"
    @mouseover.away="showDropdown = false"
	x-data="{ showDropdown: false }"
	class="relative w-full"
>
	<a href="{{ route($route) }}">
		<div
			class="@if (Route::is($highlight)) bg-blue-500 @else hover:bg-gray-500 @endif flex flex-row items-center gap-2 p-2"
		>
			{{ $icon }}
			<p
				x-show="showTexts"
				x-cloak
			>{{ $name }}</p>
		</div>
	</a>
	@isset($dropdown)
		<div
			x-show="showDropdown"
			class="absolute left-full top-0 flex text-nowrap flex-col items-stretch bg-gray-600"
			x-cloak
		>
			{{ $dropdown }}
		</div>
	@endisset
</div>
