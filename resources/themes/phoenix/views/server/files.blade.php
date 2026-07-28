@extends('layouts.server')
@section('title', 'File Manager')
@section('content')
<div class="flex flex-col h-full gap-4">
    <div class="flex justify-between items-center bg-[#12121a] p-4 rounded-lg border border-[#1e1e2e]">
        <div class="flex items-center gap-2 text-sm text-gray-300">
            <a href="#" class="hover:text-[#00d4ff]"><i data-lucide="home" class="w-4 h-4"></i></a>
            <span>/</span>
            <a href="#" class="hover:text-[#00d4ff]">plugins</a>
        </div>
        <div class="flex gap-2">
            <button class="bg-[#1e1e2e] hover:bg-[#2a2a3c] text-white px-4 py-2 rounded-lg transition text-sm">New File</button>
            <button class="bg-[#00d4ff] hover:bg-[#00d4ff]/90 text-black px-4 py-2 rounded-lg transition text-sm font-medium">Upload</button>
        </div>
    </div>
    <div class="card overflow-hidden flex-1 border border-[#1e1e2e]">
        <table class="w-full text-left text-sm">
            <thead class="bg-[#1e1e2e] text-gray-400 uppercase text-xs border-b border-[#2a2a3c]">
                <tr>
                    <th class="px-4 py-3 w-8"><input type="checkbox" class="rounded bg-[#0a0a0f] border-[#2a2a3c] text-[#00d4ff] focus:ring-[#00d4ff]"></th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3 w-32">Size</th>
                    <th class="px-4 py-3 w-48">Last Modified</th>
                    <th class="px-4 py-3 w-16"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#1e1e2e]">
                <tr class="hover:bg-[#1e1e2e]/50 transition group cursor-pointer">
                    <td class="px-4 py-3"><input type="checkbox" class="rounded bg-[#0a0a0f] border-[#2a2a3c] text-[#00d4ff] focus:ring-[#00d4ff]"></td>
                    <td class="px-4 py-3 flex items-center gap-3"><i data-lucide="file-json" class="w-5 h-5 text-gray-400"></i> config.yml</td>
                    <td class="px-4 py-3 text-gray-400">12 KB</td>
                    <td class="px-4 py-3 text-gray-400">2 hours ago</td>
                    <td class="px-4 py-3 text-right">
                        <button class="text-gray-400 hover:text-white opacity-0 group-hover:opacity-100 transition"><i data-lucide="more-vertical" class="w-4 h-4"></i></button>
                    </td>
                </tr>
                <tr class="hover:bg-[#1e1e2e]/50 transition group cursor-pointer">
                    <td class="px-4 py-3"><input type="checkbox" class="rounded bg-[#0a0a0f] border-[#2a2a3c] text-[#00d4ff] focus:ring-[#00d4ff]"></td>
                    <td class="px-4 py-3 flex items-center gap-3"><i data-lucide="folder" class="w-5 h-5 text-[#00d4ff]"></i> Essentials</td>
                    <td class="px-4 py-3 text-gray-400">--</td>
                    <td class="px-4 py-3 text-gray-400">1 day ago</td>
                    <td class="px-4 py-3 text-right">
                        <button class="text-gray-400 hover:text-white opacity-0 group-hover:opacity-100 transition"><i data-lucide="more-vertical" class="w-4 h-4"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection