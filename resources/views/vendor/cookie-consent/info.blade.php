@foreach($cookies->getCategories() as $category)
    <div class="mb-8">
        <h3 class="text-2xl font-semibold mb-4 text-gray-800">{{ $category->title }}</h3>
        <div class="overflow-hidden rounded-lg shadow-lg border border-gray-200">
            <table class="min-w-full bg-white hidden md:table">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">@lang('cookieConsent::cookies.cookie')</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">@lang('cookieConsent::cookies.purpose')</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">@lang('cookieConsent::cookies.duration')</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($category->getCookies() as $cookie)
                    <tr class="border-b">
                        <td class="px-6 py-4 text-gray-700">{{ $cookie->name }}</td>
                        <td class="px-6 py-4 text-gray-700">@lang($cookie->description)</td>
                        <td class="px-6 py-4 text-gray-700">{{ \Carbon\CarbonInterval::minutes($cookie->duration)->cascade() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="md:hidden grid gap-4">
                @foreach($category->getCookies() as $cookie)
                    <div class="border-b py-4 px-2">
                        <div class="font-semibold text-gray-800">@lang('cookieConsent::cookies.cookie')</div>
                        <div class="text-gray-700">{{ $cookie->name }}</div>
                        <div class="mt-2 font-semibold text-gray-800">@lang('cookieConsent::cookies.purpose')</div>
                        <div class="text-gray-700">@lang($cookie->description)</div>
                        <div class="mt-2 font-semibold text-gray-800">@lang('cookieConsent::cookies.duration')</div>
                        <div class="text-gray-700">{{ \Carbon\CarbonInterval::minutes($cookie->duration)->cascade() }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endforeach