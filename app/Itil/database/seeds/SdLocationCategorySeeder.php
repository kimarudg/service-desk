<?php

namespace App\Itil\database\seeds;

use DB;
use Illuminate\Database\Seeder;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SdLocationCategorySeeder extends Seeder
{
    public function run()
    {
        $names = ['Asia', 'Europe', 'America', 'Australia'];
        $created_at = date('Y-d-m H:m:i');
        $updated_at = date('Y-d-m H:m:i');
        foreach ($names as $name) {
            DB::table('sd_location_categories')
                    ->insert(['name'=> $name,
                'created_at'        => $created_at,
                'updated_at'        => $updated_at,
                ]);
        }
    }
}
