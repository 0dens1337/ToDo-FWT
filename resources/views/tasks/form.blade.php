@section('content')
    <form action="{{ $action }}" method="POST" class="border w-50 p-4 m-auto">
        @csrf
        @method($method)

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Create task title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title"
                   placeholder="Enter task title" value="{{ isset($task) ? $task->title : old('title') }}">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                      rows="3">{{ isset($task) ? $task->description : old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-primary">Save it!</button>
        </div>
    </form>
@endsection
