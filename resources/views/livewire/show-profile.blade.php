<div class="w-3/5 border border-gray-600 h-auto  ">
    <!--middle wall-->

    <div class="mb-20">
        <div>
            <img class="h-32 w-full object-cover lg:h-48"
                src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                alt="">
        </div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                <div class="flex">
                    <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32"
                        src="{{ $user->profile_photo_url }}" alt="">
                </div>
                <div class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                    <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                        <h1 class="text-xl font-bold text-black dark:text-white truncate">
                            {{ $user->name }}
                        </h1>
                        <span class="text-gray-600 dark:text-gray-500">{{ '@' . $user->username }}</span>
                    </div>
                    <div class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                        @if (Auth::user()->is($user))
                            <a href="{{ route('profile.show') }}" type="button"
                                class="bg-gray-200 hover:bg-gray-100 text-black font-bold py-2 px-8 rounded-full float-right">
                                <span>Edit Profile</span>
                            </a>
                        @endif

                        @unless(Auth::user()->is($user))
                            @if (Auth::user()->following($user))
                                @livewire('follow-btn', ['status' => 'Unfollow','user'=>$user])
                            @else
                                @livewire('follow-btn', ['status' => 'Follow','user'=>$user])
                            @endif
                        @endunless
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewire('tweets',['user'=>$user])
</div>
