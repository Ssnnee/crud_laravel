@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a Student </h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif

            <form method="post" action="{{ route('students.update', $student->id) }}">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="first_name">Prenom:</label>
                    <input type="text" class="form-control" name="first_name" value="{{ $student->first_name }}" />
                </div>


                <div class="form-group">
                    <label for "last_name">Nom :</label>
                    <input type="text" class="form-control" name="last_name" value="{{ $student->last_name }}"/>
                </div>

                <div class="form-group">
                    <label for="address">Adresse:</label>
                    <input type="text" class="form-control" name="address" value="{{ $student->address }}"/>
                </div>

                <div class="form-group">
                    <label for "email">Email :</label>
                    <input type="text" class="form-control" name="email" value="{{ $student->email }}"/>
                </div>

                <div class="form-group">
                    <label for "hone">Telephone :</label>
                    <input type="text" class="form-control" name="phone" value="{{ $student->phone }}"/>
                </div>


                <button type="submit" class="btn btn-primary">Mettre à jour </button>
            </form>
        </div>
    </div>
@endsection
