<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block px-4 py-2 text-sm text-gray-400">
                    <ul>
                        <li><a href="#">Message</a></li>
                        <li><a href="#">Phone Book</a></li>
                        <li><a href="#">Reports</a></li>
                        <li><a href="#">API Setting</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
