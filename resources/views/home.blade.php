@extends('layouts.app')

@section('content')
    <style>

        .footer{
            position: fixed;
            height: 100px;
            bottom: 0;
            width: 100%;
        }


    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 style="text-align: center">Home</h3></div>

                    <div class="panel-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif

                        @if(Auth::check())
                            <h2>Bonjour, {{Auth::user()->name}}</h2>
                        @else
                            <h2>Bonjour visiteur</h2>
                        @endif<br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection