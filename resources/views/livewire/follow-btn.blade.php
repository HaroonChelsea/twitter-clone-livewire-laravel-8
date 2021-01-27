<button wire:click.prevent='toggleFollow()' type="button"
    class="{{ $status == 'Follow' ? 'bg-blue-400 hover:bg-blue-600' : 'bg-red-400 hover:bg-red-600' }} border-1 border-blue-900  text-white font-bold py-2 px-8 rounded-full">
    <span>{{ $status }}</span>
</button>
