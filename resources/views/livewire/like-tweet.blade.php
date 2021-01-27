<div class="flex-1 text-center py-2 m-2">
    <button wire:click="toggleLike()"
        class="w-24 mt-1 group flex items-center text-black dark:text-white px-3 py-2 text-base leading-6 font-medium rounded-full {{ $tweet->isLikedBy(Auth::user()) ? 'bg-red-400 text-white' : 'hover:bg-red-400 hover:text-white' }}">
        <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            stroke="currentColor" viewBox="0 0 24 24">
            <path
                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
            </path>
        </svg>

        <span class="ml-5">{{ $tweet->likes ?: 0 }}</span>
    </button>
</div>
