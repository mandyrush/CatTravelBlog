<div id="myCarousel-{{$key}}" class="carousel slide">

    <!-- The slideshow -->
    <div class="carousel-inner">

        {{--Items--}}
        @foreach($photos as $innerKey => $innerPhoto)

            <div class="carousel-item {{ ($innerKey == $key) ? 'active' : '' }}">
                @foreach($innerPhoto->tags as $tag)
                    <div class="modal-header">
                        <h4 class="modal-title">{{ $tag->name }}</h4>
                    </div>
                @endforeach

                <div class="modal-body">
                    <img class="img-fluid" src="{{Storage::disk('s3')->url($innerPhoto->featured_photo)}}" alt="Responsive image">
                </div>
            </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel-{{$key}}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel-{{$key}}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>