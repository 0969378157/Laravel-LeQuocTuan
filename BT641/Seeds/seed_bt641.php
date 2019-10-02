<?php

use Illuminate\Database\Seeder;

class seed_bt641 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Student_bt641')->insert([
        	[
        		'fullName' => 'Le Van A',
        		'age' => '12',
        		'address' => 'Ninh Binh',
        	],
        	[
        		'fullName' => 'Le Van B',
        		'age' => '12',
        		'address' => 'Nam Dinh',
        	],
        	[
        		'fullName' => 'Le Van C',
        		'age' => '22',
        		'address' => 'Hai Phong',
        	],
        	[
        		'fullName' => 'Le Van D',
        		'age' => '12',
        		'address' => 'Nghe An',
        	],
        	[
        		'fullName' => 'Le Van E',
        		'age' => '15',
        		'address' => 'Ninh Binh',
        	],
        	[
        		'fullName' => 'Le Van F',
        		'age' => '102',
        		'address' => 'Ninh Binh',
        	],
        ]);
    }
}
