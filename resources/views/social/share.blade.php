
<div class="row">

    <div class="col-md-8">

        <h3 class="profile-edit">{{ $image->title }}</h3>

        <h4>By <a href="{{route('profile', $image->user->username)}}">{{ $image->user->username }}</a> </h4>

        <h4>About</h4><p>{{$image->description }}</p>
        <p>Availability: <strong>{{ $image->status }}</strong></p>
    </div>

    <div class="col-md-4">

        <div class="thumbnail">
            <a href="{{ $image->file }}" class="fresco"  data-fresco-group="{{$image->user->username}}">
                <img src="{{ $image->file }}" alt="{{ $image->title }}" class="img-rounded">
            </a>
            <p class="text-right">{{$image->created_at->diffForHumans()}}</p>
            <p class="text-left text-left-margin">{{$image->updated_at->diffForHumans()}}</p>
        </div>


        @include('social.share')

    </div>
</div>
@stop