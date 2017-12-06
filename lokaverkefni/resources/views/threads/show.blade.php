@extends('layouts.app')

@section('content')
<div class="container offset-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<div>
        		<h1>{{ $thread->title }}</h1>
        		<p>thread id: {{ $thread->id }}</p>
        		<p>{{ $thread->body }}</p>
        	</div>
        	<div class="panel-body">
                    <form method="POST" action="/threads/{{$thread->id}}/comment">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <span class="span-body-info">
                                <label>Comment: <span class="span-info">*</span></label>
                            </span>
                            <textarea type="text" name="body" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Publish</button>
                        </div>
                    </form>
                </div>
        	<div class="comments-container">
        		<h1>comments</h1>
                <div class="comments">
            		@foreach($thread->comments as $comment)
            		    <p>comment id: {{ $comment->id }}</p>
            		    <p>{{ $comment->body }}</p>
            		@endforeach
                </div>
        	</div>
        </div>
    </div>
</div>
@endsection