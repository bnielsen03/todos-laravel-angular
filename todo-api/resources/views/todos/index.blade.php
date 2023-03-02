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
                                <span class="complete" data-id="{{$todo->id}}">
                                    <i class="fa-regular {{$todo->completed_at ? 'text-green-600 fa-circle-check' : 'fa-circle'}}"></i>
                                    {{$todo->title}}
                                </span>

                                @if($todo->image)
                                    <i class="fa-regular fa-image show" data-id="{{$todo->id}}"></i>
                                    <div class="text-center w-full" id="image_{{$todo->id}}" style="display: none">
                                        <img style="display: inline-block" src="{{Storage::disk('s3')->temporaryUrl($todo->image->path, now()->addMinutes(30))}}">
                                    </div>
                                @endif

                                <span class="float-right delete" data-id="{{$todo->id}}"><i class="fa-solid fa-trash"></i></span>
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
        $('.delete').on('click', function() {
            $.ajax({
                url: `/todo-lists/{{$todoList->id}}/todos/${$(this).data('id')}`,
                type: 'DELETE',
                success: function(response) {
                    window.location.reload();
                }
            });
        })

        $('.complete').on('click', function() {
            $.ajax({
                url: `/todo-lists/{{$todoList->id}}/todos/${$(this).data('id')}/toggle`,
                type: 'POST',
                success: function(response) {
                    window.location.reload();
                }
            });
        })

        $('.show').on('click', function() {
            $(`#image_${$(this).data('id')}`).toggle();
        })
    </script>
</x-app-layout>
