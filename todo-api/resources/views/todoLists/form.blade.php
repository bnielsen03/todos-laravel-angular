<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New TODO list') }}
        </h2>
    </x-slot>

    <div>
        <x-card>
            <form method="post">
                {!! csrf_field() !!}
                <div>
                    <x-label for="email" :value="__('Title')" />

                    <x-input id="title" class="block mt-1 w-full" type="title" name="title" :value="old('title')" required />
                </div>

                <div class="mt-4 text-center">
                    <x-button>Submit</x-button>
                </div>
            </form>
        </x-card>
    </div>


    <div class="fixed b-4 r-4">

    </div>
</x-app-layout>
