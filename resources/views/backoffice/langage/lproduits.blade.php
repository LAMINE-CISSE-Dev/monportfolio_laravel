@extends('backoffice.fournisseur.app')

@section('title', 'L\'androit des projets')

@section('contents')
  <div class="d-flex align-items-center justify-content-between">
      <h1 class="mb-0">Liste des produits </h1>
      <a href="{{route('resume')}}" class="btn btn-primary">voir le projet ajouté</a>
      <a href="{{route('lcreate')}}" class="btn btn-primary">Ajout Projets</a>
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
            <th>Langages</th>
            <th>Langages2</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       @if ($langage->count() > 0)
          @foreach($langage as $rem)
              <tr>
                <td class="align-middle">{{$loop->iteration}}</td>
                <td class="align-middle">{{$rem->langage}}</td>
                <td class="align-middle">{{$rem->langage2}}</td>
                <td class="align-middle">
                  <div class="btn btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('lproducts.lshow', $rem->id)}}" type="button" class="btn btn-secondary">Details</a>
                    <a href="{{route('lproducts.ledit', $rem->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{route('lproducts.ldestroy', $rem->id)}}" method="POST" type='button' class="btn btn-danger">
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