$(function() {
    $(".recent-article-title, .recent-article-author").on("mouseenter",
        function() {
            var id = $(this).attr("url");
            $(this).parent().find("[url=" + id + "]").css("color", "#0000CC");
        },
        function() {
            var control = $(this).parent();
            control.find(".recent-article-title").css("color", "#444444");
            control.find(".recent-article-author").css("color", "#888888");
        }
    );

    // change route
    $(".recent-article-title, .recent-article-author").on("click", function() {
        var jtype = $("#article-view-all").attr("jtype");
        var issue = $("#article-view-all").attr("issue");
        var journal = $("#article-view-all").attr("url");
        window.location.href = issue + "_issues.php?jtype=" + jtype + "&journal=" + journal + "&article=" + $(this).attr("url");
    });

    $("#article-view-all").on("click", function() {
        window.location.href = $(this).attr("issue") + "_issues.php?jtype=" + $(this).attr("jtype") + "&journal=" + $(this).attr("url");
    });
});