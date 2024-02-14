@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Enseignants</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('students.create')}}" class="btn btn-primary">Ajouter un  étudiant</a>
            </div>

            <table class="table table-striped ">
                <thead>
                    <tr class="font-weight-bold">
                        <td>ID</td>
                        <td></td>
                        <td>Prenom</td>
                        <td>Nom</td>
                        <td>Email</td>
                        <td>Telephone</td>
                        <td>Adresse</td>

                        <td colspan="2">Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->first_name}}</td>
                            <td>{{$student->last_name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->address}}</td>

                            <td>
                                <a href="{{ route('students.edit', $student->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('students.destroy', $student->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-12"> @if(session()->get('success'))
    <div class="alert alert-success"> {{ session()->get('success') }} </div> @endif</div>
    </div>
@endsection
