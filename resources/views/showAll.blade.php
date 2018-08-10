<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@foreach($places as $place)
    <ul>
        <a href="{{ route('show', ['id' => $place->id]) }}">
            <li>{{$place->name}}</li>
        </a>
        @foreach($types as $type)
            @if($place->type === $type->id)
                {{ $type->name }}
            @endif
        @endforeach

        @foreach($imgs as $img)
            @if($place->id == $img->place_id)
                <li><img width="100px" height="100px" src="storage/images/{{$img->name}}"></li>
                @break
            @endif
        @endforeach

    </ul>
@endforeach

</body>
</html>