$(document).ready(function() {
    $('#search').on('keyup', function() {
        let query = $(this).val();

        $.ajax({
            url: '/search',
            type: 'GET',
            data: {'search': query},
            success: function(data) {
                $('.container-result-search').html(data);
            }
        });
    });
});