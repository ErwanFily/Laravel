@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Créer un article</div>

                    <div class="panel-body">
                        <form method="POST" action="{{route('article.store')}}">
                            {{csrf_field()}}
                            <strong> Titre de l'article  </strong>
                            <br>
                            <input required type="text" name="title">
                            <br>
                            <br>
                            <textarea name="content" id="" cols="30" rows="10"></textarea>
                          <hr>
                            <input type="file" name="image">
                            <hr>
                            <input type="submit" value="Envoyer">

                        @include('messages.errors')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
