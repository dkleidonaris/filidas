@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'contact']])

@section('header', __('Επικοινωνία'))

@section('title')
	{{ __('Αρχική') }}
@endsection

@section('body')
	<div>
		<iframe
			id="map"
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3096.337856417506!2d23.480385476516997!3d39.1649736716682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a6e76245b58199%3A0x36d35e9b2c45fe0f!2sFilidas%20apartments!5e0!3m2!1sel!2sgr!4v1742853984247!5m2!1sel!2sgr"
			height="450"
			style="border:0;"
			allowfullscreen=""
			loading="lazy"
			referrerpolicy="no-referrer-when-downgrade"
			class="w-full my-2"
		></iframe>
		<div class="p-2 mx-auto my-4 max-w-[1200px]">
			<div class="flex flex-col gap-4 text-lg">
				<div class="flex items-center gap-2">
					<svg
						class="w-[40px]"
						fill="#000000"
						version="1.1"
						id="Layer_1"
						xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink"
						viewBox="0 0 512 512"
						enable-background="new 0 0 512 512"
						xml:space="preserve"
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
								d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"
							></path>
							<path
								d="M327.125,383.969c5.703,0.016,56.875-37.828,56.875-42.656s-57.266-40.906-62.219-40.906s-21.578,19.938-26.062,22.156 c-4.5,2.219-32.5,1.422-63.703-29.781c-31.219-31.188-41.875-67.109-41.875-72.75s26.031-23.062,26.75-27.156 S182.578,128,176.891,128S128,180.5,128,184.875s3.953,60.656,75.219,131.906S321.422,383.938,327.125,383.969z"
							></path>
						</g>
					</svg>
					<a
						href="tel:+306937079820"
						class="rounded-md p-1 text-blue-600 transition hover:bg-blue-200"
					>+30 693 707 9820</a>
				</div>
				<div class="flex items-center gap-2">
					<svg
						class="w-[40px]"
						viewBox="0 0 32 32"
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
							<path
								fill-rule="evenodd"
								clip-rule="evenodd"
								d="M16 31C23.732 31 30 24.732 30 17C30 9.26801 23.732 3 16 3C8.26801 3 2 9.26801 2 17C2 19.5109 2.661 21.8674 3.81847 23.905L2 31L9.31486 29.3038C11.3014 30.3854 13.5789 31 16 31ZM16 28.8462C22.5425 28.8462 27.8462 23.5425 27.8462 17C27.8462 10.4576 22.5425 5.15385 16 5.15385C9.45755 5.15385 4.15385 10.4576 4.15385 17C4.15385 19.5261 4.9445 21.8675 6.29184 23.7902L5.23077 27.7692L9.27993 26.7569C11.1894 28.0746 13.5046 28.8462 16 28.8462Z"
								fill="#BFC8D0"
							></path>
							<path
								d="M28 16C28 22.6274 22.6274 28 16 28C13.4722 28 11.1269 27.2184 9.19266 25.8837L5.09091 26.9091L6.16576 22.8784C4.80092 20.9307 4 18.5589 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z"
								fill="url(#paint0_linear_87_7264)"
							></path>
							<path
								fill-rule="evenodd"
								clip-rule="evenodd"
								d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 18.5109 2.661 20.8674 3.81847 22.905L2 30L9.31486 28.3038C11.3014 29.3854 13.5789 30 16 30ZM16 27.8462C22.5425 27.8462 27.8462 22.5425 27.8462 16C27.8462 9.45755 22.5425 4.15385 16 4.15385C9.45755 4.15385 4.15385 9.45755 4.15385 16C4.15385 18.5261 4.9445 20.8675 6.29184 22.7902L5.23077 26.7692L9.27993 25.7569C11.1894 27.0746 13.5046 27.8462 16 27.8462Z"
								fill="white"
							></path>
							<path
								d="M12.5 9.49989C12.1672 8.83131 11.6565 8.8905 11.1407 8.8905C10.2188 8.8905 8.78125 9.99478 8.78125 12.05C8.78125 13.7343 9.52345 15.578 12.0244 18.3361C14.438 20.9979 17.6094 22.3748 20.2422 22.3279C22.875 22.2811 23.4167 20.0154 23.4167 19.2503C23.4167 18.9112 23.2062 18.742 23.0613 18.696C22.1641 18.2654 20.5093 17.4631 20.1328 17.3124C19.7563 17.1617 19.5597 17.3656 19.4375 17.4765C19.0961 17.8018 18.4193 18.7608 18.1875 18.9765C17.9558 19.1922 17.6103 19.083 17.4665 19.0015C16.9374 18.7892 15.5029 18.1511 14.3595 17.0426C12.9453 15.6718 12.8623 15.2001 12.5959 14.7803C12.3828 14.4444 12.5392 14.2384 12.6172 14.1483C12.9219 13.7968 13.3426 13.254 13.5313 12.9843C13.7199 12.7145 13.5702 12.305 13.4803 12.05C13.0938 10.953 12.7663 10.0347 12.5 9.49989Z"
								fill="white"
							></path>
							<defs>
								<linearGradient
									id="paint0_linear_87_7264"
									x1="26.5"
									y1="7"
									x2="4"
									y2="28"
									gradientUnits="userSpaceOnUse"
								>
									<stop stop-color="#5BD066"></stop>
									<stop
										offset="1"
										stop-color="#27B43E"
									></stop>
								</linearGradient>
							</defs>
						</g>
					</svg>
					<a
						href="https://wa.me/+306976912605"
						class="rounded-md p-1 text-blue-600 transition hover:bg-blue-200"
						target="_blank"
					>+30 697 691 2605</a>
				</div>
				<div class="flex items-center gap-2">
					<svg
						class="w-[40px]"
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
							<path
								d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7"
								stroke="#000000"
								stroke-width="2"
								stroke-linecap="round"
								stroke-linejoin="round"
							></path>
							<rect
								x="3"
								y="5"
								width="18"
								height="14"
								rx="2"
								stroke="#000000"
								stroke-width="2"
								stroke-linecap="round"
							></rect>
						</g>
					</svg>
					<a
						href="mailto:info@filidas.gr"
						class="rounded-md p-1 text-blue-600 transition hover:bg-blue-200"
					>info@filidas.gr</a>
				</div>
				<div class="flex items-center gap-2">
					<svg
						class="w-[40px]"
						viewBox="0 0 1024 1024"
						fill="#000000"
						class="icon"
						version="1.1"
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
							<path
								d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z"
								fill=""
							></path>
						</g>
					</svg>
					<p class="p-1">@lang('business-address')</p>
				</div>
			</div>
		</div>
	</div>
@endsection
