<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDolgozoRequest;
use App\Http\Resources\DolgozoResource;
use App\Models\Dolgozo;
use Illuminate\Http\Request;

class DolgozoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Dolgozo::all();

        return DolgozoResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDolgozoRequest $request)
    {
        $data = $request->validated();

        $ujDolgozo = Dolgozo::create($data);

        return new DolgozoResource($ujDolgozo);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dolgozo = Dolgozo::findOrFail($id);

        return new DolgozoResource($dolgozo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
