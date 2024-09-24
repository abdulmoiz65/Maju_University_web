
$(document).ready(function () {
  $(window).on("scroll", function() {
    if($(window).scrollTop() > 100) {
      // $(".mainnavs").attr("data-aos","fade-down") 
     
      $(".mainnavs").show();
        $(".mainnavs").addClass("headerDown");

    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".mainnavs").removeClass("headerDown");
      // $(".mainnavs").attr("data-aos","") 

      $(".mainnavs").hide();
    }
});
});