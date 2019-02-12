@extends('admin.index')
@section('content')

    <div class="box">
        <div class="box-header with-border">
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a href="{{aurl('addcategory')}}"><span class="label label-primary">Add Category</span></a>
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
                </tr>
                </thead>
                <tbody>
                @if($cats->count() > 0)
                @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
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