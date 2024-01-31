@extends('backoffice.fournisseur.app')

@section('title', 'Ajoutez vos projets')

@section('contents')
    <h1>Add product</h1>
    <hr>
    <form action="{{route('sproducts.sstore')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
             <input type="text" name="skills" class="form-control" placeholder="Skills">
            </div>
            <div class="col">
                <input type="text" name="skills2" class="form-control" placeholder="Skills2">
               </div>
        </div>
        <div class="row">
            <div class="d-grid">
             <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </form>
@endsection