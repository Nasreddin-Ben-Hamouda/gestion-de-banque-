<!DOCTYPE html>

@section('message')
@if(count($errors)>0)
  @foreach($errors->all() as $message)


  <ul>
    <div class="alert alert-danger">

    <li>{{$message}}</li>

    </div>
  </ul>

  @endforeach
@endif


@endsection
