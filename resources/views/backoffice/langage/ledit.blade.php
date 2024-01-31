@extends('backoffice.fournisseur.app')

@section('title', 'Voir les détails de vos projets')

@section('contents')
    <h1>Details produits</h1>
    <hr>
    <form action="{{route('lproducts.lupdate', $langage->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Langage</label>
             <input type="text" name="langage" class="form-control" value="{{$langage->langage}}">
            </div>
            <div class="col">
                <label for="" class="form-label">Langage</label>
             <input type="text" name="langage2" class="form-control" value="{{$langage->langage2}}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
             <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection