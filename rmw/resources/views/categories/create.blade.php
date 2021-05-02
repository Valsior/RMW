@extends('base')

@section('content')
    <h2 class="text-center my-4">Création d'une catégorie</h2>
    <div class="container">
        <div class="bg-secondary rounded-2 shadow">
            <form class="form-responsive w-75 mx-auto p-3" action="{{ route('categories.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="categorie" class="form-text text-white font-weight-bold form-label">Nom de la catégorie</label>
                    <input type="text" name="categorie" class="form-control rounded-1" required>
                </div>
                <div class="form-group">
                    <label for="description" class="form-text text-white font-weight-bold form-label">Description de la catégorie</label>
                    <textarea name="description" class="form-control rounded-1" id="" rows="5"></textarea>
                </div>
                <div class="w-100 mx-auto my-3 btn-group">
                    <input type="submit" class="btn btn-primary mx-1" value="Enregistrer">
                    <a href="{{ route('categories.index') }}" class="btn btn-light mx-1">Retour</a>
                </div>
            </form>
        </div>
    </div>
@endsection