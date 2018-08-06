<div id="myCarousel-{{$key}}" class="carousel">

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
                <div class="flex-center">
                    <div class="modal-body">
                        <img class="img-fluid" src="{{Storage::disk('local')->url( $innerPhoto->featured_photo )}}" alt="Responsive image">
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel-{{$key}}" role="button" data-slide="prev">
        <i class="fa fa-chevron-left carousel-btn"></i>
    </a>
    <a class="carousel-control-next" href="#myCarousel-{{$key}}" role="button" data-slide="next">
        <i class="fa fa-chevron-right carousel-btn"></i>
    </a>
</div>