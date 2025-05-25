@props(['apartments'])

<div
	x-data="carousel({ itemsCount: {{ count($apartments) }} })"
	class="relative mx-auto w-full max-w-5xl"
>
	<!-- Left Arrow -->
	<button
		@click="prev"
		class="absolute left-0 top-1/2 z-10 -translate-y-1/2 rounded-full bg-white p-2 shadow"
		:disabled="currentIndex === 0"
	>
		&#8592;
	</button>

	<!-- Carousel Track -->
	<div class="overflow-hidden">
		<div
			class="flex transition-transform duration-500 ease-in-out"
			:style="`transform: translateX(-${currentIndex * slideWidth}px)`"
			x-ref="track"
		>
			@foreach ($apartments as $apartment)
				<div
					class="flex-shrink-0 px-4"
					:style="`width: ${slideWidth}px`"
				>
					<div class="flex flex-col gap-2 rounded-md bg-white p-2 shadow-md">
						<a
							href="{{ route('apartment', [$apartment->slug]) }}"
							class="text-center text-lg font-semibold"
						>{{ $apartment->name }}</a>
						<div class="flex items-center justify-center gap-2">
							<svg
								class="w-[40px]"
								viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg"
								fill="#000000"
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
										d="M13.9 2.999A1.9 1.9 0 1 1 12 1.1a1.9 1.9 0 0 1 1.9 1.899zM13.544 6h-3.088a1.855 1.855 0 0 0-1.8 1.405l-1.662 6.652a.667.667 0 0 0 .14.573.873.873 0 0 0 .665.33.718.718 0 0 0 .653-.445L10 9.1V13l-.922 9.219a.71.71 0 0 0 .707.781h.074a.69.69 0 0 0 .678-.563L12 14.583l1.463 7.854a.69.69 0 0 0 .678.563h.074a.71.71 0 0 0 .707-.781L14 13V9.1l1.548 5.415a.718.718 0 0 0 .653.444.873.873 0 0 0 .665-.329.667.667 0 0 0 .14-.573l-1.662-6.652A1.855 1.855 0 0 0 13.544 6z"
									></path>
									<path
										fill="none"
										d="M0 0h24v24H0z"
									></path>
								</g>
							</svg>
							<p>X</p>
							<p>{{ $apartment->adult_capacity }}</p>
						</div>
						<img
							src="{{ $apartment->cover_photo->path }}"
							alt=""
							class="h-48 w-full rounded object-cover"
						>
						<a
							href="{{ route('apartment', [$apartment->slug]) }}"
							class="self-center rounded-md bg-yellow-400 p-2 transition hover:bg-yellow-300"
						>@lang('Δείτε περισσότερα')</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>

	<!-- Right Arrow -->
	<button
		@click="next"
		class="absolute right-0 top-1/2 z-10 -translate-y-1/2 rounded-full bg-white p-2 shadow"
		:disabled="currentIndex === itemsCount - 1"
	>
		&#8594;
	</button>
	<script>
		function carousel({
			itemsCount
		}) {
			return {
				currentIndex: 0,
				itemsCount,
				slideWidth: 400, // width of each card including spacing

				prev() {
					if (this.currentIndex > 0) this.currentIndex--;
				},
				next() {
					if (this.currentIndex < this.itemsCount - 1) this.currentIndex++;
				}
			};
		}
	</script>
</div>
