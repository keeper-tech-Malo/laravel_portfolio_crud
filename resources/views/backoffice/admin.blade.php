@extends('layouts.index')

        @include('partial.navBo')
@section('content')
        <h1 class="text-center">Backoffice</h1>
        <div class="container">
                <div class="row ">
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
                        <div class="col-6 pt-5">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Service</h4>
                                        </div>
                                        <div class="card-body">
                                                <a class="btn btn-primary mx-auto" href={{ route('service.index') }}>Tableau</a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-6 pt-5">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Skills</h4>
                                        </div>
                                        <div class="card-body">
                                        <a class="btn btn-primary mx-auto" href={{ route('skill.index') }}>Tableau</a>
                                        </div>
                                </div>
                        </div>
                </div>
@endsection