@extends('layouts.main')

@section('main-content')
<div class="main-content">
    <div class="container">
        <div class="row">
            <h1>{{ $student->name }}</h1>
        </div>
        <div class="row">
            <ul class="list-group">
                <li class="list-group-item">
                    ID: {{ $student->id }}
                </li>
                <li class="list-group-item">
                    {{ $student->class }}
                </li>
                <li class="list-group-item">
                    {{ $student->languages }}
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection