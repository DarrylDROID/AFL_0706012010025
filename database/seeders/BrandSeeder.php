<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brand')->insert([
            'brand_code'=>'TYT',
            'brand_name'=>'Toyota',
            'founder'=>'Yoshihiro Nakata',
            'date_found'=>'12 April 1971',
            'headquarters'=>'Jakarta',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);

        DB::table('brand')->insert([
            'brand_code'=>'HD',
            'brand_name'=>'Honda',
            'founder'=>'Toshiro Mibe',
            'date_found'=>'24 September 1948',
            'headquarters'=>'Minato, Tokyo, Japan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);

        DB::table('brand')->insert([
            'brand_code'=>'MZ',
            'brand_name'=>'Mazda',
            'founder'=>'Jujiro Matsuda',
            'date_found'=>'30 January 1920',
            'headquarters'=>'Fuchu, Hiroshima, Japan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);

        DB::table('brand')->insert([
            'brand_code'=>'DH',
            'brand_name'=>'Daihatsu',
            'founder'=>'Saneyasu Oka',
            'date_found'=>'1 March 1951',
            'headquarters'=>'Ikeda, Osaka, Japan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);

        DB::table('brand')->insert([
            'brand_code'=>'BM',
            'brand_name'=>'BMW',
            'founder'=>'Karl Rapp',
            'date_found'=>'7 March 1916',
            'headquarters'=>'Munchen, Germany',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);

        DB::table('brand')->insert([
            'brand_code'=>'FD',
            'brand_name'=>'Ford',
            'founder'=>'Henry Ford',
            'date_found'=>'16 June 1903',
            'headquarters'=>'Dearborn, Michigan, America',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);
    }
}
