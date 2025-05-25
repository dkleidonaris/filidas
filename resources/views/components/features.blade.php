@props(['features'])

<div
	class="my-4 grid gap-8 md:grid-cols-2"
	x-data="shown"
	x-intersect="showFeatures"
>
	@if ($features->contains('key', 'balcony'))
		<div
			data-feature
			:class="shown.includes(0) ? 'opacity-100' : 'opacity-0'"
			class="flex items-center gap-2 transition"
		>
			<svg
				width="30"
				height="30"
				viewBox="0 0 16 16"
				xmlns:dc="http://purl.org/dc/elements/1.1/"
				xmlns:cc="http://creativecommons.org/ns#"
				xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
				xmlns="http://www.w3.org/2000/svg"
				version="1.1"
				id="svg7384"
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
					<metadata id="metadata90">
						<rdf:rdf>
							<cc:work>
								<dc:format>image/svg+xml</dc:format>
								<dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage">
								</dc:type>
								<dc:title></dc:title>
								<dc:date>2021</dc:date>
								<dc:creator>
									<cc:agent>
										<dc:title>Timothée Giet</dc:title>
									</cc:agent>
								</dc:creator>
								<cc:license
									rdf:resource="http://creativecommons.org/licenses/by-sa/4.0/"
								></cc:license>
							</cc:work>
							<cc:license rdf:about="http://creativecommons.org/licenses/by-sa/4.0/">
								<cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction">
								</cc:permits>
								<cc:permits rdf:resource="http://creativecommons.org/ns#Distribution">
								</cc:permits>
								<cc:requires rdf:resource="http://creativecommons.org/ns#Notice">
								</cc:requires>
								<cc:requires rdf:resource="http://creativecommons.org/ns#Attribution">
								</cc:requires>
								<cc:permits
									rdf:resource="http://creativecommons.org/ns#DerivativeWorks">
								</cc:permits>
								<cc:requires rdf:resource="http://creativecommons.org/ns#ShareAlike">
								</cc:requires>
							</cc:license>
						</rdf:rdf>
					</metadata>
					<path
						id="rect4082"
						d="M1 1v14h14V1zm1 1h12v12H2z"
						style="fill:#373737;fill-opacity:1;stroke:none;stroke-width:.875"
					></path>
					<path
						id="path847"
						d="M5 3a2 2 0 0 0-2 2 2 2 0 0 0 2 2 2 2 0 0 0 2-2 2 2 0 0 0-2-2zm0 1a1 1 0 0 1 1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1z"
						style="opacity:1;vector-effect:none;fill:#373737;fill-opacity:1;stroke:none;stroke-width:4;stroke-linecap:square;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:3.20000005;stroke-opacity:.55063291"
					></path>
					<path
						id="path869"
						d="m3 12 1 1 3-3 1 1 2-2 2 2 1-1-3-3-2 2-1-1z"
						style="fill:#373737;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
					></path>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'balcony')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'living_room_fireplace'))
		<div
			data-feature
			:class="shown.includes(1) ? 'opacity-100' : 'opacity-0'"
			x-transition
			class="flex items-center gap-2 transition"
		>
			<svg
				width="30"
				height="30"
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
						d="M3 4H21M3 8H21M19 4V20M5 4V20M13.7678 19.219C12.7915 20.2604 11.2085 20.2604 10.2322 19.219C9.74408 18.6983 9.5 18.0158 9.5 17.3333C9.5 16.6509 9.74408 15.9684 10.2322 15.4477C10.2322 15.4477 10.4375 16 11.0625 16.3333C11.0625 15.6667 11.2188 14.6667 11.9956 14C12.625 14.6667 13.2785 14.9258 13.7678 15.4477C14.2559 15.9684 14.5 16.6509 14.5 17.3333C14.5 18.0158 14.2559 18.6983 13.7678 19.219Z"
						stroke="#000000"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
					></path>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'living_room_fireplace')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'ac'))
		<div
			data-feature
			:class="shown.includes(2) ? 'opacity-100' : 'opacity-0'"
			x-transition
			class="flex items-center gap-2 transition"
		>
			<svg
				width="30"
				height="30"
				fill="#000000"
				viewBox="0 0 24 24"
				id="ac"
				xmlns="http://www.w3.org/2000/svg"
				class="icon line"
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
						id="primary"
						d="M20,17H4a1,1,0,0,1-1-1V8A1,1,0,0,1,4,7H20a1,1,0,0,1,1,1v8A1,1,0,0,1,20,17Zm-3-2H7v2H17Zm-4-4h4"
						style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;"
					></path>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'ac')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'wi-fi'))
		<div
			data-feature
			:class="shown.includes(3) ? 'opacity-100' : 'opacity-0'"
			class="flex items-center gap-2 transition"
		>
			<svg
				width="30"
				height="30"
				viewBox="0 0 16 16"
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
						d="M0 7L1.17157 5.82843C2.98259 4.01741 5.43884 3 8 3C10.5612 3 13.0174 4.01742 14.8284 5.82843L16 7L14.5858 8.41421L13.4142 7.24264C11.9783 5.8067 10.0307 5 8 5C5.96928 5 4.02173 5.8067 2.58579 7.24264L1.41421 8.41421L0 7Z"
						fill="#000000"
					></path>
					<path
						d="M4.24264 11.2426L2.82843 9.82843L4 8.65685C5.06086 7.59599 6.49971 7 8 7C9.50029 7 10.9391 7.59599 12 8.65686L13.1716 9.82843L11.7574 11.2426L10.5858 10.0711C9.89999 9.38527 8.96986 9 8 9C7.03014 9 6.1 9.38527 5.41421 10.0711L4.24264 11.2426Z"
						fill="#000000"
					></path>
					<path
						d="M8 15L5.65685 12.6569L6.82842 11.4853C7.13914 11.1746 7.56057 11 8 11C8.43942 11 8.86085 11.1746 9.17157 11.4853L10.3431 12.6569L8 15Z"
						fill="#000000"
					></path>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'wi-fi')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', '42_tv'))
		<div
			data-feature
			:class="shown.includes(4) ? 'opacity-100' : 'opacity-0'"class="flex items-center gap-2 transition"
		>
			<svg
				width="30"
				height="30"
				fill="#000000"
				height="200px"
				width="200px"
				version="1.1"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				viewBox="0 0 50 50"
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
					<g id="Layer_1">
						<path d="M1,38h23v3H12v2h26v-2H26v-3h23V8H1V38z M3,10h44v26H3V10z"></path>
					</g>
					<g> </g>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', '42_tv')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'dining_table'))
		<div
			data-feature
			:class="shown.includes(5) ? 'opacity-100' : 'opacity-0'"
			class="flex items-center gap-2 transition"
		>
			<svg
				width="30"
				height="30"
				fill="#000000"
				height="200px"
				width="200px"
				version="1.1"
				id="Layer_1"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				viewBox="0 0 512 512"
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
					<g>
						<g>
							<path
								d="M389.565,155.826h-50.087v-36.263c19.433-6.892,33.391-25.45,33.391-47.215V38.957c0-9.22-7.475-16.696-16.696-16.696 h-66.783c-9.22,0-16.696,7.475-16.696,16.696v33.391c0,21.766,13.959,40.323,33.391,47.215v36.263c-10.637,0-89.859,0-100.174,0 v-36.263c19.433-6.892,33.391-25.45,33.391-47.215V38.957c0-9.22-7.475-16.696-16.696-16.696h-66.783 c-9.22,0-16.696,7.475-16.696,16.696v33.391c0,21.766,13.959,40.323,33.391,47.215v36.263h-50.087 c-27.618,0-50.087,22.469-50.087,50.087v33.391c0,9.22,7.475,16.696,16.696,16.696h68.977l17.305,25.956 c6.605,9.907,21.183,9.899,27.784,0L220.414,256h18.891v200.348h-50.087c-9.22,0-16.696,7.475-16.696,16.696 s7.475,16.696,16.696,16.696h133.565c9.22,0,16.696-7.475,16.696-16.696s-7.475-16.696-16.696-16.696h-50.087V256h150.261 c9.22,0,16.696-7.475,16.696-16.696v-33.391C439.652,178.295,417.183,155.826,389.565,155.826z M172.522,55.652h33.391v16.696 c0,9.206-7.49,16.696-16.696,16.696s-16.696-7.49-16.696-16.696V55.652z M105.739,222.609v-16.696 c0-6.438,3.667-12.024,9.018-14.81l21.003,31.506H105.739z M189.217,242.597c-3.407-5.11-31.16-46.739-35.586-53.379h71.172 C220.381,195.851,192.622,237.489,189.217,242.597z M306.087,55.652h33.391v16.696c0,9.206-7.49,16.696-16.696,16.696 c-9.206,0-16.696-7.49-16.696-16.696V55.652z M406.261,222.609H242.675l22.26-33.391h124.631c9.206,0,16.696,7.49,16.696,16.696 V222.609z"
							></path>
						</g>
					</g>
					<g>
						<g>
							<path
								d="M116.87,289.391H33.391V105.739c0-9.22-7.475-16.696-16.696-16.696S0,96.519,0,105.739c0,4.86,0,365.252,0,367.304 c0,9.22,7.475,16.696,16.696,16.696s16.696-7.475,16.696-16.696v-83.478h66.783v83.478c0,9.22,7.475,16.696,16.696,16.696 s16.696-7.475,16.696-16.696c0-7.337,0-159.619,0-166.956C133.565,296.866,126.09,289.391,116.87,289.391z M100.174,356.174 H33.391v-33.391h66.783V356.174z"
							></path>
						</g>
					</g>
					<g>
						<g>
							<path
								d="M495.304,89.043c-9.22,0-16.696,7.475-16.696,16.696v183.652H395.13c-9.22,0-16.696,7.475-16.696,16.696 c0,7.337,0,159.619,0,166.956c0,9.22,7.475,16.696,16.696,16.696s16.696-7.475,16.696-16.696v-83.478h66.783v83.478 c0,9.22,7.475,16.696,16.696,16.696S512,482.264,512,473.043c0-12.045,0-352.788,0-367.304 C512,96.519,504.525,89.043,495.304,89.043z M478.609,356.174h-66.783v-33.391h66.783V356.174z"
							></path>
						</g>
					</g>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'dining_table')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'full_kitchen'))
		<div
			data-feature
			:class="shown.includes(6) ? 'opacity-100' : 'opacity-0'"
			class="flex items-center gap-2 transition"
		>
			<svg
				width="30"
				height="30"
				fill="#000000"
				viewBox="0 -1.05 48.095 48.095"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				data-name="Слой 1"
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
						d="M9 0 A 1.0001 1.0001 0 0 0 8 1L8 4.484375L1.4179688 9.1855469 A 1.0001 1.0001 0 0 0 1 10L1 14 A 1.0001 1.0001 0 0 0 2 15L24 15 A 1.0001 1.0001 0 0 0 25 14L25 10 A 1.0001 1.0001 0 0 0 24.582031 9.1855469L18 4.4863281L18 1 A 1.0001 1.0001 0 0 0 17 0L9 0 z M 10 2L16 2L16 5 A 1.0001 1.0001 0 0 0 16.417969 5.8144531L23 10.513672L23 13L3 13L3 10.513672L9.5820312 5.8144531 A 1.0001 1.0001 0 0 0 10 5L10 2 z M 5.5 21C4.8457598 21 4.2978026 21.418077 4.0917969 22L1 22 A 1.0001 1.0001 0 0 0 0 23L0 45 A 1.0001 1.0001 0 0 0 1 46L47.095703 46 A 1.0001 1.0001 0 0 0 48.095703 45L48.095703 23 A 1.0001 1.0001 0 0 0 47.095703 22L21.908203 22C21.702197 21.418077 21.15424 21 20.5 21L5.5 21 z M 2 24L5.5 24L20.5 24L24.095703 24L24.095703 44L2 44L2 24 z M 26.095703 24L46.095703 24L46.095703 30L26.095703 30L26.095703 24 z M 5 26 A 1.0001 1.0001 0 0 0 4 27L4 41 A 1.0001 1.0001 0 0 0 5 42L21 42 A 1.0001 1.0001 0 0 0 22 41L22 27 A 1.0001 1.0001 0 0 0 21 26L5 26 z M 30 26 A 1.0001 1.0001 0 1 0 30 28L42 28 A 1.0001 1.0001 0 1 0 42 26L30 26 z M 6 28L20 28L20 40L6 40L6 28 z M 26.095703 32L46.095703 32L46.095703 44L26.095703 44L26.095703 32 z M 29.984375 34.986328 A 1.0001 1.0001 0 0 0 29 36L29 41 A 1.0001 1.0001 0 1 0 31 41L31 36 A 1.0001 1.0001 0 0 0 29.984375 34.986328 z"
					></path>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'full_kitchen')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'fridge'))
		<div
			data-feature
			:class="shown.includes(7) ? 'opacity-100' : 'opacity-0'"
			class="flex items-center gap-2 transition"
		>
			<svg
				width="30"
				height="30"
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
						d="M4.5365 19.3206V4.67986C4.5365 3.66912 5.35586 2.84976 6.36659 2.84976H17.3472C18.3579 2.84976 19.1773 3.66912 19.1773 4.67986V19.3206C19.1773 20.3314 18.3579 21.1507 17.3472 21.1507H6.36659C5.35586 21.1507 4.5365 20.3314 4.5365 19.3206Z"
						stroke="#1C1C1C"
						stroke-width="1.69904"
						stroke-linecap="round"
					></path>
					<path
						d="M4.53625 9.25487H19.177"
						stroke="#1C1C1C"
						stroke-width="1.69904"
						stroke-linecap="square"
					></path>
					<path
						d="M8.19653 12L8.19653 15.6602"
						stroke="#1C1C1C"
						stroke-width="1.69904"
						stroke-linecap="round"
					></path>
					<path
						d="M8.19653 5.59467L8.19653 6.50997"
						stroke="#1C1C1C"
						stroke-width="1.69904"
						stroke-linecap="round"
					></path>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'fridge')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'cooker'))
		<div
			data-feature
			:class="shown.includes(8) ? 'opacity-100' : 'opacity-0'"
			class="flex items-center gap-2 transition"
		>
			<svg
				width="30"
				height="30"
				fill="#000000"
				height="200px"
				width="200px"
				version="1.1"
				id="Capa_1"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				viewBox="0 0 60 60"
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
					<g>
						<path
							d="M44.709,0H15.291C11.271,0,8,3.271,8,7.291V16v34v10h44V50V16V7.291C52,3.271,48.729,0,44.709,0z M10,7.291 C10,4.374,12.374,2,15.291,2h29.418C47.626,2,50,4.374,50,7.291V14H10V7.291z M50,58H10v-6h40V58z M50,50H10V16h40V50z"
						></path>
						<path
							d="M48,48V29H12v19H48z M14,43v-6v-6c0,0.552,0.448,1,1,1s1-0.448,1-1h4c0,0.552,0.448,1,1,1s1-0.448,1-1h4 c0,0.552,0.448,1,1,1s1-0.448,1-1h4c0,0.552,0.448,1,1,1s1-0.448,1-1h4c0,0.552,0.448,1,1,1s1-0.448,1-1h4c0,0.552,0.448,1,1,1 s1-0.448,1-1v6v6v3h-3c0-0.552-0.448-1-1-1s-1,0.448-1,1h-4c0-0.552-0.448-1-1-1s-1,0.448-1,1h-4c0-0.552-0.448-1-1-1s-1,0.448-1,1 h-4c0-0.552-0.448-1-1-1s-1,0.448-1,1h-4c0-0.552-0.448-1-1-1s-1,0.448-1,1h-3V43z"
						></path>
						<path
							d="M18,27h24c1.654,0,3-1.346,3-3s-1.346-3-3-3H18c-1.654,0-3,1.346-3,3S16.346,27,18,27z M18,23h24c0.551,0,1,0.448,1,1 s-0.449,1-1,1H18c-0.551,0-1-0.448-1-1S17.449,23,18,23z"
						></path>
						<path
							d="M16,5c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S18.206,5,16,5z M16,11c-1.103,0-2-0.897-2-2s0.897-2,2-2s2,0.897,2,2 S17.103,11,16,11z"
						></path>
						<path
							d="M44,5c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S46.206,5,44,5z M44,11c-1.103,0-2-0.897-2-2s0.897-2,2-2s2,0.897,2,2 S45.103,11,44,11z"
						></path>
						<path d="M22,12h16V4H22V12z M24,6h12v4H24V6z"></path>
						<circle
							cx="15"
							cy="37"
							r="1"
						></circle>
						<circle
							cx="21"
							cy="37"
							r="1"
						></circle>
						<circle
							cx="18"
							cy="34"
							r="1"
						></circle>
						<circle
							cx="24"
							cy="34"
							r="1"
						></circle>
						<circle
							cx="18"
							cy="40"
							r="1"
						></circle>
						<circle
							cx="24"
							cy="40"
							r="1"
						></circle>
						<circle
							cx="27"
							cy="37"
							r="1"
						></circle>
						<circle
							cx="33"
							cy="37"
							r="1"
						></circle>
						<circle
							cx="30"
							cy="34"
							r="1"
						></circle>
						<circle
							cx="36"
							cy="34"
							r="1"
						></circle>
						<circle
							cx="30"
							cy="40"
							r="1"
						></circle>
						<circle
							cx="36"
							cy="40"
							r="1"
						></circle>
						<circle
							cx="39"
							cy="37"
							r="1"
						></circle>
						<circle
							cx="45"
							cy="37"
							r="1"
						></circle>
						<circle
							cx="42"
							cy="34"
							r="1"
						></circle>
						<circle
							cx="42"
							cy="40"
							r="1"
						></circle>
						<circle
							cx="15"
							cy="43"
							r="1"
						></circle>
						<circle
							cx="21"
							cy="43"
							r="1"
						></circle>
						<circle
							cx="27"
							cy="43"
							r="1"
						></circle>
						<circle
							cx="33"
							cy="43"
							r="1"
						></circle>
						<circle
							cx="39"
							cy="43"
							r="1"
						></circle>
						<circle
							cx="45"
							cy="43"
							r="1"
						></circle>
					</g>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'cooker')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'espresso_machine'))
		<div
			data-feature
			:class="shown.includes(9) ? 'opacity-100' : 'opacity-0'"
			class="flex items-center gap-2 transition"
		>
			<svg
				width="30"
				height="30"
				fill="#000000"
				viewBox="-3.67 0 122.88 122.88"
				version="1.1"
				id="Layer_1"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				style="enable-background:new 0 0 115.54 122.88"
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
					<g>
						<path
							d="M17.31,26.83v84.88c0,0.06,0,0.12-0.01,0.17h23.01v-8.87h36.73v8.87h20.79c0-0.05-0.01-0.09-0.01-0.14V26.83h-6.57v10.44 H69.84v0.01v12.28c0,0.5-0.4,0.9-0.9,0.9H64.7v5.55h-3.91v-5.55h-4.46v5.55h-3.91v-5.55h-4.25c-0.5,0-0.9-0.4-0.9-0.9V37.28l0-0.01 H26.09V26.83H17.31L17.31,26.83z M39.72,65.26h38.18c0.72,0,1.38,0.3,1.86,0.77l0,0l0,0l0,0c0.48,0.48,0.77,1.14,0.77,1.86v1.19 h5.62c1.3,0,2.48,0.53,3.33,1.38c0.03,0.03,0.07,0.07,0.1,0.11c0.8,0.85,1.29,1.98,1.29,3.22v5.51c0,1.48-0.61,2.83-1.58,3.81 c-0.98,0.98-2.32,1.58-3.81,1.58h-6.1c-2.05,6.14-6.62,10.37-12.03,12.57c-2.79,1.14-5.82,1.72-8.85,1.74 c-3.03,0.02-6.05-0.54-8.82-1.69c-7.1-2.93-12.6-9.65-12.6-20.44v-8.98c0-0.72,0.3-1.38,0.77-1.86l0,0l0,0 C38.33,65.56,38.99,65.26,39.72,65.26L39.72,65.26z M86.15,72.22h-5.52v9.36h4.85c0.62,0,1.19-0.26,1.6-0.67 c0.41-0.41,0.67-0.98,0.67-1.6V73.8c0-0.41-0.15-0.78-0.41-1.06c-0.02-0.02-0.04-0.04-0.06-0.06 C86.98,72.4,86.59,72.22,86.15,72.22L86.15,72.22z M77.41,68.39H40.2v8.5c0,9.32,4.65,15.08,10.66,17.56 c2.39,0.99,5.01,1.47,7.63,1.45c2.62-0.01,5.25-0.53,7.69-1.52c6.28-2.55,11.24-8.35,11.24-17.1V68.39L77.41,68.39z M13.96,111.89 c-0.01-0.06-0.01-0.11-0.01-0.17V26.83H1.56C0.7,26.83,0,26.13,0,25.27V1.56C0,0.7,0.7,0,1.56,0h112.41c0.86,0,1.56,0.7,1.56,1.56 v23.71c0,0.86-0.7,1.56-1.56,1.56H101.2v84.92c0,0.05,0,0.09-0.01,0.14h12.78v10.99H1.56v-10.99H13.96L13.96,111.89z M46.25,6.4 h25.04c0.44,0,0.8,0.39,0.8,0.88V19.3c0,0.49-0.36,0.88-0.8,0.88H46.25c-0.44,0-0.8-0.39-0.8-0.88V7.28 C45.45,6.79,45.81,6.4,46.25,6.4L46.25,6.4z M68.04,38.18H49.07v10.48h18.98V38.18L68.04,38.18z M112.17,3.36H3.36v20.1h108.81 V3.36L112.17,3.36z"
						></path>
					</g>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'espresso_machine')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'microwave'))
		<div
			data-feature
			:class="shown.includes(10) ? 'opacity-100' : 'opacity-0'"
			class="flex items-center gap-2 transition"
		>
			<svg
				width="30"
				height="30"
				fill="#000000"
				viewBox="0 0 50 50"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
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
						d="M3 8C1.355469 8 0 9.355469 0 11L0 39C0 40.644531 1.355469 42 3 42L5 42L5 43C5 44.09375 5.90625 45 7 45L10 45C11.09375 45 12 44.09375 12 43L12 42L38 42L38 43C38 44.09375 38.90625 45 40 45L43 45C44.09375 45 45 44.09375 45 43L45 42L47 42C48.644531 42 50 40.644531 50 39L50 11C50 9.355469 48.644531 8 47 8 Z M 3 10L47 10C47.5625 10 48 10.4375 48 11L48 39C48 39.5625 47.5625 40 47 40L39.1875 40C39.054688 39.972656 38.914063 39.972656 38.78125 40L6.1875 40C6.054688 39.972656 5.914063 39.972656 5.78125 40L3 40C2.4375 40 2 39.5625 2 39L2 11C2 10.4375 2.4375 10 3 10 Z M 5 13L5 37L40 37L40 13 Z M 7 15L38 15L38 35L7 35 Z M 44 16C42.894531 16 42 16.894531 42 18C42 19.105469 42.894531 20 44 20C45.105469 20 46 19.105469 46 18C46 16.894531 45.105469 16 44 16 Z M 34.15625 19.9375C33.957031 19.933594 33.761719 19.988281 33.59375 20.09375C33.59375 20.09375 28.964844 22 26.125 22C24.707031 22 23.75 21.59375 22.59375 21.09375C21.4375 20.59375 20.066406 20 18.21875 20C14.523438 20 10.5625 22.09375 10.5625 22.09375C10.0625 22.335938 9.851563 22.9375 10.09375 23.4375C10.335938 23.9375 10.9375 24.148438 11.4375 23.90625C11.4375 23.90625 15.332031 22 18.21875 22C19.664063 22 20.628906 22.40625 21.78125 22.90625C22.933594 23.40625 24.296875 24 26.125 24C29.785156 24 34.40625 21.90625 34.40625 21.90625C34.894531 21.78125 35.214844 21.3125 35.148438 20.8125C35.085938 20.3125 34.660156 19.9375 34.15625 19.9375 Z M 44 23C42.894531 23 42 23.894531 42 25C42 26.105469 42.894531 27 44 27C45.105469 27 46 26.105469 46 25C46 23.894531 45.105469 23 44 23 Z M 34.15625 25.9375C33.957031 25.933594 33.761719 25.988281 33.59375 26.09375C33.59375 26.09375 28.964844 28 26.125 28C24.707031 28 23.75 27.59375 22.59375 27.09375C21.4375 26.59375 20.066406 26 18.21875 26C14.523438 26 10.5625 28.09375 10.5625 28.09375C10.0625 28.335938 9.851563 28.9375 10.09375 29.4375C10.335938 29.9375 10.9375 30.148438 11.4375 29.90625C11.4375 29.90625 15.332031 28 18.21875 28C19.664063 28 20.628906 28.40625 21.78125 28.90625C22.933594 29.40625 24.296875 30 26.125 30C29.785156 30 34.40625 27.90625 34.40625 27.90625C34.894531 27.78125 35.214844 27.3125 35.148438 26.8125C35.085938 26.3125 34.660156 25.9375 34.15625 25.9375 Z M 44 30C42.894531 30 42 30.894531 42 32C42 33.105469 42.894531 34 44 34C45.105469 34 46 33.105469 46 32C46 30.894531 45.105469 30 44 30 Z M 7 42L10 42L10 43L7 43 Z M 40 42L43 42L43 43L40 43Z"
					></path>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'microwave')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'toaster'))
		<div
			data-feature
			x-show="shown.includes(11)"
			x-transition
			class="flex items-center gap-2"
		>
			<svg
				width="30"
				height="30"
				fill="#000000"
				viewBox="0 0 50 50"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
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
						d="M20.875 2C20.652344 2.023438 20.441406 2.125 20.28125 2.28125C19.652344 2.910156 19.367188 3.773438 19.46875 4.46875C19.570313 5.164063 19.917969 5.644531 20.15625 6.03125C20.394531 6.417969 20.511719 6.6875 20.53125 6.8125C20.550781 6.9375 20.601563 6.960938 20.28125 7.28125C19.882813 7.679688 19.882813 8.320313 20.28125 8.71875C20.679688 9.117188 21.320313 9.117188 21.71875 8.71875C22.347656 8.089844 22.632813 7.226563 22.53125 6.53125C22.429688 5.835938 22.082031 5.355469 21.84375 4.96875C21.605469 4.582031 21.488281 4.3125 21.46875 4.1875C21.449219 4.0625 21.398438 4.039063 21.71875 3.71875C22.042969 3.417969 22.128906 2.941406 21.933594 2.546875C21.742188 2.148438 21.308594 1.929688 20.875 2 Z M 25.875 2C25.652344 2.023438 25.441406 2.125 25.28125 2.28125C24.652344 2.910156 24.367188 3.773438 24.46875 4.46875C24.570313 5.164063 24.917969 5.644531 25.15625 6.03125C25.394531 6.417969 25.511719 6.6875 25.53125 6.8125C25.550781 6.9375 25.601563 6.960938 25.28125 7.28125C24.882813 7.679688 24.882813 8.320313 25.28125 8.71875C25.679688 9.117188 26.320313 9.117188 26.71875 8.71875C27.347656 8.089844 27.632813 7.226563 27.53125 6.53125C27.429688 5.835938 27.082031 5.355469 26.84375 4.96875C26.605469 4.582031 26.488281 4.3125 26.46875 4.1875C26.449219 4.0625 26.398438 4.039063 26.71875 3.71875C27.042969 3.417969 27.128906 2.941406 26.933594 2.546875C26.742188 2.148438 26.308594 1.929688 25.875 2 Z M 30.875 2C30.652344 2.023438 30.441406 2.125 30.28125 2.28125C29.652344 2.910156 29.367188 3.773438 29.46875 4.46875C29.570313 5.164063 29.917969 5.644531 30.15625 6.03125C30.394531 6.417969 30.511719 6.6875 30.53125 6.8125C30.550781 6.9375 30.601563 6.960938 30.28125 7.28125C29.882813 7.679688 29.882813 8.320313 30.28125 8.71875C30.679688 9.117188 31.320313 9.117188 31.71875 8.71875C32.347656 8.089844 32.632813 7.226563 32.53125 6.53125C32.429688 5.835938 32.082031 5.355469 31.84375 4.96875C31.605469 4.582031 31.488281 4.3125 31.46875 4.1875C31.449219 4.0625 31.398438 4.039063 31.71875 3.71875C32.042969 3.417969 32.128906 2.941406 31.933594 2.546875C31.742188 2.148438 31.308594 1.929688 30.875 2 Z M 23 10C18.394531 10 15.566406 10.367188 13.75 11C12.84375 11.316406 12.164063 11.695313 11.6875 12.21875C11.210938 12.742188 11 13.414063 11 14C11 15.269531 11.601563 15.980469 12 16.375L12 20.0625C7.523438 20.570313 4 24.394531 4 29L4 43C4 43.550781 4.449219 44 5 44L6.28125 44L7.0625 46.3125C7.195313 46.71875 7.574219 46.996094 8 47L11 47C11.425781 46.996094 11.804688 46.71875 11.9375 46.3125L12.71875 44L37.28125 44L38.0625 46.3125C38.195313 46.71875 38.574219 46.996094 39 47L42 47C42.425781 46.996094 42.804688 46.71875 42.9375 46.3125L43.71875 44L45 44C45.550781 44 46 43.550781 46 43L46 34L49 34C49.550781 34 50 33.550781 50 33L50 32C50 30.355469 48.644531 29 47 29L46 29C46 25.109375 43.480469 21.777344 40 20.53125L40 16.375C40.421875 15.960938 41 15.261719 41 14C41 13.421875 40.753906 12.761719 40.28125 12.25C39.808594 11.738281 39.15625 11.355469 38.25 11.03125C36.4375 10.382813 33.609375 10 29 10C28.398438 10 27.804688 9.992188 27.25 10C26.851563 10.007813 26.488281 10.03125 26.125 10.0625C25.183594 10.015625 24.152344 10 23 10 Z M 23 12C24.078125 12 25.03125 12.019531 25.90625 12.0625L25.90625 12.09375C25.988281 12.085938 26.101563 12.070313 26.1875 12.0625C28.796875 12.203125 30.527344 12.535156 31.5625 12.90625C32.269531 13.15625 32.644531 13.441406 32.8125 13.625C32.980469 13.808594 33 13.875 33 14C33 14.789063 32.4375 15.1875 32.4375 15.1875L32 15.46875L32 20L14 20L14 15.53125L13.625 15.21875C13.625 15.21875 13 14.644531 13 14C13 13.835938 13.023438 13.742188 13.1875 13.5625C13.351563 13.382813 13.703125 13.121094 14.40625 12.875C15.816406 12.382813 18.503906 12 23 12 Z M 34.28125 12.25C35.753906 12.414063 36.832031 12.644531 37.5625 12.90625C38.269531 13.15625 38.644531 13.441406 38.8125 13.625C38.980469 13.808594 39 13.875 39 14C39 14.789063 38.4375 15.1875 38.4375 15.1875L38 15.46875L38 20.0625C37.667969 20.023438 37.34375 20 37 20L34 20L34 19C34.550781 19 35 18.550781 35 18C35 17.449219 34.550781 17 34 17L34 16.375C34.421875 15.960938 35 15.261719 35 14C35 13.421875 34.753906 12.761719 34.28125 12.25 Z M 28 14C27.449219 14 27 14.449219 27 15C27 15.550781 27.449219 16 28 16C28.550781 16 29 15.550781 29 15C29 14.449219 28.550781 14 28 14 Z M 18 15C17.449219 15 17 15.449219 17 16C17 16.550781 17.449219 17 18 17C18.550781 17 19 16.550781 19 16C19 15.449219 18.550781 15 18 15 Z M 22.5 16C21.671875 16 21 16.671875 21 17.5C21 18.328125 21.671875 19 22.5 19C23.328125 19 24 18.328125 24 17.5C24 16.671875 23.328125 16 22.5 16 Z M 26.5 18C26.222656 18 26 18.222656 26 18.5C26 18.777344 26.222656 19 26.5 19C26.777344 19 27 18.777344 27 18.5C27 18.222656 26.777344 18 26.5 18 Z M 13 22L37 22C40.855469 22 44 25.144531 44 29L44 42L6 42L6 29C6 25.144531 9.144531 22 13 22 Z M 46 31L47 31C47.554688 31 48 31.445313 48 32L46 32 Z M 39 34C37.355469 34 36 35.355469 36 37C36 38.644531 37.355469 40 39 40C40.644531 40 42 38.644531 42 37C42 35.355469 40.644531 34 39 34 Z M 39 36C39.5625 36 40 36.4375 40 37C40 37.5625 39.5625 38 39 38C38.4375 38 38 37.5625 38 37C38 36.4375 38.4375 36 39 36 Z M 8.375 44L10.625 44L10.28125 45L8.71875 45 Z M 39.375 44L41.625 44L41.28125 45L39.71875 45Z"
					></path>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'toaster')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'water_boiler'))
		<div
			data-feature
			x-show="shown.includes(12)"
			x-transition
			class="flex items-center gap-2"
		>
			<svg
				width="30"
				height="30"
				viewBox="0 0 24 24"
				id="Layer_1"
				data-name="Layer 1"
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
					<defs>
						<style>
							.cls-1 {
								fill: none;
								stroke: #020202;
								stroke-miterlimit: 10;
								stroke-width: 1.91px;
							}
						</style>
					</defs>
					<path
						class="cls-1"
						d="M16.89,22.5H7.11A1.81,1.81,0,0,1,5.3,20.7h0v-.23l1-14.23H17.74l1,14.23v.23h0A1.81,1.81,0,0,1,16.89,22.5Z"
					></path>
					<path
						class="cls-1"
						d="M9.13,2.41h5.74a2.87,2.87,0,0,1,2.87,2.87v1a0,0,0,0,1,0,0H6.26a0,0,0,0,1,0,0v-1A2.87,2.87,0,0,1,9.13,2.41Z"
					></path>
					<path
						class="cls-1"
						d="M18.34,15.8h1.31a1.92,1.92,0,0,0,1.92-1.91V9.11A1.92,1.92,0,0,0,19.65,7.2H17.8"
					></path>
					<polyline
						class="cls-1"
						points="6.26 6.24 2.44 6.24 2.44 7.2 5.77 14.11"
					></polyline>
					<line
						class="cls-1"
						x1="12"
						y1="0.5"
						x2="12"
						y2="2.41"
					></line>
					<rect
						class="cls-1"
						x="10.09"
						y="10.07"
						width="3.83"
						height="8.61"
						rx="1.91"
					></rect>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'water_boiler')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'cozy_bedroom'))
		<div
			data-feature
			x-show="shown.includes(13)"
			x-transition
			class="flex items-center gap-2"
		>
			<svg
				width="30"
				height="30"
				fill="#000000"
				version="1.1"
				id="Layer_1"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				viewBox="0 0 512 512"
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
					<g>
						<g>
							<path
								d="M20.724,388.876v26.819c0,10.099,8.187,18.286,18.286,18.286s18.286-8.187,18.286-18.286v-26.819H20.724z"
							></path>
						</g>
					</g>
					<g>
						<g>
							<path
								d="M454.705,388.876v26.819c0,10.099,8.187,18.286,18.286,18.286c10.099,0,18.286-8.187,18.286-18.286v-26.819H454.705z"
							></path>
						</g>
					</g>
					<g>
						<g>
							<rect
								y="243.81"
								width="512"
								height="131.657"
							></rect>
						</g>
					</g>
					<g>
						<g>
							<path
								d="M420.854,78.019H91.146c-15.169,0-27.755,11.214-27.755,26.381v49.231l23.963-0.032c-0.26-1.219-0.397-2.3-0.397-3.657 c0-10.941,8.87-19.505,19.81-19.505h298.47c10.941,0,19.81,8.564,19.81,19.505c0,1.357-0.138,2.438-0.397,3.657h23.962v-49.2 C448.61,89.233,436.023,78.019,420.854,78.019z"
							></path>
						</g>
					</g>
					<g>
						<g>
							<polygon
								points="456.609,183.985 55.214,183.985 32.713,216.99 479.287,216.99 "
							></polygon>
						</g>
					</g>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'cozy_bedroom')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'bathroom'))
		<div
			data-feature
			x-show="shown.includes(14)"
			x-transition
			class="flex items-center gap-2"
		>
			<svg
				width="30"
				height="30"
				fill="#000000"
				viewBox="0 0 512 512"
				enable-background="new 0 0 512 512"
				id="toilet_1_"
				version="1.1"
				xml:space="preserve"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
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
						d="M417.539,98.001h-6.173V75.332c0-17.971-14.62-32.592-32.592-32.592h-89.456V31.961c0-3.364-2.736-6.1-6.1-6.1 h-56.705c-3.364,0-6.101,2.736-6.101,6.1V42.74h-87.188c-17.972,0-32.592,14.621-32.592,32.592v22.669h-6.173 c-4.852,0-8.8,3.948-8.8,8.8v34.518c0,4.852,3.948,8.799,8.8,8.799h6.173v85.922c0,11.651,6.054,22.161,15.957,28.026v2.689 c0,5.8,3.028,10.896,7.579,13.82v27.31c0,47.219,28.562,87.885,69.312,105.651v65.396h-30.755v7.2h30.755v0.006h124.284v-0.006 h27.353v-7.2h-27.353v-66.544c39.387-18.327,66.763-58.275,66.763-104.503v-27.903c4.068-2.993,6.724-7.799,6.724-13.227v-0.609 c12.137-4.996,20.114-16.769,20.114-30.106v-85.922h6.173c4.852,0,8.8-3.947,8.8-8.799v-34.518 C426.339,101.95,422.391,98.001,417.539,98.001z M100.634,142.919h-6.173c-0.883,0-1.6-0.718-1.6-1.6v-34.518 c0-0.882,0.717-1.601,1.6-1.601h6.173V142.919z M227.613,33.062h54.505v9.678h-54.505V33.062z M310.565,478.933H200.681v-62.542 c12.098,4.326,25.119,6.689,38.684,6.689h29.97c14.522,0,28.423-2.709,41.231-7.635V478.933z M377.328,307.886 c0,59.548-48.446,107.994-107.994,107.994h-29.97c-59.547,0-107.994-48.446-107.994-107.994v-24.701h1.649h241.806h2.503V307.886z M384.053,266.756c0,5.09-4.14,9.229-9.228,9.229H133.02c-5.089,0-9.229-4.139-9.229-9.229v-3.444c0-5.089,4.14-9.229,9.229-9.229 h241.806c5.088,0,9.228,4.14,9.228,9.229V266.756z M130.596,246.883c0.084-12.091,9.947-21.902,22.057-21.902H355.19 c12.11,0,21.973,9.811,22.057,21.902h-2.422H133.02H130.596z M404.166,98.001v52.117v85.922c0,9.622-5.332,18.192-13.626,22.499 c-1.054-3.463-3.229-6.434-6.093-8.515v-2.987c0-16.132-13.125-29.257-29.257-29.257H152.652c-16.132,0-29.257,13.125-29.257,29.257 v2.987c-2.266,1.646-4.093,3.852-5.28,6.417c-6.428-4.739-10.282-12.205-10.282-20.402v-85.922V98.001V87.507h296.333V98.001z M404.166,80.307H107.833v-4.975c0-14.001,11.392-25.392,25.393-25.392h87.188h68.905h89.456c14.001,0,25.392,11.391,25.392,25.392 V80.307z M419.139,141.319c0,0.882-0.718,1.6-1.6,1.6h-6.173v-37.718h6.173c0.882,0,1.6,0.718,1.6,1.601V141.319z"
						id="toilet"
					></path>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'bathroom')->name}}</p>
		</div>
	@endif
	@if ($features->contains('key', 'washing_clothes'))
		<div
			data-feature
			x-show="shown.includes(15)"
			x-transition
			class="flex items-center gap-2"
		>
			<svg
				width="30"
				height="30"
				fill="#000000"
				version="1.1"
				id="Layer_1"
				xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink"
				viewBox="0 0 512 512"
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
					<g>
						<g>
							<path
								d="M255.958,156.815c-70.615,0-128.065,57.45-128.065,128.065s57.45,128.065,128.065,128.065s128.065-57.45,128.065-128.065 S326.573,156.815,255.958,156.815z M255.958,397.264c-61.968,0-112.384-50.415-112.384-112.384s50.415-112.384,112.384-112.384 s112.384,50.415,112.384,112.384S317.926,397.264,255.958,397.264z"
							></path>
						</g>
					</g>
					<g>
						<g>
							<path
								d="M355.378,382.82c-25.194,25.741-58.881,40.502-94.853,41.565l0.463,15.674c40.048-1.184,77.55-17.617,105.597-46.271 L355.378,382.82z"
							></path>
						</g>
					</g>
					<g>
						<g>
							<path
								d="M148.532,175.739l10.973,11.204c26.031-25.496,60.438-39.537,96.882-39.537v-15.681 C215.816,131.724,177.512,147.356,148.532,175.739z"
							></path>
						</g>
					</g>
					<g>
						<g>
							<path
								d="M65.209,0v486.126h381.582V0H65.209z M80.89,15.681h88.82v67.953H80.89V15.681z M431.11,470.444H80.89V99.316H431.11 V470.444z M431.11,83.635H185.392V15.681H431.11V83.635z"
							></path>
						</g>
					</g>
					<g>
						<g>
							<path
								d="M255.958,198.632c-47.558,0-86.248,38.69-86.248,86.248c0,47.558,38.69,86.248,86.248,86.248s86.248-38.69,86.248-86.248 C342.206,237.322,303.516,198.632,255.958,198.632z M255.958,214.313c36.26,0,66.206,27.493,70.12,62.726H185.837 C189.751,241.806,219.698,214.313,255.958,214.313z M255.958,355.447c-36.259,0-66.206-27.493-70.12-62.726h140.24 C322.164,327.954,292.217,355.447,255.958,355.447z"
							></path>
						</g>
					</g>
					<g>
						<g>
							<path
								d="M125.3,26.136c-12.971,0-23.522,10.552-23.522,23.522c0,12.971,10.552,23.522,23.522,23.522s23.522-10.552,23.522-23.522 C148.822,36.687,138.271,26.136,125.3,26.136z M125.3,57.499c-4.324,0-7.841-3.517-7.841-7.841c0-4.324,3.517-7.841,7.841-7.841 c4.324,0,7.841,3.517,7.841,7.841C133.141,53.982,129.624,57.499,125.3,57.499z"
							></path>
						</g>
					</g>
					<g>
						<g>
							<rect
								x="313.525"
								y="41.817"
								width="15.682"
								height="15.681"
							></rect>
						</g>
					</g>
					<g>
						<g>
							<rect
								x="386.705"
								y="41.817"
								width="15.681"
								height="15.681"
							></rect>
						</g>
					</g>
					<g>
						<g>
							<rect
								x="350.115"
								y="41.817"
								width="15.681"
								height="15.681"
							></rect>
						</g>
					</g>
					<g>
						<g>
							<rect
								x="93.953"
								y="496.319"
								width="52.272"
								height="15.681"
							></rect>
						</g>
					</g>
					<g>
						<g>
							<rect
								x="365.765"
								y="496.319"
								width="52.272"
								height="15.681"
							></rect>
						</g>
					</g>
				</g>
			</svg>
			<p>{{$features->firstWhere('key', 'washing_clothes')->name}}</p>
		</div>
	@endif
</div>

<script>
	document.addEventListener('alpine:init', () => {
		Alpine.data('shown', () => ({
			shown: [],
			showFeatures() {
				document.querySelectorAll(
					'[data-feature]').forEach((
					el, index) => {
					setTimeout(() => {
						this.shown.push(
							index
						)
					}, 100 * index)
				});
			}
		}));
	});
</script>
