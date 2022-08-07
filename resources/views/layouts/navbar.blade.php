<header :class="{ 'h-16 md:h-24': !scrolledFromTop, 'h-12': scrolledFromTop }"
    class="fixed z-10 flex items-center justify-between w-full px-4 transition-all duration-200 bg-white shadow">
    <a href="/">
        <img src="{{ asset('/img/agrican-nig.png') }}" alt="agrican logo"
            :class="{ 'h-10 md:h-16': !scrolledFromTop, 'h-10': scrolledFromTop }" class="duration-200" />
    </a>
    <nav>
        <x-layout.navbar-hamburger></x-layout.navbar-hamburger>
        <ul :class="{ 'translate-x-full': !navbarOpen, 'translate-x-0': navbarOpen }"
            class="fixed left-0 right-0 w-full min-h-screen p-4 space-y-4 transition duration-200 transform md:mt-0 bg-secondary md:flex md:relative md:min-h-0 md:space-y-0 md:space-x-6 md:p-0 md:translate-x-0 md:bg-transparent">
            @foreach ($navigationItems as $item)
                <li>
                    <x-layout.navbar-item :href="$item['href']" :active="request()->is($item['href'])">
                        {{ $item['label'] }}
                        <span class="hidden">{{ request()->routeIs($item['href']) }}</span>
                    </x-layout.navbar-item>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
