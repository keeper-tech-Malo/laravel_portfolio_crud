@extends('layouts.index')

@section('content')
    @include('partial.navBo')
    <section id="fact">
        <h3 class="text-center mb-3">Facts</h3>
        <div class="container">
            <a href={{route('admin.index')}}>Back Dashboard</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Compteur</th>
                        <th scope="col">compteur</th>
                        <th scope="col">compteur</th>
                        <th scope="col">compteur</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facts as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->happy}}</td>
                            <td>{{$item->project}}</td>
                            <td>{{$item->support}}</td>
                            <td>{{$item->work}}</td>
                            <td>
                                <a href={{route('fact.edit', $item->id)}} class="btn btn-primary mb-1">editer</a>
                                <a href={{route('fact.show', $item->id)}} class="btn btn-success mb-1">show</a>
                                <form action={{route('fact.destroy', $item->id)}} method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mb-1">supprimer</button>
                                </form>
                            </td>
                        </tr>                                                
                    @endforeach
                </tbody>
            </table>
            <a href={{route('fact.create')}} class="btn btn-primary">Ajouter un nouveau fact</a>
        </div>
    </section>
@endsection
