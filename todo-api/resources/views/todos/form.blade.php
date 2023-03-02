<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New TODO') }}
        </h2>
    </x-slot>

    <div>
        <x-card>
            <form method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div>
                    <x-label for="title" :value="__('Title')" />

                    <x-input id="title" class="block mt-1 w-full" type="title" name="title" :value="old('title')" required />
                </div>

                <div class="py-4">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image">
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
