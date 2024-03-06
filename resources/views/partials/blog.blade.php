@extends('layouts.main')

@section('container')
<main class="relative lg:flex">
    @include('partials.sidebar')    

    <div class="pt-8 pb-10 h-screen px-4 w-full lg:w-[77%] lg:overflow-scroll lg:px-10 xl:w-[80%] xl:px-20">
        @include('partials.search')
        @include("$family_req.$serie_req")
    </div>
</main>

<script src="{{ asset('js/blog.js') }}"></script>
@endsection
