@php
	if (!isset($navPosition)) {
	    $navPosition = 'sticky';
	}

	if (!isset($menuWithBg)) {
	    $menuWithBg = true;
	}
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1"
	>
	<meta
		name="csrf-token"
		content="{{ csrf_token() }}"
	>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer',
			'{{ config('analytics.container-id') }}');
	</script>
	<!-- End Google Tag Manager -->

	@hasSection('title')
		<title>@yield('title') | {{ __('Διαμερίσματα FILIDAS') }}</title>
	@else
		<title>{{ __('Διαμερίσματα Filidas') }}</title>
	@endif

	<link
		rel="icon"
		type="image/x-icon"
		href="{{ asset('img/favicon.ico') }}?v=2"
	>

	@hasSection('description')
		<meta
			name="description"
			content="@yield('description')"
		>
	@endif

	<!-- Fonts -->
	<link
		rel="preconnect"
		href="https://fonts.bunny.net"
	>
	<link
		href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
		rel="stylesheet"
	/>

	<!-- Scripts -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	@livewireStyles
	@cookieconsentscripts
</head>

<body class="font-sans text-gray-900 antialiased">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe
			src="https://www.googletagmanager.com/ns.html?id={{ config('analytics.container-id') }}"
			height="0"
			width="0"
			style="display:none;visibility:hidden"
		></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<x-nav.top-menu-guest
		:navPosition=$navPosition
		:menuWithBg=$menuWithBg
	/>

	@isset($breadcrumbs)
		<livewire-navigation.breadcrumbs
			:$breadcrumbs
			lazy
		/>
	@endisset

	@hasSection('header')
		<h2 class="my-2 text-center text-3xl font-bold">@yield('header')</h2>
	@endif

	@yield('body')

	<x-nav.footer />

	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.8/iframeResizer.min.js"
	></script>
	<script>
		var iframes = iFrameResize({
			checkOrigin: false,
			autoResize: true,
			heightCalculationMethod: 'bodyScroll'
		}, '#bocavwidget');
	</script>
	@yield('scripts')
	@livewireScripts
	@cookieconsentview
	@cookieconsentbutton(action: 'reset', label: 'Manage cookies', attributes: ['id' => 'reset-button', 'class' => 'btn'])
</body>

</html>
