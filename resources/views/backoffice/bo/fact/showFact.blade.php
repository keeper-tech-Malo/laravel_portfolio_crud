@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.navBo')
    <div class="container">
        <h3 class="text-center">Details</h3>
        <a href={{route('admin.index')}}>Back admin</a>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Show </h3>
            </div>
            <div class="card-body">
                <p><span class="font-weight-light">Compteur : </span>{{$fact->happy}}</p>
                <p><span class="font-weight-light">Compteur : </span>{{$fact->project}}</p>
                <p><span class="font-weight-light">Compteur : </span>{{$fact->support}}</p>
                <p><span class="font-weight-light">Compteur : </span>{{$fact->work}}</p>
            </div>
            <div class="card-footer d-flex">
                <a href={{route('fact.edit', $fact->id)}} class="btn btn-primary mx-1">editer</a>
                <form action={{route('fact.destroy', $fact->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-1">supprimer</button>
                </form>

            </div>
        </div>
    </div>
@endsection
