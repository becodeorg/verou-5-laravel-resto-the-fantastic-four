<header>
    <div class="flex bg-gray-800 text-white top-0 py-3 flex-wrap justify-around bg-silver">
        <h1 class="text-lg font-semibold">The Fantastic Four</h1>
        <ul class="flex gap-[40px] text-m">
            <li><a href="/">Home</a></li>
            <li><a href="">Menu</a></li>
            <li><a href="{{route("reservation")}}">Book table</a></li>
            <li><a href="">Contact</a></li>
            @auth
                <li><a href="{{ route('logout') }}">Logout</a></li>
            @endauth
        </ul>
    </div>
</header>


