@extends('layouts.main')

@section('main-content')

<main class="main-content">
    <div class="container">
        @if(session('deleted'))
            <div class="row deleted alert alert-success">
                {{ session('deleted') }}
            </div>
        @endif

        <div class="row title-and-cta">
            <h1>Students</h1>
            <a class="btn btn-sm show" href="{{ route('students.create') }}">Add Student</a>
        </div>

        <div class="row students mt-4">
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
                        <td><a class="btn update"href="{{ route('students.edit', $student->id) }}">Update</a></td>
                        <td>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn delete" type="submit" value='Delete'>
                            </form>
                        </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection