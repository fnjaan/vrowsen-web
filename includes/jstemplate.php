<script id="rating-template" type="text/x-handlebars-template">
    <li class="list-group-item rounded bg-dark mb-4 " venue-id="{{id}}">
        <div class="row">
            <div class="col-sm-4">
                <img src="./_assets/imgs/no-image.png" height="210"alt="">
            </div>
            <div class="col-sm-8">
                <div class="card bg-dark ct-color-lightbrown">
                    <a class="card-header" href="#">{{name}}</a>
                    <div class="card-body text-light">
                        <p>No. of people: {{capacity}}</p>
                        <p>Allowed events: {{eventtype}}</p>
                        <p>Rating {{rating}}/10</p>
                    </div>
                </div>
            </div>
        </div>
    </li>
</script>