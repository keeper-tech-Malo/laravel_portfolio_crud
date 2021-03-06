@extends('layouts.index')

@section('content')
    @include('partial.navBo')
    <section id="portfolio">
        <h3 class="text-center mb-3">Portfolio</h3>
        <div class="container">
            <a href={{route('admin.index')}}>Back Dashboard</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Filtre</th>
                        <th scope="col">Lien de l'image</th>
                        <th scope="col">Editer/Show/Supprime/telecharger</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolio as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->titre}}</td>
                            <td>{{$item->filter}}</td>
                            <td>{{$item->lien}}</td>
                            <td>
                                <a href={{route('portfolio.edit', $item->id)}} class="btn btn-primary mb-1">editer</a>
                                <a href={{route('portfolio.show', $item->id)}} class="btn btn-success mb-1">show</a>
                                <a href="{{ route('portfolio.download', $item->id) }}" class="btn btn-warning">Télécharger</a>
                                <form action={{route('portfolio.destroy', $item->id)}} method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mb-1">supprimer</button>
                                </form>
                            </td>
                        </tr>                                                
                    @endforeach
                </tbody>
            </table>
            <a href={{route('portfolio.create')}} class="btn btn-primary">Ajouter un nouveau projet</a>
        </div>
    </section>
@endsection