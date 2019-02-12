@extends('admin.index')
@section('content')

    <div class="box">
        <div class="box-header with-border">
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a href="{{aurl('category')}}"><span class="label label-primary">Show Categories</span></a>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form action="{{aurl('addcategory')}}" method="post" role="form">
                <legend>Add Category</legend>

                <div class="form-group">
                    @csrf
                    <label for=""></label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    <hr>
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- box-footer -->
    </div>
    <!-- /.box -->

@endsection