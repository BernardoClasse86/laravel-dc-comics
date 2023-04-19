<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }


    public function create()
    {
        $types = $this->typeList();

        $series = $this->serieList();

        return view('comics.create', compact('types', 'series'));
    }


    public function store(Request $request)
    {
        // dd($request);

        // $validated_data = $request->validate([
        //     'title' => 'required|string|max:255|min:3|',
        //     'description' => 'nullable|string|',
        //     'thumb' => 'required|max:255|url|',
        //     'price' => 'required|numeric|decimal:2|max:999.99|',
        //     'series' => ' required|string|max:150|min:4|',
        //     'sale_date' => 'required|date|',
        //     'type' => [
        //         'required',
        //         Rule::in(['comic book', 'graphic novel'])
        //     ],
        // ]);

        // dd($request->all());

        // $data = $request->all();

        $validated_data = $this->validation($request);

        $newComic = Comic::create($validated_data);

        // $newComic->title = $validated_data['title'];
        // $newComic->description = $validated_data['description'];
        // $newComic->thumb = $validated_data['thumb'];
        // $newComic->price = $validated_data['price'];
        // $newComic->series = $validated_data['series'];
        // $newComic->sale_date = $validated_data['sale_date'];
        // $newComic->type = $validated_data['type'];

        // $newComic->save();

        // return redirect()->route('comics.show', $newComic);

        return to_route('comics.show', $newComic);
    }

    public function edit(Comic $comic)
    {

        $types = $this->typeList();

        $series = $this->serieList();

        return view('comics.edit', compact('comic', 'types', 'series'));
    }

    public function update(Request $request, Comic $comic)
    {
        // dd($request->all());

        // $validated_data = $request->validate([
        //     'title' => 'required|string|max:255|min:3|',
        //     'description' => 'nullable|string|',
        //     'thumb' => 'required|max:255|url|',
        //     'price' => 'required|decimal:2|',
        //     'series' => ' required|string|max:150|min:4|',
        //     'sale_date' => 'required|date|',
        //     'type' => [
        //         'required',
        //         Rule::in(['comic book', 'graphic novel'])
        //     ],
        // ]);

        // $data = $request->all();

        $validated_data = $this->validation($request);

        // $comic->title = $validated_data['title'];
        // $comic->description = $validated_data['description'];
        // $comic->thumb = $validated_data['thumb'];
        // $comic->price = $validated_data['price'];
        // $comic->series = $validated_data['series'];
        // $comic->sale_date = $validated_data['sale_date'];
        // $comic->type = $validated_data['type'];

        // $comic->save();

        $comic->update($validated_data);

        return to_route('comics.show', $comic);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }

    public function validation(Request $request)
    {
        return $request->validate([
            'title' => 'required|string|max:255|min:3|',
            'description' => 'nullable|string|',
            'thumb' => 'required|max:255|url|',
            'price' => 'required|numeric|between:1.00,999.99|decimal:2|',
            'series' => [
                'required',
                Rule::in([
                    'Action Comics',
                    'American Vampire 1976',
                    'Aquaman',
                    'Batgirl',
                    'Batman',
                    'Batman Beyond',
                    'Batman/Superman',
                    'Batman/Superman Annual',
                    'Batman: The Joker War Zone',
                    'Batman: Three Jokers',
                    'Batman: White Knight Presents: Harley Quinn',
                    'Catwoman'
                ])
            ],
            'sale_date' => 'required|date|',
            'type' => [
                'required',
                Rule::in([
                    'Comic Book',
                    'Graphic Novel'
                ])
            ],
        ]);
    }

    public function typeList()
    {
        return [
            'Comic Book' => 'Comic Book',
            'Graphic Novel' => 'Graphic Novel'
        ];
    }

    public function serieList()
    {
        return [
            'Action Comics' => 'Action Comics',
            'American Vampire 1976' => 'American Vampire 1976',
            'Aquaman' => 'Aquaman',
            'Batgirl' => 'Batgirl',
            'Batman' => 'Batman',
            'Batman Beyond' => 'Batman Beyond',
            'Batman/Superman' => 'Batman/Superman',
            'Batman/Superman Annual' => 'Batman/Superman Annual',
            'Batman: The Joker War Zone' => 'Batman: The Joker War Zone',
            'Batman: Three Jokers' => 'Batman: Three Jokers',
            'Batman: White Knight Presents: Harley Quinn' => 'Batman: White Knight Presents: Harley Quinn',
            'Catwoman' => 'Catwoman',
        ];
    }
}
