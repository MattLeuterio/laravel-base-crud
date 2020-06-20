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
            <h1>Teachers</h1>
            <a class="btn btn-sm show" href=" {{ route('teachers.create') }} ">Add Teacher</a>
        </div>
        <div class="row teachers mt-4">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{  ($teacher->gender == 'm') ? 'Male' : 'Female' }}</td>
                        <td>{{ $teacher->age }}</td>
                        <td><a class="btn show" href=" {{ route('teachers.show', $teacher->id) }} ">Show</a></td>
                        <td><a class="btn update" href=" {{ route('teachers.edit', $teacher->id) }}">Update</a></td>
                        <td>
                            <form action=" {{ route('teachers.destroy', $teacher->id) }}" method="POST">
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