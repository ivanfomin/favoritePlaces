<?php

namespace App\Http\Controllers;

use App\Img;
use App\Place;
use App\PlaceToImgs;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function showAll()
    {
        $places = Place::all();
        $types = Type::all();
        $imgs = Img::all();

        return view('showAll', ['places' => $places, 'types' => $types, 'imgs' => $imgs]);
    }

    public function show($id)
    {
        $place = Place::find($id);
        $type = Type::find($place->type);
        $type = $type->name;
        $imgs = Img::where('place_id', $id)->get();
        return view('show', ['place' => $place, 'type' => $type, 'imgs' => $imgs]);

    }

    public function add()
    {
        return view('add-place');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'img' => 'required|unique:imgs|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $fileName = $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('images', $fileName, 'public');

        $place = new Place();
        $place->fill(['name' => $request->name, 'type' => $request->type]);
        $place->save();

        $img = new Img();
        $img->fill(['name' => $fileName, 'place_id' => $place->id]);
        $img->save();

        return redirect('/places');
    }

    public function imgAdd($id)
    {
        $place = Place::find($id);
        $type = Type::find($place->type);
        $type = $type->name;

        return view('add-img',['place' => $place, 'type' => $type]);

    }

    public function storeImg(Request $request)
    {

        $this->validate($request, [
            'img' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $fileName = $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('images', $fileName, 'public');

        $img = new Img();
        $img->fill(['name' => $fileName, 'place_id' => $request->id]);
        $img->save();

        return redirect('/places');
    }
}
