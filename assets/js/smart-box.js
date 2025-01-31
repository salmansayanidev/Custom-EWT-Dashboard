// filter date picker
$('#picker').daterangepicker();


// faqs js

$(".results-area").hide();
$(".smart-box-area.active").find(".results-area").show();

$(".dropdown-btn").click(function() {
    var $currentFaqBox = $(this).closest(".smart-box-area");

    if (!$currentFaqBox.hasClass("active")) {
        $(".results-area").slideUp();
        $(".smart-box-area").removeClass("active");
        $currentFaqBox.addClass("active");
        $currentFaqBox.find(".results-area").slideDown();
    } else {
        $currentFaqBox.removeClass("active");
        $currentFaqBox.find(".results-area").slideUp();
    }
});