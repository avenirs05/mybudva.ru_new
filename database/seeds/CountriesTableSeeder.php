<?php

use Illuminate\Database\Seeder;

use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Country::create(['name_ru' => 'Черногория']);
		Country::create(['name_en' => 'Montenegro']);
	}
}
