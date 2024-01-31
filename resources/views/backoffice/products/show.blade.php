@extends('backoffice.fournisseur.app')

@section('title', 'Show Produit')

@section('contents')
    <h1>Details produits</h1>
    <hr>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Title</label>
             <input type="text" name="title" class="form-control" value="{{$product->title}}" placeholder="title" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Price</label>
             <input type="text" name="price" class="form-control" value="{{$product->price}}" placeholder="price" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Product code</label>
             <input type="text" name="product_code" class="form-control" value="{{$product->product_code}}" placeholder="Product Code" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Description</label>
             <textarea  name="description" class="form-control" placeholder="Descritption" readonly>{{$product->description}}</textarea>
            </div>
        </div>
        <div class="row mb-3">
        <div class="col">
            <label for="" class="form-label">Lien</label>
         <input type="text" name="lien" class="form-control" placeholder="lien" readonly>{{$product->lien}}</textarea>
        </div>
    </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Created At</label>
             <input type="text" name="created_at" class="form-control" value="{{$product->created_at}}" placeholder="Created At" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Updated At</label>
             <input type="text"  name="updated_at" class="form-control" value="{{$product->updated_at}}" placeholder="Updated At" readonly>
            </div>
        </div>
@endsection