<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="#">Categories</a></li>

                @if(count($cats)>0)
                    @foreach($cats as $cat)
                        <li><a href="{{route('cat',$cat->id)}}">{{$cat->name}}</a></li>

                    @endforeach
                @endif
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>