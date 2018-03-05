@extends('layouts.app')

@section('title')

@endsection

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Posts List:</div>

                  <div class="panel-body">

    <div class="container">
      <h1>Registration Form:</h1>
      <section>
          <form action="{{ url('posts') }}" method="POST">
              @include('posts.form')
          </form>
      </section>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection
