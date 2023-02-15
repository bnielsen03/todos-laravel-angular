<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('TODO Lists') }}

            <x-navigation-button class="float-right" :href="'todo-lists/create'">New</x-navigation-button>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    This is where our list of todos goes
                </div>
            </div>
        </div>
    </div>


    <div class="fixed b-4 r-4">

    </div>
</x-app-layout>
