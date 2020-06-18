@extends('layouts.main')

@section('main-content')

<main class="main-content">
    <div class="container create-student">
        <div class="row">
            <h1>Add New Student</h1>
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
        <form action="{{ route('students.store') }}" method="POST">
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
                  <input type="text" 
                         class="form-control" 
                         name="class"
                         placeholder="Class"
                         value="{{ old('class')}}">
                </div>
                <div class="form-group">
                  <input type="text" 
                         class="form-control" 
                         name="languages"
                         placeholder="Languages"
                         value="{{ old('languages')}}">
                </div>
                <input type="submit" class="btn btn-primary" value="Add">
              </form>
        </div>
    </div>
</main>

@endsection