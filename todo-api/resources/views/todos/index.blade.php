<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($todoList->name . ' TODOs') }}

            <x-navigation-button class="float-right" href="/todo-lists/{{$todoList->id}}/create">New</x-navigation-button>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($todoList->todos->count())
                        @foreach($todoList->todos as $todo)
                            <div class="py-4 list">
                                <span><i class="fa-regular fa-circle-check"></i> {{$todo->title}}</span>
                                <span class="float-right delete"><i class="fa-solid fa-trash"></i></span>
                            </div>
                            <hr>
                        @endforeach
                    @else
                        <div class="text-center">
                            You do not have any todos. Please create one with the NEW button above.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
</x-app-layout>
