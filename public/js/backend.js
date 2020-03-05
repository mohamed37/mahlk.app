$(document).ready(function() {

    $('.show-pass').hover(function() {

        $(this).removeClass('fa-eye-slash');

        $(this).addClass('fa-eye');

        $('#password').attr('type', 'text');

    }, function() {

        $(this).removeClass('fa-eye');

        $(this).addClass('fa-eye-slash');

        $('#password').attr('type', 'password');

    });

    $('.fead').click(function() {


        $('.feadback form').css({ "right": "-5px", "transition": "all ease-in-out .5s" });
        $(this).css({ "right": "57%", "transition": "all ease-in-out .5s" });

        if ($(window).width() < 990) {
            $('.feadback form').css({ "right": "-151px", "transition": "all ease-in-out .5s" });
            $(this).css({ "right": "33%", "transition": "all ease-in-out .5s" });

        }

    });

    $('.asks').click(function() {
        $('.ask form').css({ "right": "-5px", "transition": "all ease-in-out .5s" });
        $(this).css({ "right": "60%", "transition": "all ease-in-out .5s" });

        if ($(window).width() < 990) {
            $('.ask form').css({ "right": "-151px", "transition": "all ease-in-out .5s" });
            $(this).css({ "right": "37%", "transition": "all ease-in-out .5s" });

        }

    });


    /* post comments */

    $('.linkcomment .comments').click(function() {

        $('.comment').css({ "display": "" });

    });
    /* end post comments */

    $('.message a').click(function() {
        $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
    });

});