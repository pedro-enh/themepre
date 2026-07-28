@extends('layouts.master')
@section('title', 'Account Settings')
@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="card p-6 flex items-center gap-6">
        <div class="relative group cursor-pointer">
            <img src="https://ui-avatars.com/api/?name=Admin&background=00d4ff&color=fff&size=128" class="w-24 h-24 rounded-full border-2 border-[#1e1e2e] group-hover:border-[#00d4ff] transition">
            <div class="absolute inset-0 bg-black/50 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                <i data-lucide="camera" class="w-6 h-6 text-white"></i>
            </div>
        </div>
        <div>
            <h2 class="text-2xl font-bold">Administrator</h2>
            <p class="text-gray-400">admin@example.com</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="card p-6 space-y-4">
            <h3 class="text-lg font-semibold border-b border-[#1e1e2e] pb-2">Change Password</h3>
            <div>
                <label class="block text-xs text-gray-400 mb-1">Current Password</label>
                <input type="password" class="w-full bg-[#0a0a0f] border border-[#1e1e2e] rounded-lg px-3 py-2 text-sm focus:border-[#00d4ff] focus:ring-1 focus:ring-[#00d4ff] transition">
            </div>
            <div>
                <label class="block text-xs text-gray-400 mb-1">New Password</label>
                <input type="password" class="w-full bg-[#0a0a0f] border border-[#1e1e2e] rounded-lg px-3 py-2 text-sm focus:border-[#00d4ff] focus:ring-1 focus:ring-[#00d4ff] transition">
            </div>
            <button class="bg-[#00d4ff] hover:bg-[#00d4ff]/90 text-black px-4 py-2 rounded-lg text-sm font-medium transition">Update Password</button>
        </div>
        <div class="card p-6 space-y-4">
            <h3 class="text-lg font-semibold border-b border-[#1e1e2e] pb-2">Two-Factor Authentication</h3>
            <p class="text-sm text-gray-400">Protect your account with 2FA security.</p>
            <button class="bg-[#10b981]/10 text-[#10b981] border border-[#10b981]/30 hover:bg-[#10b981]/20 px-4 py-2 rounded-lg text-sm font-medium transition w-full">Enable 2FA</button>
        </div>
    </div>
</div>
@endsection