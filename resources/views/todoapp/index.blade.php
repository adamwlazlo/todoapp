@extends("layouts.app")

@section("title", "TO-DO List")

@section("content")
    <h1>To-Do List</h1>

    <ul>
        @foreach($tasks as $task)
            <li
                @if($task->completed == 1)
                style = "color: red"
                @endif
            >
                <form method="POST" action="{{route("todoapp.update", $task->id)}}">
                    @csrf
                    @method("PUT")

                    {{$task->id }} - <input type="text" name="content" id="" value="{{ $task->content}}">
                    <button type="submit">Edit</button>
                </form>


                <form method="POST" action="{{route("todoapp.destroy", $task)}}">
                    @csrf
                    @method("DELETE")

                    <button type="submit">Delete</button>
                </form>


                <form method="POST" action="{{route("todoapp.complete", $task->id)}}">
                    @csrf
                    @method("PUT")

                    <button type="submit">Completed</button>
                </form>

            </li>
        @endforeach
    </ul>

    <form method="POST">
        @csrf
        <div>
            <label for="todoitem">Do zrobienia</label><br>
            <input type="text" placeholder="Enter todo item" name="content" id="content">
            <input type="submit">
        </div>
    </form>
@endsection
