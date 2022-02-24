$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $(".clean").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".clean").removeClass("active");
    }
});