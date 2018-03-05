@extends('layouts.app')

@section('title')
  All Entries
@endsection

@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Posts List:</div>

                  <div class="panel-body">
                      @if (session('message'))
                          <div class="alert alert-success">
                              {{ session('message') }}
                          </div>
                      @endif



  @foreach ($posts as $post)
    <table border="1" cellpadding="5px">
      <tr>
        <th bgcolor="#9494b8">
          ID
        </th>

        <th bgcolor="#9494b8">
          Content
        </th>
      </tr>
      <tr>
        <td width="100px" align="center">
          <a href="{{ url('posts/' . $post->id) }}">
              Entry ID: {{ $post->id }}
          </a>
        </td>

        <td width="400px" align="justify">
            {{ $post->content }}
        </td>
      </tr>
    </table>
    <br>

  @endforeach

  {{ $posts->links() }}
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
