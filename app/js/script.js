function show() {
    $.ajax({
        url: "chat_view.php",
        cashe: false,
        success: function (html) {
            $("#chat").html(html);
        }
    });
}