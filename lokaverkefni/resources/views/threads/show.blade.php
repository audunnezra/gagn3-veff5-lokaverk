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
        	<div class="comments">
        		<h1>comments</h1>
        		@foreach($thread->comments as $comment)
        			<p>comment id: {{ $comment->id }}</p>
        			<p>{{ $comment->body }}</p>
        		@endforeach
        	</div>
        </div>
    </div>
</div>
@endsection