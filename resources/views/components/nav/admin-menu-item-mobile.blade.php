@props(['route', 'name'])

<div x-data="{ showDropdown: false}">

	<div
		class="@if (Route::is($route)) bg-blue-500 @endif grid grid-cols-3 items-center justify-center gap-2 p-2"
	>
		<div></div>
		<a href="{{ route($route) }}">
			<div class="flex flex-row items-center">
				{{ $icon }}
				<p>{{ $name }}</p>
			</div>
		</a>
		@isset($dropdown)
			<svg
				@click="showDropdown = !showDropdown"
				:class="showDropdown ? 'rotate-0' : '-rotate-90'"
				class="ml-auto w-[30px] cursor-pointer py-2 transition"
				viewBox="0 0 24 24"
				fill="none"
				xmlns="http://www.w3.org/2000/svg"
				x-cloak
			>
				<g
					id="SVGRepo_bgCarrier"
					stroke-width="0"
				></g>
				<g
					id="SVGRepo_tracerCarrier"
					stroke-linecap="round"
					stroke-linejoin="round"
				></g>
				<g id="SVGRepo_iconCarrier">
					<path
						d="M16.1795 3.26875C15.7889 2.87823 15.1558 2.87823 14.7652 3.26875L8.12078 9.91322C6.94952 11.0845 6.94916 12.9833 8.11996 14.155L14.6903 20.7304C15.0808 21.121 15.714 21.121 16.1045 20.7304C16.495 20.3399 16.495 19.7067 16.1045 19.3162L9.53246 12.7442C9.14194 12.3536 9.14194 11.7205 9.53246 11.33L16.1795 4.68297C16.57 4.29244 16.57 3.65928 16.1795 3.26875Z"
						fill="#ffffff"
					></path>
				</g>
			</svg>
		@endisset
	</div>
	@isset($dropdown)
		<div
			x-show="showDropdown"
			class="flex flex-col items-center bg-gray-500 text-base"
			x-cloak
		>
			{{ $dropdown }}
		</div>
	@endisset
</div>
