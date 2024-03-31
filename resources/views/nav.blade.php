@if(Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{url('/dashboard')}}" class="text-sm tet-gray-700 dark:text-gray-500 underline">
                Dashboard</a>
            <a href="{{url('/logout')}}" class="text-sm tet-gray-700 dark:text-gray-500 underline">
                logout</a>

        @else
            <a href="{{url('/login')}}" class="text-sm tet-gray-700 dark:text-gray-500 underline">
                login</a>

            @if(route::has('register'))
            <a href="{{url('/register')}}" class="text-sm tet-gray-700 dark:text-gray-500 underline">
                register</a>
    </div>
@endif