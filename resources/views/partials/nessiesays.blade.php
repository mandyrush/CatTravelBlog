<div class="masonry-panel flip-med flip">
    <div
        class="masonry-panel_content flip-content"
        id="{{$key}}"
        onclick="flipCard({{$key}})"
    >
        <div class="flip-panel flip-panel-front">
            <p>Nessie Say...</p>
        </div>
        <div class="flip-panel flip-panel-back nessie-quote">
            <q>{{ $nessieQuote[$key]['quote'] }}</q>
        </div>
    </div>
</div>

<script>
    function flipCard(key) {
        var card = document.getElementById(key);

        if(window.innerWidth <= 1024) {
            card.style.transform = 'rotateY(180deg)';

            setTimeout(function(){
                card.style.transform = 'rotateY(360deg)';
            }, 3000)
        }
    }
</script>