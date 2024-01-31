@extends('backoffice.fournisseur.app')

@section('title', 'Ajoutez vos projets')

@section('contents')
    <h1>Add product</h1>
    <hr>
    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
             <input type="text" name="projets" class="form-control" placeholder="title">
            </div>
            <div class="col">
                <input type="file" name="image" id="image" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="lien" id="lien" class="form-control" placeholder="Lien du Site">
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