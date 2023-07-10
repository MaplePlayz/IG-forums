@extends('layouts.base')

@section('content')
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ route('forum_comments.update', [${table_name.lower().rstrip("s")}->{table_name}_id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="forum_threads_id">forum_threads_id</label>
            <input type="text" name="forum_threads_id" value="{ $forum_comment->forum_threads_id }" class="form-control" id="forum_threads_id" placeholder="forum_threads_id">
        </div>
        <div class="form-group">
            <label for="text">text</label>
            <input type="text" name="text" value="{ $forum_comment->text }" class="form-control" id="text" placeholder="text">
        </div>
        <div class="form-group">
            <label for="upvotes">upvotes</label>
            <input type="text" name="upvotes" value="{ $forum_comment->upvotes }" class="form-control" id="upvotes" placeholder="upvotes">
        </div>
        <div class="form-group">
            <label for="created_by_acc_id">created_by_acc_id</label>
            <input type="text" name="created_by_acc_id" value="{ $forum_comment->created_by_acc_id }" class="form-control" id="created_by_acc_id" placeholder="created_by_acc_id">
        </div>
        <div class="form-group">
            <label for="updated_at">updated_at</label>
            <input type="text" name="updated_at" value="{ $forum_comment->updated_at }" class="form-control" id="updated_at" placeholder="updated_at">
        </div>
        <div class="form-group">
            <label for="created_at">created_at</label>
            <input type="text" name="created_at" value="{ $forum_comment->created_at }" class="form-control" id="created_at" placeholder="created_at">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
