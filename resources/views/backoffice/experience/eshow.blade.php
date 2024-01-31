@extends('backoffice.fournisseur.app')

@section('title', 'Show Produit')

@section('contents')
    <h1>Details produits</h1>
    <hr>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Annee</label>
             <input type="text" name="title" class="form-control" value="{{$experience->annee}}" placeholder="annee" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Poste</label>
             <input type="text" name="price" class="form-control" value="{{$experience->poste}}" placeholder="poste" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Entreprise</label>
             <input type="text" name="entreprise" class="form-control" value="{{$experience->entreprise}}" placeholder="entreprise" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Location</label>
             <input type="text" name="price" class="form-control" value="{{$experience->location}}" placeholder="location" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Description</label>
             <textarea  name="description" class="form-control" placeholder="Descritption" readonly>{{$experience->description}}</textarea>
            </div>
            <div class="col">
                <label for="" class="form-label">Created At</label>
             <input type="text" name="created_at" class="form-control" value="{{$product->created_at}}" placeholder="Created At" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="" class="form-label">Updated At</label>
             <input type="text"  name="updated_at" class="form-control" value="{{$product->updated_at}}" placeholder="Updated At" readonly>
            </div>
        </div>
@endsection