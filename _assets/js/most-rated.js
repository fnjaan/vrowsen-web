$(document).ready(function(){
    $('#page').pagination({
        dataSource: function(done) {
            $.ajax({
                type: 'GET',
                url: './data/venue/ratedlist.php',
                success: function(response) {
                    response = JSON.parse(response);
                    done(response);
                }
            });
         },
        ulClassName:'remove-list-style',
        prevText: '<i class="fas fa-chevron-left"></i>',
        nextText: '<i class="fas fa-chevron-right"></i>',
        pageSize: 2,
        showPageNumbers: false,
        showNavigator: false,
        callback: function(data, pagination) {
            var html = template(data);
            $('#data').html(html);
        }
    });
});

function template(data) {
    let source = $('#rating-template').html();
    let template = Handlebars.compile(source);
    $('.remove-list-style li').addClass('btn btn-outline-secondary px-3 mx-1 text-dark');
    var html = '<ul class="list-group text-light">';
    $.each(data, function(index, item){
        html += template(item);
    });
    html += '</ul>';
    return html;
}
