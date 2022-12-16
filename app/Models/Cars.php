<?php

namespace App\Models;

class Cars
{
    public static function list()
    {
        return [
            [
                'id' => 1,
                'brand' => 'fiat',
                'price' => 50000,
                'year' => 2015
            ],
            [
                'id' => 2,
                'brand' => 'nissan',
                'price' => 100000,
                'year' => 2020
            ]
        ];
    }

    public static function retrieve($id)
    {
        $cars = self::list();
        foreach ($cars as $car){
            if ($car['id'] === $id){
                return $car;
            }
        }
    }
}
