@extends('layout.main')
@push('title')
<title>
    login
</title>
@endpush
@section('main-section')
    <form action="{{url('/')}}/form" method="POST">
        @csrf
    <div class="container">
        <h1 class="text-center">Sign In</h1>
        <div class="form-group">
            <label for="">Username</label><br>
            <input type="text" name="un" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('username')}}">
            <span class="text-danger">
                @error('username')
                    {{$message}}
                @enderror
            </span>
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <div class="form-group">
            <label for="">Password</label><br>
            <input type="password" name="pwd" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <span class="text-danger">
            @error('password')
                {{$message}}
            @enderror
            </span>
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <div class="form-group">
            <label for="">Password Confirmation</label><br>
            <input type="password" name="password_confirmation" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <span class="text-danger">
            @error('password_confirmation')
                {{$message}}
            @enderror
            </span>
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <button class="btn btn-primary">
            Submit
        </button>
    </div>
    </form>
@endsection