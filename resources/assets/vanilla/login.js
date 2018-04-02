$(document).ready(function() {
    $('#fbLogin').click(function(evt) {
        evt.preventDefault();
        swal({
            title: "Login with Facebook",
            text: "You will redirect to Facebook for authentication.",
            icon: "info",
            showConfirmButton: false
        });
        window.location.href = '/login/facebook';
    });
    $('#ggLogin').click(function(evt) {
        evt.preventDefault();
        swal({
            title: "Login with Google",
            text: "You will redirect to Google for authentication.",
            icon: "info",
            showConfirmButton: false
        });
        window.location.href = '/login/google';
    });
});
