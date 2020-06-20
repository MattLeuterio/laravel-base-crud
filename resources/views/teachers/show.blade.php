@extends('layouts.main')

@section('main-content')
<div class="main-content">
    <div class="container">
        <div class="row">
            <h1>{{ $teacher->name }}</h1>
        </div>
        <div class="row">
            <ul class="list-group">
                <li class="list-group-item">
                    ID: {{ $teacher->id }}
                </li>
                <li class="list-group-item">
                    Gender: {{ ($teacher->gender == 'm') ?  'Male' : 'Female'}}
                </li>
                <li class="list-group-item">
                    Age: {{ $teacher->age }}
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection