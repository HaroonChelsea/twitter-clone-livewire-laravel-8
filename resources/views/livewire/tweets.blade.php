<div class="bg-gray-50 dark:bg-gray-900">
    @forelse($tweets as $tweet)

        <div class="flex flex-shrink-0 p-4 pb-0">
            <a href="{{ route('profile', $tweet->user) }}" class="flex-shrink-0 group block">
                <div class="flex items-center">
                    <div>
                        <img class="inline-block h-10 w-10 rounded-full" src="{{ $tweet->user->profile_photo_url }}" />
                    </div>
                    <div class="ml-3">
                        <p class="text-base leading-6 font-medium text-black dark:text-white">
                            {{ $tweet->user->name }}
                            <span
                                class="text-sm leading-5 font-medium  text-gray-400 hover:text-gray-500 dark:group-hover:text-gray-300 transition ease-in-out duration-150">
                                {{ '@' . $tweet->user->username }} . {{ $tweet->created_at->diffForHumans() }}
                            </span>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="pl-16">
            <p class="text-base width-auto font-medium text-black dark:text-white flex-shrink">
                {{ $tweet->body }}
            </p>


            <div class="flex">
                <div class="w-full">

                    <div class="flex items-center">
                        <div class="flex-1 text-center">
                            <a href="{{ route('singleTweet', $tweet->id) }}"
                                class="w-12 mt-1 group flex items-center text-black dark:text-white px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-400 hover:text-white">
                                <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                            </a>
                        </div>

                        <div class="flex-1 text-center py-2 m-2">
                            <a href="#"
                                class="w-24 mt-1 group flex items-center text-black dark:text-white px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-400 hover:text-white">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                                </svg>
                                <span class="ml-5">0</span>
                            </a>
                        </div>

                        <div class="flex-1 text-center py-2 m-2">
                            <button wire:click="toggleLike({{ $tweet->id }})"
                                class="w-24 mt-1 group flex items-center text-black dark:text-white px-3 py-2 text-base leading-6 font-medium rounded-full {{ $tweet->isLikedBy(Auth::user()) ? 'bg-red-400 text-white' : 'hover:bg-red-400 hover:text-white' }}">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>

                                <span class="ml-5">{{ $tweet->likes ?: 0 }}</span>
                            </button>
                        </div>


                        <div class="flex-1 text-center py-2 m-2">
                            <a href="#"
                                class="w-12 mt-1 group flex items-center text-black dark:text-white px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-400 hover:text-white">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex-1 text-center py-2 m-2">
                            <a href="#"
                                class="w-12 mt-1 group flex items-center text-black dark:text-white px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-400 hover:text-white">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex-1 text-center py-2 m-2">
                            <a href="#"
                                class="w-12 mt-1 group flex items-center text-black dark:text-white px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-400 hover:text-white">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        <hr class="border-gray-600">
    @empty
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">

                <div class="rounded-md border bg-yellow-50 p-4">
                    <div class="flex ">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-yellow-400" x-description="Heroicon name: exclamation"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-yellow-800">
                                No tweets found!!
                            </h3>
                            <div class="mt-2 text-sm text-yellow-700">
                                <p>
                                    Please tweet for the first time. Or follow someone to see their tweets.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforelse
    @if (session()->has('toggleLiked'))
        <div
            class="z-40 fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
            <div
                class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-green-400" x-description="Heroicon name: check-circle"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <p class="text-sm font-medium text-gray-900">
                                {{ session('toggleLiked') }}
                            </p>
                        </div>
                        <div class="ml-4 flex-shrink-0 flex">
                            <button type="button" wire:click.prevent="$set('notify',false)"
                                class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="sr-only">Close</span>
                                <svg class="h-5 w-5" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
