@extends('backoffice.fournisseur.app')

@section('title', 'Voir les détails de vos projets')

@section('contents')
    <h1>Details produits</h1>
    <hr>
    <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Projets</label>
             <input type="text" name="projets" class="form-control" value="{{$product->projets}}">
            </div>
            <div class="col">
                <label for="" class="form-label">Image</label>
             <input type="file" name="image" class="form-control" value="{{$product->image}}">
             {{-- <input type="text" name="image" class="form-control" value="{{"storage/{{$product->image"}}" alt="" width="100" height="50">}}"> --}}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Lien</label>
                <input type="text" name="lien" id="lien" class="form-control" value="{{$product->lien}}">
            </div>
            <div class="col">
                <label for="" class="form-label">Description</label>
             <textarea  name="description" class="form-control" placeholder="Descritption">{{$product->description}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
             <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection