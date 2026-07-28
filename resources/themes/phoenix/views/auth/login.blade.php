@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<div class="card p-8 backdrop-blur-xl bg-[#12121a]/60 border border-[#1e1e2e] shadow-[0_25px_50px_-12px_rgba(0,0,0,0.5)]">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-white mb-2">Welcome Back</h1>
        <p class="text-gray-400">Sign in to your account</p>
    </div>
    <form class="space-y-5">
        <div>
            <label class="block text-xs text-gray-400 uppercase tracking-wider mb-2">Username or Email</label>
            <input type="text" class="w-full bg-[#0a0a0f] border border-[#1e1e2e] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-[#00d4ff] focus:ring-1 focus:ring-[#00d4ff] transition">
        </div>
        <div>
            <label class="block text-xs text-gray-400 uppercase tracking-wider mb-2">Password</label>
            <input type="password" class="w-full bg-[#0a0a0f] border border-[#1e1e2e] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-[#00d4ff] focus:ring-1 focus:ring-[#00d4ff] transition">
        </div>
        <button type="button" class="w-full bg-[#00d4ff] hover:bg-[#00d4ff]/90 text-black font-semibold rounded-lg px-4 py-3 transition transform hover:scale-[1.02] shadow-[0_0_15px_rgba(0,212,255,0.4)]">
            Sign In
        </button>
    </form>
</div>
@endsection