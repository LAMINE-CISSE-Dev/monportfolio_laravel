@extends('backoffice.fournisseur.app')

@section('title', 'Voir les détails de vos projets')

@section('contents')
    <h1>Details produits</h1>
    <hr>
    <form action="{{route('sproducts.supdate', $skills->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Skills</label>
             <input type="text" name="skills" class="form-control" value="{{$skills->skills}}">
            </div>
            <div class="col">
                <label for="" class="form-label">Skills2</label>
             <input type="text" name="skills2" class="form-control" value="{{$skills->skills2}}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
             <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection