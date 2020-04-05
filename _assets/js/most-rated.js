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
    $('.remove-list-style li').addClass('btn btn-outline-secondary px-3 mx-1 text-dark');
    var html = '<ul class="list-group text-light">';
    $.each(data, function(index, item){
        html += `<li class="list-group-item rounded bg-dark mb-4 " venue-id="`+ item.id +`">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="./_assets/imgs/no-image.png" height="210"alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="card bg-dark ct-color-lightbrown">
                                <a class="card-header" href="#">`+item.name+`</a>
                                <div class="card-body text-light">
                                    <p>No. of people:`+item.capacity+`</p>
                                    <p>Allowed events:`+item.eventtype+`</p>
                                    <p>Rating `+item.rating+`/10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>`;
    });
    html += '</ul>';
    return html;
}
