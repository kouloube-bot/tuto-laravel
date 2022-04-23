<footer class="text-gray-400">&copy: copyright {{ date('Y') }}
    @if(! Route::is('about'))
    &middot; <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-600 underline">AboutUs</a>
    @endif
</footer>
