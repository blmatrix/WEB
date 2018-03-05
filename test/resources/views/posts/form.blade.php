{{-- @csrf() --}}
{{ csrf_field() }}

<div class="row">
    <div>
        <label for="title">Name</label>
        <br>
        <input name="title" type="text" value="{{ old('title', @$post->title) }}">
    </div><br>

    <div>
        <label for="content">Description</label>
        <br>
        <textarea name="content" rows="8" cols="80" placeholder="Enter your text">{{ old('content', @$post->content) }}</textarea>
    </div>

    <div>
        <label for="author">Author</label><br>
        <input name="author" type="text" value="{{ old('author', @$post->author) }}">
    </div><br>

    <div>
        <input name="draft" type="hidden" value="0">
        <input name="draft" type="checkbox" value="1" @if(old('draft', @$post->draft) == false) checked @endif>
        <label for="draft">Draft</label>
    </div>

    <div>
        <input type="submit">
    </div>
</div>

<hr>
@if($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
    @endforeach
  </div>
@endif
