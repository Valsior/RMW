@extends('base')

@section('content')
    <h2 class="text-center my-4">Les catégories</h2>
    <div class="container">
        <div class="bg-light">
            <table class="table">
                <thead>
                  <tr class="table-primary">
                    <th scope="col">Nom</th>
                    <th scope="col" colspan="2" class="position-relative">Description
                        <a href="{{route('categories.create')}}" class="btn btn-secondary position-absolute rounded-pill btn-right-top border">Créer une catégorie</a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categorie as $categ)
                    <tr class="table-secondary">
                        <th scope="row">{{$categ->categorie}}</th>
                        <td>{{$categ->description}}</td>
                        <td class="">
                            <a href="{{route('categories.edit', $categ->id)}}" class="btn btn-info btn-block rounded-1 mb-1">Modifier</a>
                            <form action="{{route('categories.destroy', $categ->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-danger btn-block rounded-1" value="Supprimer">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection