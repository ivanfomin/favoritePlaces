<form method="POST" action="{{route('placeStore')}}" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Название</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Название">
    </div>
    <br>
    <div class="form-group">
        <p>Выберите тип</p>
        <label for="type">Тип</label>
        <select name="type" id="type">
            <option selected value="1">Озера</option>
            <option value="2">Реки</option>
            <option value="3">Музеи</option>
            <option value="4">Кафе</option>
            <option value="5">Парки</option>
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="img">Картинка</label>
        <input type="file" class="form-control" id="img" name="img" placeholder="Изображение">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>

    {{ csrf_field() }}

</form>