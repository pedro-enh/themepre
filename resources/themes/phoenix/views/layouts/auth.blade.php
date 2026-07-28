<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    @include('partials.head')
</head>
<body class="bg-[#0a0a0f] text-white font-sans antialiased min-h-screen flex items-center justify-center relative">
    <div class="absolute inset-0 bg-gradient-to-br from-[#0a0a0f] via-[#12121a] to-[#0a0a0f] opacity-80"></div>
    <main class="relative z-10 w-full max-w-md p-6 animate-fade-in-up">
        @yield('content')
    </main>
    @include('partials.scripts')
</body>
</html>