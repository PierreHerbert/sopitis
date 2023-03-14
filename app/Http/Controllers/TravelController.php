<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Image;
use App\Models\OptionFilter;
use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $options_filtres = OptionFilter::get();
        $collections = Collection::get();

        return view('travels.create')
            ->with('optionsfiltres' , $options_filtres)
            ->with('collections',$collections);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        


        $imageTravel = $request->file('images');
        $imageTravel_name = $imageTravel->getClientOriginalName();
        $imageTravel->move('./images',$imageTravel_name); 

        $addImageTravel = new Image();
        $addImageTravel->name = $imageTravel_name.'_'.$request->input('name') ;
        $addImageTravel->description = ' ';
        $addImageTravel->alt = 'Image du voyage '.$request->input('name');
        $addImageTravel->file = $imageTravel_name;   
        
        $addImageTravel->save();

        $travel = new Travel(); 
        $travel->fill($request->all()); 
        $travel->image()->associate($addImageTravel);  
        $travel->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Travel $travel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        $options_filtres = OptionFilter::get();
        return view('travels.edit', [
            'travel' => $travel
        ],compact('options_filtres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travel $travel)
    {
        $imageTravel = $request->file('images');
        if ($imageTravel != null){
            $imageTravel_name = $imageTravel->getClientOriginalName();
            $imageTravel->move('./images',$imageTravel_name); 

            $addImageTravel = new Image();
            $addImageTravel->name = $imageTravel_name.'_'.$request->input('name') ;
            $addImageTravel->description = ' ';
            $addImageTravel->alt = 'Image du voyage '.$request->input('name');
            $addImageTravel->file = $imageTravel_name;   
            
            $addImageTravel->save(); 
        }
        else{
            $addImageTravel =$travel->id;
        }

        $travel->image()->associate($addImageTravel);  
        $travel->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        //
    }
}
