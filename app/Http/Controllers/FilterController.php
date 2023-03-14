<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filters = Filter::get();

        return view('filter.index',compact('filters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nom' => 'required|max:255',
            'slug',
        ]);

        Filter::create($validate);


        return redirect()->route('filter.index')
        ->withSuccess(__('Le filtre à été créé correctement'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Filter $filter)
    {
        return view('filter.edit', [
            'filter' => $filter
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filter $filter)
    {
        return view('filter.edit', [
            'filter' => $filter
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filter $filter)
    {
        $validate = $request->validate([
            'nom' => 'required|max:255',
            'slug,'
        ]);
        
        $filter->update($validate);

        return redirect()->route('filter.index')
            ->withSuccess(__("Le filtre a été mis à jour !"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filter $filter)
    {
        $filter->delete();

        return redirect()->route('filter.index')
            ->withSuccess(__('Filtre supprimée.'));
    }
}
