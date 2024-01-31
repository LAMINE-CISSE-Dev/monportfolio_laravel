@extends('backoffice.fournisseur.app')

@section('title', 'Ajoutez vos projets')

@section('contents')
    <h1>Add product</h1>
    <hr>
    <form action="{{route('edproducts.edstore')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
             <input type="text" name="annee" class="form-control" placeholder="Annee">
            </div>
            <div class="col">
                <input type="text" name="lieu" id="lieu" class="form-control" placeholder="Lieu">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
             <input type="text" name="diplome" class="form-control" placeholder="Diplome">
            </div>
            <div class="col">
             <textarea  name="description" class="form-control" placeholder="Descritption"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
             <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </form>
@endsection