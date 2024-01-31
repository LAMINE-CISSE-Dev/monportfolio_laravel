@extends('backoffice.fournisseur.app')

@section('title', 'Ajoutez vos projets')

@section('contents')
    <h1>Add product</h1>
    <hr>
    <form action="{{route('lproducts.lstore')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
             <input type="text" name="langage" class="form-control" placeholder="Langage">
            </div>
            <div class="col">
                <input type="text" name="langage2" class="form-control" placeholder="Langage2">
               </div>
        </div>
        <div class="row">
            <div class="d-grid">
             <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </form>
@endsection