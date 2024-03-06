<div class="sidebar pt-10 pb-5 bg-[rgb(239,242,248)] max-h-[80vh] overflow-auto border-r border-b border-r-slate-300 border-b-slate-300 shadow font-bold text-[#222] text-sm absolute left-0 right-0 top-20 hidden lg:static lg:block lg:w-[23%] lg:max-h-[100vh] lg:overflow-auto xl:w-[20%]">
    <div class="flex justify-center mb-10">
        <a href="/">
            <img src="{{ asset('img/logo/chip.png') }}" class="w-20" alt="">
        </a>
    </div>
    <ul class="pl-6">
        @foreach ($series as $serie)
            <li><a href="/{{ $family_req }}/{{ $serie->slug }}" class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1">{{ $serie->name }}</a></li>
        @endforeach


        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
        <li><span class="w-max tracking-wide mb-4 py-1 block transition duration-200 hover:translate-x-1 cursor-pointer">This Is An Example</span></li>
    </ul>
</div>