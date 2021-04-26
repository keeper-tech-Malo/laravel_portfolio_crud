@extends('layouts.index')

@section('content')
        @include('partial.navBo')
        <h1 class="text-center">Dashboard</h1>
        <div class="container">
                <div class="row mb-2">
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>About</h4>
                                        </div>
                                        <div class="card-body">
                                        <a class="btn btn-primary mx-auto" href={{ route('about.index') }}>Tableau</a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Facts</h4>
                                        </div>
                                        <div class="card-body">
                                                <a class="btn btn-primary mx-auto" href={{ route('fact.index') }}>Tableau</a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-6 pt-5">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Portfolio</h4>
                                        </div>
                                        <div class="card-body">
                                        <a class="btn btn-primary mx-auto" href={{ route('portfolio.index') }}>Tableau</a>
                                        </div>
                                </div>
                        </div>
                </div>
@endsection