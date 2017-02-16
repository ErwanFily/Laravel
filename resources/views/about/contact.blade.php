<div class="card">
    <div class="card-block">
        <form method="POST" action="/contact/{{ $article->id }}/contacts">

            {{ csrf_field() }}
            <div class="form-group">
                                            <textarea name="body" placeholder="Votre commentaire ici." class="form-control">

                                            </textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>

        </form>
    </div>
</div>