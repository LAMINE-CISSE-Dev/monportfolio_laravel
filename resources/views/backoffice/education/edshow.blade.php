@extends('backoffice.fournisseur.app')

@section('title', 'Show Produit')

@section('contents')
    <h1>Details produits</h1>
    <hr>
    <div class="row mb-3">
        <div class="col">
            <label for="" class="form-label">Annee</label>
         <input type="text" name="annee" class="form-control" value="{{$education->annee}}" placeholder="annee" readonly>
        </div>
        <div class="col">
            <label for="" class="form-label">Lieu</label>
         <input type="text" name="lieu" class="form-control" value="{{$education->lieu}}" placeholder="lieu" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="" class="form-label">Diplome</label>
         <input type="text" name="diplome" class="form-control" value="{{$education->diplome}}" placeholder="diplome" readonly>
        </div>
        <div class="col">
            <label for="" class="form-label">Description</label>
         <input type="text" name="description" class="form-control" value="{{$education->description}}" placeholder="description" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="" class="form-label">Created At</label>
         <input type="text" name="created_at" class="form-control" value="{{$education->created_at}}" placeholder="Created At" readonly>
        </div>
        <div class="col">
            <label for="" class="form-label">Updated At</label>
         <input type="text"  name="updated_at" class="form-control" value="{{$education->updated_at}}" placeholder="Updated At" readonly>
        </div>
    </div>
@endsection