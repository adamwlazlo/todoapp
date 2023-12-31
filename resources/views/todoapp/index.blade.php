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

                    {{$task->id }} - <input type="text" name="content" value="{{ $task->content}}">
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
                    <input type="hidden" name="completed" value="1">
                    <button type="submit">Completed</button>
                </form>

            </li>
        @endforeach
    </ul>

    <form method="POST">
        @csrf
        <div>
            <label for="todoitem">Do zrobienia</label><br>
            <input type="text" placeholder="Enter todo item" name="content">
            <input type="submit" value="Dodaj">
            @error("content")
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
    </form>
@endsection
