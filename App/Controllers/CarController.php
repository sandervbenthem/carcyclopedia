<?php

namespace App\Controllers;

use App\Models\CarModel;

class CarController
{

    public function index()
    {
        $cars = CarModel::all();
        dd($cars);
    }

    /**
     * Store a car record into the database
     */
    public function store()
    {
        
    }

    /**
     * Updates a car record into the database
     */
    public function update()
    {
        
    }

    /**
     * Archive a car record into the database
     */
    public function destroy(int $id)
    {

    }

}