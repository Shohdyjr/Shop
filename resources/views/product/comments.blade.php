<div class="panel panel-default">
    <hr>
    <div class="panel-heading text-center"></div>
    <div class="panel-body">
        <form action="{{route('comment',$product->id)}}" method="post" role="form">
            @csrf

            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control" name="comment" id="comment" placeholder="Enter ur comment">
            </div>
            <button type="submit" class="btn btn-primary center-block">Comment</button>
        </form>
    </div>
    <hr>


</div>

<!-- Product tab -->
<div class="col-md-12">
    <div id="product-tab">
        <!-- product tab nav -->
        <ul class="tab-nav">
            <li class="active"><a data-toggle="tab" href="#tab1">Comments</a></li>
        </ul>
        <!-- /product tab nav -->

        <!-- product tab content -->
        <div class="tab-content">
            <!-- tab1  -->
            <div id="tab1" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        @foreach($product->comments as $comment)
                            <div class="row">

                                <h3>{{$comment -> user -> name}}</h3> <span>{{$comment->created_at}}</span>
                                <p>{{$comment->comment}}</p>

                                <hr>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>