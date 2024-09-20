<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{


    public function index()
    {
        $activeCity = request('activeCity', false);
        $search = request('search', "");

        // default
        $query = City::orderBy('name', 'asc');
        if ($search !== '') {
            $query->where('name', 'like', "%{$search}%");
        }
        if ($activeCity) {
            $query->whereHas('users', function ($query) {
                // Check if there's at least one active related transword
                $query->where('active', true);
            });
        }


        // retrieve the cities that meet the conditions
        $cities = $query->get();


    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function autocompleteCities(Request $request)
    {

        $term = $request->term;
        $cities = City::select('name')
                 ->where('name', 'like', "%{$term}%")
                 ->get();
        return response()->json($cities);
    }
}
