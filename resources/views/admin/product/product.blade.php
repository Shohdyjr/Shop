@extends('admin.index')
@section('content')

    <div class="box">
        <div class="box-header with-border">
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a href="{{aurl('addproduct')}}"><span class="label label-primary">Add product</span></a>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Info</th>
                    <th>Price</th>
                    <th>Image</th>

                </tr>
                </thead>
                <tbody>
                @if($products->count() > 0)
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->info}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->image}}</td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>


        <!-- /.box-body -->
            <div class="box-footer">
            </div>
            <!-- box-footer -->
        </div>
        <!-- /.box -->

@endsection