<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    @include('partials.head')
</head>
<body class="bg-[#0a0a0f] text-white font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        @include('partials.sidebar')
        <div class="flex-1 flex flex-col relative overflow-hidden">
            @include('partials.nav')
            <main class="flex-1 overflow-y-auto p-6 animate-fade-in-up">
                @yield('content')
            </main>
        </div>
    </div>
    @include('partials.scripts')
</body>
</html>