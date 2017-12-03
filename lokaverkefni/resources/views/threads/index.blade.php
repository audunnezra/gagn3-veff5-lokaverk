@extends('layouts.app')

@section('content')
<div class="container offset-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @foreach ($threads as $thread)
        	<div>
        		<h1><a href="/threads/{{ $thread->id }}">{{ $thread->title }}</a></h1>
        		<p>id: {{ $thread->id }}</p>
        		<p>{{ $thread->body }}</p>
        	</div>
        @endforeach
        </div>
    </div>
</div>
@endsection