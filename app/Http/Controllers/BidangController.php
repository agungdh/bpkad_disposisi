<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bidang\StoreUpdateRequest;
use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index(Request $request)
    {
        $bidangs = Bidang::paginate($request->per_page);

        return $bidangs;
    }

    public function store(StoreUpdateRequest $request): Bidang
    {
        $bidang = new Bidang();

        $bidang->bidang = $request->bidang;

        $bidang->save();

        return $bidang;
    }

    public function show(Bidang $bidang): Bidang
    {
        return $bidang;
    }

    public function update(StoreUpdateRequest $request, Bidang $bidang): Bidang
    {
        $bidang->bidang = $request->bidang;

        $bidang->save();

        return $bidang;
    }

    public function destroy(Bidang $bidang): void
    {
        $bidang->delete();
    }
}
