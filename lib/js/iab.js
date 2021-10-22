$(document).ready(function() {
    $(".eb_year").click(function() {
        $.ajax({
            type: "POST",
            url: "/components/iab_modal.php",
            cache: false,
            data: { year: $(this).attr("year"), journal_type: $(this).attr("journal_type") }
        }).done(function(data) {
            var html = "<div id='page-blocker' class='blocker'></div>";
            $("body").append(html);

            html = "<div id='page-frame' class='modal-bg'><div id='page-content' class='modal'></div></div>";
            $("body").append(html);

            html = data;
            $("#page-content").append(html);

            // $('body,html').animate({
            //     scrollTop: 0
            // }, 500);
        });
    });

    $(".close_modal").on("click", function() {
        $("#page-blocker").remove();
        $("#page-frame").remove();
    });

    $('body').click(function (event) {
        if(!$(event.target).closest('#page-blocker').length && !$(event.target).is('#page-blocker')) {
            $("#page-blocker").remove();
            $("#page-frame").remove();
        }     
    });
});