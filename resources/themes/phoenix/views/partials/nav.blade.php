<header class="h-16 border-b border-[#1e1e2e] bg-[#12121a]/80 backdrop-blur flex items-center justify-between px-6">
    <div class="flex items-center gap-4">
        <button class="lg:hidden p-2 rounded hover:bg-[#1e1e2e] transition"><i data-lucide="menu"></i></button>
        <h1 class="text-xl font-semibold">@yield('title')</h1>
    </div>
    <div class="flex items-center gap-4">
        <button class="p-2 rounded-full hover:bg-[#1e1e2e] transition"><i data-lucide="bell" class="w-5 h-5"></i></button>
        <a href="/account" class="flex items-center gap-2 hover:opacity-80 transition">
            <img src="https://ui-avatars.com/api/?name=Admin&background=00d4ff&color=fff" class="w-8 h-8 rounded-full">
        </a>
    </div>
</header>