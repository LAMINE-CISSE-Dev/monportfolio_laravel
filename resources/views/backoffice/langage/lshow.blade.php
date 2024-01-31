@extends('backoffice.fournisseur.app')

@section('title', 'Show Produit')

@section('contents')
    <h1>Details produits</h1>
    <hr>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Langage</label>
             <input type="text" name="langage" class="form-control" value="{{$langage->langage}}" placeholder="langage" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Langage2</label>
             <input type="text" name="langage2" class="form-control" value="{{$langage->langage2}}" placeholder="langage" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Created At</label>
             <input type="text" name="created_at" class="form-control" value="{{$langage->created_at}}" placeholder="Created At" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Updated At</label>
             <input type="text"  name="updated_at" class="form-control" value="{{$langage->updated_at}}" placeholder="Updated At" readonly>
            </div>
        </div>
@endsection