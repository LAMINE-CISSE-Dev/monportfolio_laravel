@extends('backoffice.fournisseur.app')

@section('title', 'Voir les détails de vos projets')

@section('contents')
    <h1>Details produits</h1>
    <hr>
    <form action="{{route('eproducts.eupdate', $experience->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Annee</label>
             <input type="text" name="projets" class="form-control" value="{{$experience->annee}}">
            </div>
            <div class="col">
                <label for="" class="form-label">Poste</label>
             <input type="text" name="projets" class="form-control" value="{{$experience->poste}}">
            </div> 
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Entreprise</label>
             <input type="text" name="projets" class="form-control" value="{{$experience->entreprise}}">
            </div>
            <div class="col">
                <label for="" class="form-label">Location</label>
             <input type="text" name="projets" class="form-control" value="{{$experience->location}}">
            </div> 
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Description</label>
             <textarea  name="description" class="form-control" placeholder="Descritption">{{$experience->description}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
             <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection