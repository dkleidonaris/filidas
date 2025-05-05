<a
	@if (!Route::is($route)) href="{{ route($route) }}" @endif
	class="@if (Route::is($route)) scale-110 font-bold @else hover:scale-105 @endif transition"
>{{ $name }}</a>
