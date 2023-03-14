<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use App\Models\OptionFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filters = Filter::get();

        return view('dashboard.filters.index',compact('filters'));
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
        return view('dashboard.filters.show', [
            'filter' => $filter
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filter $filter)
    {
        return view('dashboard.filters.edit', [
            'filter' => $filter
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filter $filter)
    {
//        $validate = $request->validate([
//            'nom' => 'required|max:255',
//            'slug,'
//        ]);

        foreach ($request->options as $optionValue) {
            $option = new OptionFilter();
            $option->label = $optionValue;
            $option->value = Str::slug($optionValue);
            $option->filter()->associate($filter);

            $option->save();
        }
        
//        $filter->update($validate);

        return redirect()->route('filters.index')
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
