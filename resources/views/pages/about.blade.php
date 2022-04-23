
@extends('layourts.base' ,['title' => 'about us '])


@section('content')
    <img src="{{asset('images/mpl.jpg')}} " alt="koli" class="my-12 rounded shadow-md h-32">
<h2 class="text-gray-700">built with <span class="text-pink-500">&hearts;</span>
    by kouloubé kolié</h2>
<p class="mt-5">
    <a href="{{ route('kolie') }}" class="text-indigo-500 hover:text-indigo-600 underline">
        revenir a la page d'acceuil</a></br>
    <a href="{{ route('help') }}" class="text-indigo-500 hover:text-indigo-600 underline">
    helps</a>
</p>

@endsection
