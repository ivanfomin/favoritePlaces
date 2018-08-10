<h2>{{ $place->name }}</h2>
<br>
<h3>{{ $type }}</h3>

<form method="POST" action="{{route('imgStore', $place->id)}}" enctype="multipart/form-data">

    <div class="form-group">
        <label for="img">Картинка</label>
        <input type="file" class="form-control" id="img" name="img" placeholder="Изображение">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>

    {{ csrf_field() }}

</form>