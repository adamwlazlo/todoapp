@extends("layouts.app")

@section("title", "TO-DO List")

@section("content")
    <h1>To-Do List</h1>

    <form method="POST">
        @csrf
        <div>
            <label for="todoitem">Do zrobienia</label><br>
            <input type="text" placeholder="Enter todo item" name="content" id="content">
            <input type="submit">
        </div>
    </form>
@endsection
