@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
    <div class="card p-5 group hover:-translate-y-1 transition duration-300 hover:shadow-[0_4px_20px_rgba(0,212,255,0.15)] hover:border-[#00d4ff]/50">
        <div class="flex justify-between items-start mb-4">
            <h3 class="font-semibold text-lg">Minecraft Survival</h3>
            <div class="flex items-center gap-2">
                <span class="relative flex h-3 w-3">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#10b981] opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-3 w-3 bg-[#10b981]"></span>
                </span>
                <span class="text-xs text-[#10b981] font-medium">Online</span>
            </div>
        </div>
        <div class="space-y-3 mb-6">
            <div>
                <div class="flex justify-between text-xs mb-1"><span class="text-gray-400">CPU</span><span>45% / 100%</span></div>
                <div class="w-full bg-[#1e1e2e] rounded-full h-1.5"><div class="bg-[#00d4ff] h-1.5 rounded-full" style="width: 45%"></div></div>
            </div>
            <div>
                <div class="flex justify-between text-xs mb-1"><span class="text-gray-400">RAM</span><span>2.4 GB / 4 GB</span></div>
                <div class="w-full bg-[#1e1e2e] rounded-full h-1.5"><div class="bg-[#00d4ff] h-1.5 rounded-full" style="width: 60%"></div></div>
            </div>
        </div>
        <a href="/server/console" class="block w-full text-center bg-[#1e1e2e] hover:bg-[#2a2a3c] text-white py-2 rounded-lg transition text-sm font-medium">Manage Server</a>
    </div>
</div>
@endsection