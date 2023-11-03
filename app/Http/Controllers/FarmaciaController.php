<?php

namespace App\Http\Controllers;

use App\Models\Farmacia;
use Illuminate\Http\Request;

/**
 * Class FarmaciaController
 * @package App\Http\Controllers
 */
class FarmaciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmacias = Farmacia::paginate();

        return view('farmacia.index', compact('farmacias'))
            ->with('i', (request()->input('page', 1) - 1) * $farmacias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farmacia = new Farmacia();
        return view('farmacia.create', compact('farmacia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Farmacia::$rules);

        $farmacia = Farmacia::create($request->all());

        return redirect()->route('farmacias.index')
            ->with('success', 'Farmacia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $farmacia = Farmacia::find($id);

        return view('farmacia.show', compact('farmacia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $farmacia = Farmacia::find($id);

        return view('farmacia.edit', compact('farmacia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Farmacia $farmacia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmacia $farmacia)
    {
        request()->validate(Farmacia::$rules);

        $farmacia->update($request->all());

        return redirect()->route('farmacias.index')
            ->with('success', 'Farmacia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $farmacia = Farmacia::find($id)->delete();

        return redirect()->route('farmacias.index')
            ->with('success', 'Farmacia deleted successfully');
    }
}
