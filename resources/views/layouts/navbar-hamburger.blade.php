<button @click="navbarOpen =!navbarOpen" class="p-2 hover:border-green-500 md:hidden hover:border">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" :class="{ 'hidden': navbarOpen }" fill="none"
        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6text-primary" :class="{ 'hidden': !navbarOpen }" fill="none"
        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
</button>
