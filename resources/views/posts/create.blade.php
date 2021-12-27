@extends('layout.header')
@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => PostsControllerstore::class , 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title' , 'Title')}}
            {{Form::text('title' , '',['class' => 'form-control' , 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body' , 'Body')}}
            {{Form::textarea('body' , '',['class' => 'form-control' , 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::submit('submit')}}
    {!! Form::close() !!}
@endsection