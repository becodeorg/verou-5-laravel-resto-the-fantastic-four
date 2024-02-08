<header>
    <div class="flex bg-gray-800 text-white top-0 py-3 flex-wrap justify-around bg-silver">
        <h1 class="text-lg font-semibold">The Fantastic Four</h1>
        <ul class="flex gap-[40px] text-m">
            <li><a href="/home">Home</a></li>
            @guest
                <li><a href="{{ route('menu') }}">Menu</a></li>
                <li><a href="{{ route('reservations') }}">Book table</a></li>
                <li><a href="">Contact</a></li>
            @endguest

            @auth
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('logout') }}" class="font-bold text-red-400">Logout</a></li>
            @endauth
        </ul>
    </div>
</header>
