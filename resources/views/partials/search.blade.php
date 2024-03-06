<section>
    <form class="grid grid-cols-[8fr,1fr] sm:grid-cols-[15fr,1fr] md:grid-cols-[20fr,1fr] items-center border-b border-b-slate-500">
        @csrf
        <input id="search" type="text" placeholder="Search Project / MCU" class="h-10 px-3 border-none outline-none bg-transparent" autocomplete="off">
        <span><i class="fa-solid fa-bars fa-lg cursor-pointer lg:hidden"></i></span>
    </form>
    <div class="container-result-search relative"></div>
</section>

<script src="{{ asset('js/search.js') }}"></script>