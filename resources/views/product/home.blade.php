@extends('product.index')
@section('content')


    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        @if(count($cats)>0)
                            @foreach($cats as $cat)
                                <li><a href="{{route('cat',$cat->id)}}">{{$cat->name}}</a></li>

                            @endforeach
                        @endif
                        <li class="active"></li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->

                <div class="col-md-5 col-md-push-2">


                            <div id="product-main-img">

                                @if($images->count()>0)
                                    @foreach($images as $image)

                                <div class="product-preview">



                                    <img src="{{url('images/' . $image->image)}}" alt="">


                                </div>
                                    @endforeach
                                @endif

                            </div>




                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->

                <div class="col-md-2  col-md-pull-5">

                    <div id="product-imgs">

                        @if($images->count()>0)
                            @foreach($images as $image)

                        <div class="product-preview">
                            <img src="{{url('images/' . $image->image)}}" alt="">
                        </div>

                            @endforeach
                        @endif

                    </div>

                </div>

                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">{{$product->name}}</h2>

                        <div>
                            <h3 class="product-price">{{$product -> price . '$'}}</h3>
                        </div>
                        <p>{{$product -> info}}</p>





                    </div>
                </div>
                <!-- /Product details -->


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
    @include('product.comments')
    <!-- Section -->
    <div class="section">
        <!-- container -->
        <div class="container">

        </div>
        <!-- /container -->
    </div>



@endsection