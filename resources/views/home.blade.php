<x-app-layout>
    <div class="w-3/5 border border-gray-600 h-auto  border-t-0">
        <!--middle wall-->

        <div class="flex">
            <div class="flex-1 m-2">
                <h2 class="px-4 py-2 text-xl font-semibold text-black dark:text-white">Home</h2>
            </div>
            @livewire('dark-mode')
        </div>

        <hr class="border-gray-600">
        @livewire('add-tweet')

        <hr class="border-blue-400 border-4">


        <div>
        </div>
        @livewire('timeline',['user'=>Auth::user()])
    </div>
</x-app-layout>
