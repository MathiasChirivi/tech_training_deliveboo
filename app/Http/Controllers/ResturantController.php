<?php

namespace App\Http\Controllers;

use App\Models\Resturant;
use App\Http\Requests\StoreResturantRequest;
use App\Http\Requests\UpdateResturantRequest;
use Illuminate\Support\Facades\Auth;


class ResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $restaurants = Resturant::where("user_id", $user_id)->with("dishes")->get();
        return view("admin.resturant.index", compact("restaurants"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.resturant.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreResturantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResturantRequest $request)
    {
        $restaurant = new Restaurant($request->all());
        Auth::user()->restaurant()->save($restaurant);
        $restaurant->typologies()->attach($request->typology_ids);
        return redirect()->route('restaurants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $typologies = Typology::all();
        return view('restaurants.edit', compact('restaurant', 'typologies'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResturantRequest  $request
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResturantRequest $request, Resturant $resturant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resturant $resturant)
    {
        //
    }
}
