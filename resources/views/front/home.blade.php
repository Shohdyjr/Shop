@extends('front.index')
@section('content')


    <

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->

                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    <!-- product -->
                                    @if($products ->count() > 0)
                                        @foreach($products as $product)
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{url('images/' . $product->image)}}" alt="">
                                            <div class="product-label">
                                            </div>
                                        </div>

                                        <div class="product-body">


                                            <p class="product-category">{{$product -> category -> name}}</p>
                                            <h3 class="product-name"><a href="{{url('product'.'/'.$product->id)}}">{{$product->name}}</a></h3>
                                            <h4 class="product-price">{{$product->name}} </h4>
                                            <div class="product-btns">
                                                <button href="{{url('product'.'/'.$product->id)}}" class="quick-view"><i class="fa fa-eye"></i><span  class="tooltipp">quick view</span></button>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                                @endif
                                    <!-- /product -->

                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->



@endsection