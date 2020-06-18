@extends('layouts.main')

@section('main-content')

<main class="main-content">
    <div class="container create-student">
        <div class="row">
            <h1>Edit {{ $student->name }}</h1>
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
        <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group">
                  <input type="text" 
                         class="form-control" 
                         name="name"
                         placeholder="Name"
                         value="{{ old('name', $student->name)}}">
                </div>
                <div class="form-group">
                  <input type="text" 
                         class="form-control" 
                         name="class"
                         placeholder="Class"
                         value="{{ old('class', $student->class)}}">
                </div>
                <div class="form-group">
                  <input type="text" 
                         class="form-control" 
                         name="languages"
                         placeholder="Languages"
                         value="{{ old('languages', $student->languages)}}">
                </div>
                <input type="submit" class="btn btn-primary" value="Update">
              </form>
        </div>
    </div>
</main>

@endsection