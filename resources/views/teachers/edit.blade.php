@extends('layouts.main')

@section('main-content')

<main class="main-content">
    <div class="container create-student">
        <div class="row">
            <h1>Edit {{ $teacher->name }}</h1>
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
        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group">
                  <input type="text" 
                         class="form-control" 
                         name="name"
                         placeholder="Name"
                         value="{{ old('name', $teacher->name)}}">
                </div>
                <div class="form-group">
                    <input type="number" 
                    min='18'
                    class="form-control" 
                    name="age"
                    placeholder="Age"
                    value="{{ old('age', $teacher->age)}}">
                </div>
                <div class="form-group radio-input">
                    
                    <div class="radio-input--ctn">

                        <input type="radio" 
                             id="male"
                             class="form-control" 
                             name="gender"
                             {{-- if gender are "m" check the radio button --}}
                             {{ ($teacher->gender == 'm' ) ?  'checked="checked"' : '' }}
                             placeholder="Gender"
                             value="m">
                        <label for="male">Male</label>

                    </div>

                    <div class="radio-input--ctn">

                        <input type="radio" 
                             id="female"
                             class="form-control" 
                             name="gender"
                             {{-- if gender are "f" check the radio button --}}
                             {{ ($teacher->gender == 'f' ) ?  'checked="checked"' : '' }}
                             placeholder="Gender"
                             value="f">
                        <label for="female">Female</label>

                    </div>

                </div>
                <input type="submit" class="btn btn-primary" value="Update">
              </form>
        </div>
    </div>
</main>

@endsection