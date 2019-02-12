@extends('admin.index')
@section('content')

    <div class="box">
        <div class="box-header with-border">
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="label label-primary">Label</span>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form action="{{url('admin/addproduct')}}" method="post" role="form" enctype="multipart/form-data">
                <legend>Add Product</legend>

                <div class="form-group">
                    @csrf
                    <label for=""></label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    <hr>
                    <textarea class="form-control" name="info" placeholder="Enter Info" ></textarea>
                    <hr>
                    <input type="text" class="form-control" name="price" placeholder="Enter Price">
                    <hr>
                    <select class="form-control" name="cat">
                        @if($cats->count() > 0)
                            @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        @endif
                    </select>
                    <hr>
                    <input type="file" class="form-control" name="images[]" multiple>
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