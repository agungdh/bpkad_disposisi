<?php

namespace App\Http\Controllers;

use App\Http\Requests\Eselon\StoreUpdateRequest;
use App\Models\Eselon;
use Illuminate\Http\Request;

class EselonController extends Controller
{
    public function index(Request $request)
    {
        $bidangs = Eselon::paginate($request->per_page);

        return $bidangs;
    }

    public function store(StoreUpdateRequest $request): Eselon
    {
        $eselon = new Eselon();

        $eselon->eselon = $request->eselon;

        $eselon->save();

        return $eselon;
    }

    public function show(Eselon $eselon): Eselon
    {
        return $eselon;
    }

    public function update(StoreUpdateRequest $request, Eselon $eselon): Eselon
    {
        $eselon->eselon = $request->eselon;

        $eselon->save();

        return $eselon;
    }

    public function destroy(Eselon $eselon): void
    {
        $eselon->delete();
    }
}
