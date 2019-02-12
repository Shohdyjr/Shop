@if(session('msg'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{session('msg')}}
    </div>
@endif


@if(count($errors)>0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Error</strong>
        @foreach($errors->all() as $error)
            <li>{{$errors}}</li>
        @endforeach
    </div>
@endif