@extends('layout.main')
@push('title')
<title>
    Registation Form
</title>
@endpush
@section('main-section')
    <form action="{{url('/')}}/form" method="POST">
        @csrf
    <div class="container">
        <h1 class="text-center">Registation Form</h1>
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
            <label for="">Name</label><br>
            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('name')}}">
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
        <div class="form-group">
            <label for="">Email</label><br>
            <input type="email" name="eml" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <span class="text-danger">
            @error('email')
                {{$message}}
            @enderror
            </span>
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <div class="form-group">
            <label for="">Phone</label><br>
            <input type="tel" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('phone')}}">
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <div class="form-group">
            <label for="">Date of Birth</label><br>
            <input type="date" name="dob" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <!--<small id="helpId" class="text-muted">Help Text</small>-->
        </div>
        <button class="btn btn-primary">
            Submit
        </button>
    </div>
    </form>
@endsection