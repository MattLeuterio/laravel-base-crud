@extends('layouts.main')

@section('main-content')

<main class="main-content">
    <div class="container create-student">
        <div class="row">
            <h1>Add New Teacher</h1>
        </div>
        <div class="row">
            @if ($errors->any())
            <div class="alert alert-danger">
            
              <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
                @endforeach
              </ul>
            
            </div>
          @endif
        </div>
        <div class="row">
        <form action="{{ route('teachers.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="form-group">
                  <input type="text" 
                         class="form-control" 
                         name="name"
                         placeholder="Name"
                         value="{{ old('name')}}">
                </div>
                <div class="form-group">
                    <input type="number"
                    min="18"
                    class="form-control" 
                    name="age"
                    placeholder="Age"
                    value="{{ old('age')}}">
                </div>
                <div class="form-group radio-input">
                    <div class="radio-input--ctn">

                        <input type="radio" 
                             id="male"
                             class="form-control" 
                             name="gender"
                             checked="checked"
                             value="m">
                        <label for="male">Male</label>

                    </div>

                    <div class="radio-input--ctn">
                        
                        <input type="radio" 
                             id="female"
                             class="form-control" 
                             name="gender"
                             value="f">
                        <label for="female">Female</label>

                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Add">
              </form>
        </div>
    </div>
</main>

@endsection