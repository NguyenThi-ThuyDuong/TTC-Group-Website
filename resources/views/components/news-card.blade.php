<div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden group hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full">
    <div>
        <!-- Thumbnail -->
        <div class="relative overflow-hidden aspect-video">
            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-3 left-3 bg-[#008A45] text-white text-[10px] uppercase font-bold tracking-wider px-2.5 py-1 rounded-full shadow-sm" data-lang-vi="Tin tức" data-lang-en="News">
                Tin tức
            </div>
        </div>

        <!-- Content -->
        <div class="p-5 space-y-3">
            <div class="flex items-center text-xs text-gray-400 space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span>{{ $item['date'] }}</span>
            </div>
            
            <h4 class="text-base font-bold text-gray-800 line-clamp-2 group-hover:text-[#008A45] transition-colors leading-snug" data-lang-vi="{{ $item['title'] }}" data-lang-en="{{ $item['title_en'] }}">
                {{ $item['title'] }}
            </h4>
            
            <p class="text-xs text-gray-500 line-clamp-3 leading-relaxed" data-lang-vi="{{ $item['summary'] }}" data-lang-en="{{ $item['summary_en'] }}">
                {{ $item['summary'] }}
            </p>
        </div>
    </div>

    <!-- Read more -->
    <div class="p-5 pt-0">
        <a href="{{ route('media') }}" class="inline-flex items-center text-xs font-semibold text-[#008A45] hover:text-[#EAA522] transition-colors">
            <span data-lang-vi="Xem thêm" data-lang-en="Read More">Xem thêm</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1.5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
</div>
