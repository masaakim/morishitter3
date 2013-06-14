$(function() {
    var max_id;

    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() == $(document).height()) {
            more();
        }
    });

    function more() {
        $('#loading').show();

        if ($('#tweets > li').length) {
            max_id = $('#tweets').attr('id').replace(/^tweet_/, '');
        }
        console.log(max_id);                

        $.get('index.php', {
            max_id: max_id
        }, function(rs) {
            $('#loading').hide();
            $(rs).appendTo('#tweets > li:last').hide().fadeIn(800);
        });
    }

    more();

});
