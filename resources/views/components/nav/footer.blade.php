<footer class="bg-gray-900 px-4 py-8 text-gray-300 md:px-16">
	<div class="mx-auto grid max-w-7xl gap-8 md:grid-cols-3">
		<!-- Menu Links -->
		<div>
			<h3 class="mb-4 text-xl font-semibold">@lang('Μενού')</h3>
			<ul class="space-y-2">
				<li><a
						href="{{ route('index') }}"
						class="hover:text-white"
					>@lang('Αρχική')</a></li>
				<li><a
						href="{{ route('apartments') }}"
						class="hover:text-white"
					>@lang('Τα διαμερίσματα')</a></li>
				<li><a
						href="{{ route('contact') }}"
						class="hover:text-white"
					>@lang('Επικοινωνία')</a></li>
				<li><a
						href="{{ route('book') }}"
						class="hover:text-white"
					>@lang('Κάντε κράτηση')</a></li>
				<li><a
						href="{{ route('my-reservation') }}"
						class="hover:text-white"
					>@lang('Η κράτησή μου')</a></li>
			</ul>
		</div>

		<!-- Terms of Use -->
		<div>
			<h3 class="mb-4 text-xl font-semibold">@lang('Χρήσιμοι σύνδεσμοι')</h3>
			<ul class="space-y-2">
				<li><a
						href="{{ route('terms') }}"
						class="hover:text-white"
					>@lang('Όροι χρήσης')</a></li>
				<li><a
						href="{{ route('privacy-policy') }}"
						class="hover:text-white"
					>@lang('Πολιτική απορρήτου')</a></li>
				<li><a
						href="{{ route('payment-methods') }}"
						class="hover:text-white"
					>@lang('Τρόποι πληρωμής')</a></li>
				<li><a
						href="{{ route('cookie-policy') }}"
						class="hover:text-white"
					>@lang('Πολιτική cookies')</a></li>
				<li>
					<button
						type="button"
						onclick="LaravelCookieConsent.reset()"
						class="rounded-lg bg-gray-700 px-4 py-2 text-gray-300 shadow-md transition-all duration-300 ease-in-out hover:bg-gray-600 hover:text-white"
					>
						@lang('Αλλαγή προτιμήσεων cookies')
					</button>
				</li>
			</ul>
		</div>

		<!-- Business Info -->
		<div>
			<h3 class="mb-4 text-xl font-semibold">@lang('Στοιχεία επικοινωνίας')</h3>
			<ul class="space-y-2">
				<li>
					@lang('Διαμερίσματα FILIDAS')
				</li>
				<li>
					@lang('business-address')
				</li>
				<li>
					Phone: <a href="tel:+306937079820">+30 693 7079 820</a>
				</li>
				<li>Email: <a href="mailto:info@filidas.gr">info@filidas.gr</a></li>
			</ul>
		</div>
	</div>
	<div class="mt-8 border-t border-gray-700 pt-4 text-center">
		<p>&copy; {{ date('Y') }} @lang('Διαμερίσματα FILIDAS'). @lang('rights-reserved').</p>
	</div>
</footer>
