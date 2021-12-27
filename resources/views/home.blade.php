@extends('layout.main')
@push('title')
<title>
    Home page
</title>
@endpush
@section('main-section')
   <div class="jumbotron text-center">
       <h1>Welcome to laravel</h1>
       <h5>Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</h5>
       <p><a class="btn btn-primary btn-lg" href="/sign_in" role="button">LOGIN</a>&nbsp;&nbsp;<a class="btn btn-success btn-lg" href="/form" role="button">REGISTER</a></p>
   </div>
@endsection