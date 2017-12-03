@extends('layouts.app')

@section('content')
<div class="container offset-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a Thread</div>

                <div class="panel-body">
                    <form method='POST' action='/threads'>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <span class="span-info span-title-info">
                                <label>Title: <span class="span-info">*</span></label>
                            </span>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <span class="span-body-info">
                                <label>Body: <span class="span-info">*</span></label>
                            </span>
                            <textarea type="text" name="body" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Publish</button>
                        </div>
                    </form>
                </div>
                
                <ul>
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection