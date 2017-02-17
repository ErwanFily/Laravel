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
                    <div class="panel-heading"><h3 style="text-align: center">Mes articles</h3></div>

                    <div class="panel-body">


                        @forelse(Auth::user()->articles as $article)
                            <h2>{{$article->title}}</h2>
                            <p>{{$article->content}}</p>
                        @empty
                            Rien
                        @endforelse
                        <hr>
                            <a href="{{route('article.create', [$article->id])}}" style="color:#23BA99;">Créer un article</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
