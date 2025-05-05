<div x-data="{ message: '', type: '', show: false }" x-init="navbarHeight = document.querySelector('.navbar')
    ?.offsetHeight || 0;
	console.log(navbarHeight);
$wire.on('flash-message', (event) => {
    message = event[0].message;
    type = event[0].type;
    show = true;
    setTimeout(() => show = false, 4000);
})">
	<div x-show="show && type === 'danger'"
		x-transition:enter="transition ease-out duration-300"
		x-transition:enter-start="opacity-0 scale-90"
		x-transition:enter-end="opacity-100 scale-100"
		x-transition:leave="transition ease-in duration-300"
		x-transition:leave-start="opacity-100 scale-100"
		x-transition:leave-end="opacity-0 scale-90" id="alert-2"
		class="fixed bottom-2 right-2 mb-4 flex items-center rounded-lg bg-red-50 p-4 text-red-800"
		role="alert" x-cloak>
		<svg class="h-4 w-4 flex-shrink-0" aria-hidden="true"
			xmlns="http://www.w3.org/2000/svg" fill="currentColor"
			viewBox="0 0 20 20">
			<path
				d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
		</svg>
		<span class="sr-only">Info</span>
		<a x-text="message" class="ms-3 text-sm font-medium">
		</a>
		<button @click="show = false" type="button"
			class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-red-50 p-1.5 text-red-500 hover:bg-red-200 focus:ring-2 focus:ring-red-400"
			data-dismiss-target="#alert-2" aria-label="Close">
			<span class="sr-only">Close</span>
			<svg class="h-3 w-3" aria-hidden="true"
				xmlns="http://www.w3.org/2000/svg" fill="none"
				viewBox="0 0 14 14">
				<path stroke="currentColor" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="2"
					d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
			</svg>
		</button>
	</div>

	<div x-show="show && type === 'success'"
		x-transition:enter="transition ease-out duration-300"
		x-transition:enter-start="opacity-0 scale-90"
		x-transition:enter-end="opacity-100 scale-100"
		x-transition:leave="transition ease-in duration-300"
		x-transition:leave-start="opacity-100 scale-100"
		x-transition:leave-end="opacity-0 scale-90" id="alert-3"
		class="fixed bottom-2 right-2 mb-4 flex gap-1 items-center shadow-md rounded-lg bg-green-100 p-4 text-green-800"
		role="alert" x-cloak>
		<svg class="h-4 w-4 flex-shrink-0" aria-hidden="true"
			xmlns="http://www.w3.org/2000/svg" fill="currentColor"
			viewBox="0 0 20 20">
			<path
				d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
		</svg>
		<span class="sr-only">Info</span>
		<a x-text="message" class="ms-1 text-sm font-medium">
		</a>
		<button @click="show = false" type="button"
			class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-green-100 p-1.5 text-green-500 hover:bg-green-200 focus:ring-2 focus:ring-green-400"
			aria-label="Close">
			<span class="sr-only">Close</span>
			<svg class="h-3 w-3" aria-hidden="true"
				xmlns="http://www.w3.org/2000/svg" fill="none"
				viewBox="0 0 14 14">
				<path stroke="currentColor" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="2"
					d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
			</svg>
		</button>
	</div>

	<div x-show="show && type === 'warning'"
		x-transition:enter="transition ease-out duration-300"
		x-transition:enter-start="opacity-0 scale-90"
		x-transition:enter-end="opacity-100 scale-100"
		x-transition:leave="transition ease-in duration-300"
		x-transition:leave-start="opacity-100 scale-100"
		x-transition:leave-end="opacity-0 scale-90" id="alert-4"
		class="fixed bottom-2 right-2 mb-4 flex items-center rounded-lg bg-yellow-50 p-4 text-yellow-800"
		role="alert" x-cloak>
		<svg class="h-4 w-4 flex-shrink-0" aria-hidden="true"
			xmlns="http://www.w3.org/2000/svg" fill="currentColor"
			viewBox="0 0 20 20">
			<path
				d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
		</svg>
		<span class="sr-only">Info</span>
		<a x-text="message" class="ms-3 text-sm font-medium">
		</a>
		<button @click="show = false" type="button"
			class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-yellow-50 p-1.5 text-yellow-500 hover:bg-yellow-200 focus:ring-2 focus:ring-yellow-400"
			aria-label="Close">
			<span class="sr-only">Close</span>
			<svg class="h-3 w-3" aria-hidden="true"
				xmlns="http://www.w3.org/2000/svg" fill="none"
				viewBox="0 0 14 14">
				<path stroke="currentColor" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="2"
					d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
			</svg>
		</button>
	</div>

	<div x-show="show && type === 'default'"
		x-transition:enter="transition ease-out duration-300"
		x-transition:enter-start="opacity-0 scale-90"
		x-transition:enter-end="opacity-100 scale-100"
		x-transition:leave="transition ease-in duration-300"
		x-transition:leave-start="opacity-100 scale-100"
		x-transition:leave-end="opacity-0 scale-90" id="alert-1"
		class="fixed bottom-2 right-2 mb-4 flex items-center rounded-lg bg-blue-50 p-4 text-blue-800"
		role="alert" x-cloak>
		<svg class="h-4 w-4 flex-shrink-0" aria-hidden="true"
			xmlns="http://www.w3.org/2000/svg" fill="currentColor"
			viewBox="0 0 20 20">
			<path
				d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
		</svg>
		<span class="sr-only">Info</span>
		<a x-text="message" class="ms-3 text-sm font-medium">
		</a>
		<button @click="show = false" type="button"
			class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-blue-50 p-1.5 text-blue-500 hover:bg-blue-200 focus:ring-2 focus:ring-blue-400"
			aria-label="Close">
			<span class="sr-only">Close</span>
			<svg class="h-3 w-3" aria-hidden="true"
				xmlns="http://www.w3.org/2000/svg" fill="none"
				viewBox="0 0 14 14">
				<path stroke="currentColor" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="2"
					d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
			</svg>
		</button>
	</div>
</div>
