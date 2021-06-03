<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\Theater;

class TheaterRepository implements ITheaterRepository
{
    public function getAllTheatre()
    {
        return Theater::all();
    }

    public function getTheatre($id)
    {
        return Theater::find($id);
    }
    public function getTheatreByString($query)
    {
        $query = $query['searchbar'];
        return Theater::where("theatre_name", "LIKE", "%{$query}%")->get();;
    }
    public function storeTheatre($id = null, $collection = [])
    {
        Theater::create([
            'city_id' => $collection['city_id'],
            'theatre_name' => $collection['theatre_name'],
            'seats_no' => $collection['total_seats'],
        ]);
    }
    public function storeCity($id = null, $collection = [])
    {
        City::create([
            'city_name' => $collection['city_name'],
        ]);
    }

    public function model()
    {
        return Theater::class;
    }


}
