@extends('backoffice.fournisseur.app')

@section('title', 'Show Produit')

@section('contents')
    <h1>Details produits</h1>
    <hr>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Skills</label>
             <input type="text" name="skills" class="form-control" value="{{$skills->skills}}" placeholder="title" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Skills2</label>
             <input type="text" name="skills" class="form-control" value="{{$skills->skills2}}" placeholder="title" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Created At</label>
             <input type="text" name="created_at" class="form-control" value="{{$skills->created_at}}" placeholder="Created At" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Updated At</label>
             <input type="text"  name="updated_at" class="form-control" value="{{$product->updated_at}}" placeholder="Updated At" readonly>
            </div>
        </div>
@endsection