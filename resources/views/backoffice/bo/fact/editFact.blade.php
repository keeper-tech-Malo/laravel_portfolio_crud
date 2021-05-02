@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.navBo')
    <div class="container">
        <h3 class="text-center">Modifier {{$fact->nom}}</h3>
        <a href={{route('fact.index')}}>Back Facts</a>
        <form action={{route('fact.update', $fact->id)}} method="post" class="w-75 mx-auto">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="count">happy : </label>
                <input type="number" class="form-control  @error('count') is-invalid @enderror" value="{{$fact->happy}}" id="count" name="happy">
                @error('count')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="count">project : </label>
                <input type="number" class="form-control  @error('count') is-invalid @enderror" value="{{$fact->project}}" id="count" name="project">
                @error('count')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="count">support : </label>
                <input type="number" class="form-control  @error('count') is-invalid @enderror" value="{{$fact->support}}" id="count" name="support">
                @error('count')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="count">work : </label>
                <input type="number" class="form-control  @error('count') is-invalid @enderror" value="{{$fact->work}}" id="count" name="work">
                @error('count')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
