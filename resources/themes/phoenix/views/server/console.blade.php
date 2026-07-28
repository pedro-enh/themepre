@extends('layouts.master')
@section('title', 'Server Console')
@section('content')
<div class="flex flex-col h-full gap-4">
    <div class="flex gap-4">
        <button class="bg-[#10b981]/10 text-[#10b981] border border-[#10b981]/20 px-4 py-2 rounded-lg hover:bg-[#10b981]/20 transition flex items-center gap-2 text-sm font-medium"><i data-lucide="play" class="w-4 h-4"></i> Start</button>
        <button class="bg-[#f43f5e]/10 text-[#f43f5e] border border-[#f43f5e]/20 px-4 py-2 rounded-lg hover:bg-[#f43f5e]/20 transition flex items-center gap-2 text-sm font-medium"><i data-lucide="power" class="w-4 h-4"></i> Stop</button>
        <button class="bg-[#f59e0b]/10 text-[#f59e0b] border border-[#f59e0b]/20 px-4 py-2 rounded-lg hover:bg-[#f59e0b]/20 transition flex items-center gap-2 text-sm font-medium"><i data-lucide="rotate-cw" class="w-4 h-4"></i> Restart</button>
    </div>
    <div class="flex-1 card bg-[#050508] border-[#1e1e2e] flex flex-col font-mono text-sm">
        <div class="flex-1 p-4 overflow-y-auto text-gray-300 space-y-1">
            <div><span class="text-[#00d4ff]">[System]</span> Server marked as starting...</div>
            <div><span class="text-[#10b981]">[Info]</span> Loading libraries, please wait...</div>
            <div><span class="text-[#f59e0b]">[Warn]</span> Failed to find server.properties</div>
        </div>
        <div class="border-t border-[#1e1e2e] p-2 flex">
            <span class="text-[#00d4ff] px-2 py-2">&gt;</span>
            <input type="text" class="flex-1 bg-transparent border-none outline-none text-white px-2 py-2 placeholder-gray-600" placeholder="Type a command...">
        </div>
    </div>
</div>
@endsection