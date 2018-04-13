// $(document).ready(function() {
    // $(".myBtn").click(function () {
    //     var $el = $(this);
    //     var photoID = $el.data('photo-id');
    //
    //     // debugger
    //     console.log($el.data('photo-id'), $el.data('target'));
    //     console.log('myModal' + (photoID + 1));
    //
    // });

    $('.next').click(function(){
        var nextContent = document.getElementById('myModal' + $(this).data('photo-next'));
        var currentContent = document.getElementById('myModal' + ($(this).data('photo-next') - 1));
            console.log('here 2');
            console.log(nextContent);

        // grab current inner content and then replace with next inner content
        currentContent.innerHTML = nextContent.innerHTML;
    });

$('.prev').click(function(){
    var prevContent = document.getElementById('myModal' + $(this).data('photo-prev'));
    var currentContent = document.getElementById('myModal' + ($(this).data('photo-prev') + 1));
        console.log('here 3');
        console.log(prevContent);

    // grab current inner content and then replace with next inner content
    currentContent.innerHTML = prevContent.innerHTML;
});

// });


// var next = document.getElementById('#next');
// var slideIndex = 1;
// showSlides(slideIndex);

/// fihdfkjvnfdkjvnknfv
// console.log(prev);

// prev.onclick = plusSlides(-1);
// next.onclick = plusSlides(-1);

// function plusSlides(n) {
//     showSlides(slideIndex += n);
// }
//
// function showSlides(n) {
//     var i;
//     // var slides = ;
//     if (n > slides.length){
//         slideIndex = 1;
//     }
//     if (n < 1){
//         slideIndex = slides.length;
//     }
//     slides[slideIndex-1].style.display = "block";
// }

