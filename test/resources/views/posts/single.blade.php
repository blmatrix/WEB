@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Posts List:</div>

                  <div class="panel-body">

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

      <td width="300px" align="justify">
          {{ $post->content }}
      </td>
    </tr>
  </table>

  <hr>

  <form action="{{ url('posts/edit/' . $post->id) }}" method="POST">
    {{ @csrf_field() }}
    {{ @method_field('GET') }}

    <button type="submit">Edit</button>
  </form>

  <form action="{{ url('posts/' . $post->id) }}" method="POST">
    {{ @csrf_field() }}
    {{ @method_field('DELETE') }}

    <button type="submit">Delete</button>
  </form>
</div>
</div>
</div>
</div>
</div>

  </div>

@endsection
