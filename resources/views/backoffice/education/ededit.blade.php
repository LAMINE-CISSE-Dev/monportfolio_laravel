@extends('backoffice.fournisseur.app')

@section('title', 'Voir les détails de vos projets')

@section('contents')
    <h1>Details produits</h1>
    <hr>
    <form action="{{route('edproducts.edupdate', $education->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Annee</label>
             <input type="text" name="annee" class="form-control" value="{{$education->annee}}">
            </div>
            <div class="col">
                <label for="" class="form-label">Lieu</label>
             <input type="text" name="lieu" class="form-control" value="{{$education->lieu}}">
            </div> 
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Diplome</label>
             <input type="text" name="diplome" class="form-control" value="{{$education->diplome}}">
            </div>
            <div class="col">
                <label for="" class="form-label">Description</label>
             <textarea  name="description" class="form-control" placeholder="Descritption">{{$education->description}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
             <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection