<div class="py-2 bg-[rgb(239,242,248)] max-h-[80vh] overflow-auto border-r border-b border-r-slate-300 border-b-slate-300 shadow font-bold text-[#222] text-sm absolute left-0 right-0 top-2 lg:w-[100%]">
    @if (count($series) > 0)
        <ul class="px-6 divide-y divide-slate-400">
            @foreach ($series as $serie)
                <li>
                    <a href="/{{ $serie->family->slug }}/{{ $serie->slug }}" class="p-2 block hover:bg-blue-100">
                        <h2 class="mb-[2px]">{{ $serie->family->name }}</h2>
                        <p>{{ $serie->name }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p class="pl-6">Hasil Tidak Ditemukan</p>
    @endif
</div>