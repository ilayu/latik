@if (Session::has('text'))
<form action="{{ url($p->name . '/edit/text/' . Session::get('text')) }}" method="POST" role="form">
  <div class="panel panel-default">
    <input type="hidden" name="_token" id="input_token" class="form-control" value="{{ Session::token() }}">
    <div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
      <textarea name="text" id="inputText" rows="3" autofocus class="form-control">{{$texts->find(Session::get('text'))->text}}</textarea>
    </div>
    <div class="panel-footer">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8"></div>
        <a href="{{ url('text/edit/false') }}" type="button" class="btn btn-info col-xs-3 col-sm-3 col-md-2 col-lg-2">Back</a>
        <button type="submit" class="btn btn-primary col-xs-3 col-sm-3 col-md-2 col-lg-2">Edit</button>
      </div>
    </div>
  </div>
</form>

@else
  @include ('form.' . Session::get('form'))

  @foreach ($texts as $text)

    <div class="panel panel-default">
      <div class="panel-body">
        {!! $text->text !!}
        <span class="edit">
          <a href="{{ url($p->name . "/edit/text/" . $text->id) }}"><img src="{{ URL::to('src/png/software_pencil.png') }}"></a>
          <a href="{{ url($p->name . "/del/text/" . $text->id) }}"><img src="{{ URL::to('src/png/basic_trashcan.png') }}"></a>
        </span>
      </div>
    </div>
  @endforeach
@endif


@section('script')
  <script>
        var editor = CKEDITOR.replace( 'text',{
                 filebrowserBrowseUrl : '/elfinder/ckeditor'
        } );
  </script>
@stop