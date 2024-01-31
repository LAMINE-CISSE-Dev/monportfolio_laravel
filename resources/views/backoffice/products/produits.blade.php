@extends('backoffice.fournisseur.app')

@section('title', 'L\'androit des projets')

@section('contents')
  <div class="d-flex align-items-center justify-content-between">
      <h1 class="mb-0">Liste des produits </h1>
      <a href="{{route('projet')}}" class="btn btn-primary">voir le projet ajouté</a>
      <a href="{{route('create')}}" class="btn btn-primary">Ajout Projets</a>
  </div>
  <hr>
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{Session::get('success')}}
    </div>
  @endif
  <table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Projets</th>
            <th>Image</th>
            <th>Lien</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       @if ($product->count() > 0)
          @foreach($product as $rem)
              <tr>
                <td class="align-middle">{{$loop->iteration}}</td>
                <td class="align-middle">{{$rem->projets}}</td>
                <td class="align-middle"><img src="storage/{{$rem->image}}" alt="" width="100" height="50"></td>
                <td class="align-middle">{{$rem->lien}}</td>
                <td class="align-middle">{{$rem->description}}</td>
                <td class="align-middle">
                  <div class="btn btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('products.show', $rem->id)}}" type="button" class="btn btn-secondary">Details</a>
                    <a href="{{route('products.edit', $rem->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{route('products.destroy', $rem->id)}}" method="POST" type='button' class="btn btn-danger">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger m-0">Delete</button>
                    </form>
                  </div>
                </td>
              </tr>
          @endforeach
       
       @else
        <tr>
          <td class="text-center" colspan="5">Product not found</td>
        </tr>   
       @endif
    </tbody>
  </table>
  @endsection