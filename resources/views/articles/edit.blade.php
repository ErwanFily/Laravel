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
                    <div class="panel-heading">Modifier un article</div>

                    <div class="panel-body">
                        <form method="POST" class="form-horizontal" action="{{route('article.update', [$article->id])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Title</label>
                                <div class="col-sm-10">
                                    <input required type="text" value="{{$article->title}}" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="content">Content</label>
                                <div class="col-sm-10">
                                    <textarea name="content" id="" cols="30" rows="10">{{$article->content}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-offset-2 col-xs-10">
                                    <button type="submit" class="btn btn-primary" style="background-color:#23BA99; color:white; border-color: #23BA99">Envoyer</button>
                                </div>
                            </div>
                        </form>

                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <form method="POST" class="form-horizontal" action="{{route('article.destroy', [$article->id])}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-primary" style="background-color:#DC3737; color:white; border-color: #DC3737">Supprimer</button>
                                </form>
                            </div>
                        </div>

                        @include('messages.errors')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection