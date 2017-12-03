@extends('layouts.app')

@section('content')
<div class="container offset-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<div>
        		<h1>{{ $thread->title }}</h1>
        		<p>id: {{ $thread->id }}</p>
        		<p>{{ $thread->body }}</p>
        	</div>
        </div>
    </div>
</div>
@endsection