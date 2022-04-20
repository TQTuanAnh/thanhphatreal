function snackbarShow(message, timeshow) {
    if (!message) return;
    if (!timeshow || isNaN(timeshow)) timeshow = 3000;

    $('#snackbar').html(message).addClass("show-message");
    setTimeout(function() {
        $('#snackbar').removeClass("show-message");
    }, timeshow);
}
