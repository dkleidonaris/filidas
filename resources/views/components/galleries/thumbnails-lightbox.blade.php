@props(['apartment'])

<div
	x-data="gallery_thumbnail()"
	class=""
>
	<div class="grid grid-cols-3 gap-2 md:grid-cols-8">
		<template x-for="(photo, index) in photos">
			<a
				:href="photo.path"
				data-lightbox="apartment-images"
				:data-title="photo.title"
			>
				<img
					:src="photo.path"
					alt="apartment-photo"
					class="object-stretch aspect-square"
				>
			</a>
		</template>
	</div>
</div>

<script>
	document.addEventListener('alpine:init', () => {
		Alpine.data('gallery_thumbnail', () => ({
			photos: [],
			init() {
				this.photos = @json($apartment->photos);
			},
		}));
	});
</script>
