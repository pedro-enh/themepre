@extends('layouts.auth')
@section('title', 'Reset Password')
@section('content')
<div class="card p-8 backdrop-blur-xl bg-[#12121a]/60 border border-[#1e1e2e] shadow-[0_25px_50px_-12px_rgba(0,0,0,0.5)]">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-white mb-2">Reset Password</h1>
        <p class="text-gray-400">Enter your email to receive a reset link</p>
    </div>
    <form class="space-y-5">
        <div>
            <label class="block text-xs text-gray-400 uppercase tracking-wider mb-2">Email Address</label>
            <input type="email" class="w-full bg-[#0a0a0f] border border-[#1e1e2e] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-[#00d4ff] focus:ring-1 focus:ring-[#00d4ff] transition">
        </div>
        <button type="button" class="w-full bg-[#00d4ff] hover:bg-[#00d4ff]/90 text-black font-semibold rounded-lg px-4 py-3 transition transform hover:scale-[1.02] shadow-[0_0_15px_rgba(0,212,255,0.4)]">
            Send Reset Link
        </button>
        <div class="text-center mt-4">
            <a href="/login" class="text-sm text-[#00d4ff] hover:underline">Back to Login</a>
        </div>
    </form>
</div>
@endsection