@extends('layouts.main')

@section('main-content')

<main class="main-content">
    <div class="container">
        <div class="row students">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Languages</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->class }}</td>
                        <td>{{ $student->languages }}</td>
                        <td><a class="btn show" href="{{ route('students.show', $student->id) }}">Show</a></td>
                        <td><a class="btn update"href="#">Update</a></td>
                        <td><a class="btn delete"href="#">Delete</a></td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
        <div class="row flex-row-reverse">
            <a class="btn btn-sm show" href="{{ route('students.create') }}">Add Student</a>
        </div>
    </div>
</main>

@endsection