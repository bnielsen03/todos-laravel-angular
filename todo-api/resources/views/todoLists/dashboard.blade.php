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
                    @if($todoLists->count())
                        @foreach($todoLists as $list)
                            <div class="py-4 list" data-id="{{$list->id}}">
                                <span>{{$loop->iteration}}. {{$list->name}}</span>
                                <span class="float-right delete" data-id="{{$list->id}}"><i class="fa-solid fa-trash"></i></span>
                            </div>
                            <hr>
                        @endforeach
                    @else
                        <div class="text-center">
                            You do not have any TODOs. Click the NEW button to get started.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.list').on('click', function() {
            window.location.href = `/todo-lists/${$(this).data('id')}`
        });

        $('.delete').on('click', function(e) {
            e.stopPropagation();
            $.ajax({
                url: `/todo-lists/${$(this).data('id')}`,
                method: 'delete',
                success: function() {window.location.reload();}
            });
        });
    </script>
</x-app-layout>
