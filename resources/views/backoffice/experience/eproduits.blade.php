@extends('backoffice.fournisseur.app')

@section('title', 'L\'androit des projets')

@section('contents')
  <div class="d-flex align-items-center justify-content-between">
      <h1 class="mb-0">Liste des produits </h1>
      <a href="{{route('resume')}}" class="btn btn-primary">voir le projet ajouté</a>
      <a href="{{route('ecreate')}}" class="btn btn-primary">Ajout Projets</a>
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
            <th>Annees</th>
            <th>Poste</th>
            <th>Enterprises</th>
            <th>Locations</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       @if ($experience->count() > 0)
          @foreach($experience as $rem)
              <tr>
                <td class="align-middle">{{$loop->iteration}}</td>
                <td class="align-middle">{{$rem->annee}}</td>
                <td class="align-middle">{{$rem->poste}}</td>
                <td class="align-middle">{{$rem->entreprise}}</td>
                <td class="align-middle">{{$rem->location}}</td>
                <td class="align-middle">{{$rem->description}}</td>
                <td class="align-middle">
                  <div class="btn btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('eproducts.eshow', $rem->id)}}" type="button" class="btn btn-secondary">Details</a>
                    <a href="{{route('eproducts.eedit', $rem->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{route('eproducts.edestroy', $rem->id)}}" method="POST" type='button' class="btn btn-danger">
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