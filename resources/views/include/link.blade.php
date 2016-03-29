@if (Session::has('link'))
<form action="{{ url($p->name . '/edit/link/' . Session::get('link')) }}" method="POST" role="form">
  <div class="panel panel-default">
    <input type="hidden" name="_token" id="input_token" class="form-control" value="{{ Session::token() }}">
    <div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
      <input type="text" name="link" id="inputLink" class="form-control" placeholder="Url" autofocus value="{{$links->find(Session::get('link'))->link}}">
    </div>
    <div class="form-group">
    <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" value="{{$links->find(Session::get('link'))->name}}">
    <div class="panel-footer">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8"></div>
        <a href="{{ url('link/edit/false') }}" type="button" class="btn btn-info col-xs-3 col-sm-3 col-md-2 col-lg-2">Back</a>
        <button type="submit" class="btn btn-primary col-xs-3 col-sm-3 col-md-2 col-lg-2">Edit</button>
      </div>
    </div>
  </div>
</form>
@else

<form action="{{ url($p->name . '/add/link') }}" method="POST" role="form">
  <div class="panel panel-default">
    <input type="hidden" name="_token" id="input_token" class="form-control" value="{{ Session::token() }}">
    <div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
      <input type="text" name="link" id="inputLink" class="form-control" placeholder="Url" autofocus>
    </div>
    <div class="form-group">
    <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" value="{{ Request::old('name') }}">
    <div class="panel-footer">
      <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10"></div>
        <button type="submit" class="btn btn-primary col-xs-3 col-sm-3 col-md-2 col-lg-2">Add</button>
      </div>
    </div>
  </div>
</form>

@foreach ($links as $link)
    <div class="thumbnail col-xs-6 col-sm-4 col-md-3 col-lg-3">
      <div class="caption">
        <p>{{ $link->name == "" ? $link->link : $link->name }}</p>
      </div>
      <a href="//{{ $link->link }}"><img src="http://mini.s-shot.ru/?{{ $link->link }}" alt="{{ $link->link }}"></a>
      <span class="edit">
        <a href="{{ url($p->name . "/edit/link/" . $link->id) }}"><img src="{{ URL::to('src/png/software_pencil.png') }}"></a>
        <a href="{{ url($p->name . "/del/link/" . $link->id) }}"><img src="{{ URL::to('src/png/basic_trashcan.png') }}"></a>
      </span>
    </div>
@endforeach

@endif