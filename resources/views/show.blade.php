<div>
    <p>
        {{$place->name}}
    </p>
    <p>
        {{ $type }}
    </p>
    @foreach($imgs as $img)
        <p>
        <img width="200px" height="200px" src="../storage/images/{{$img->name}}">
    </p>
    @endforeach

</div>