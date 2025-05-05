@props(['apartment'])

<div
	x-data="gallery_carousel()"
	class=""
>

	<div
		class="carousel relative my-4 flex h-screen max-h-[40vh] w-full items-center justify-between"
	>
		<template x-for="(photo, index) in photos">
			<img
				x-show="currentIndex == index"
				x-transition:enter="transition ease-out duration-300"
				x-transition:enter-start="opacity-0"
				x-transition:enter-end="opacity-100"
				x-transition:leave="transition ease-in duration-300"
				x-transition:leave-start="opacity-100"
				x-transition:leave-end="opacity-0"
				:src="photo.path"
				alt="apartment-photo"
				class="absolute inset-0 h-full w-full object-contain"
			>
		</template>

		<svg
			@click="prev"
			class="z-10 w-[30px] cursor-pointer rounded-r-md bg-white p-1 transition hover:scale-110 focus:outline-none focus:ring-0"
			viewBox="0 0 24 24"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
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
				<circle
					cx="12"
					cy="12"
					r="10"
					stroke="#000000"
					stroke-width="2"
					stroke-linecap="round"
					stroke-linejoin="round"
				></circle>
				<path
					d="M7 12H17M7 12L11 8M7 12L11 16"
					stroke="#000000"
					stroke-width="2"
					stroke-linecap="round"
					stroke-linejoin="round"
				></path>
			</g>
		</svg>
		<svg
			@click="next"
			class="z-10 w-[30px] rotate-180 cursor-pointer rounded-r-md bg-white p-1 transition hover:scale-110 focus:outline-none focus:ring-0"
			viewBox="-2.4 -2.4 28.80 28.80"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<g
				id="SVGRepo_bgCarrier"
				stroke-width="0"
			>
				<rect
					x="-2.4"
					y="-2.4"
					width="28.80"
					height="28.80"
					rx="14.4"
					fill="#ffffff"
					strokewidth="0"
				></rect>
			</g>
			<g
				id="SVGRepo_tracerCarrier"
				stroke-linecap="round"
				stroke-linejoin="round"
			></g>
			<g id="SVGRepo_iconCarrier">
				<circle
					cx="12"
					cy="12"
					r="10"
					stroke="#000000"
					stroke-width="2"
					stroke-linecap="round"
					stroke-linejoin="round"
				></circle>
				<path
					d="M7 12H17M7 12L11 8M7 12L11 16"
					stroke="#000000"
					stroke-width="2"
					stroke-linecap="round"
					stroke-linejoin="round"
				></path>
			</g>
		</svg>
	</div>

</div>

<script>
	document.addEventListener('alpine:init', () => {
		Alpine.data('gallery_carousel', () => ({
			photos: [],
			currentIndex: null,
			init() {
				this.photos = @json($apartment->photos);
				if (this.photos.length >= 1) {
					this.currentIndex = 0;
				}
			},
			prev() {
				if (this.currentIndex == 0) {
					this.currentIndex = this.photos.length - 1;
				} else
					this.currentIndex--;
			},
			next() {
				if (this.currentIndex == this.photos.length -
					1) {
					this.currentIndex = 0;
				} else
					this.currentIndex++;
			}
		}));
	});
</script>
