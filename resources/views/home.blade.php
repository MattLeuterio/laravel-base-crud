@extends('layouts.main')

@section('main-content')

<main class="main-content">
    <div class="students">
        @foreach($students as $student)
        <div class="single-student">
            <h3> {{ $student->name }} </h3>
            <h4> {{ $student->class }} </h4>
            <p> {{ $student->languages }} </p>
        </div>
        @endforeach
    </div>
</main>

@endsection