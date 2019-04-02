<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		
		$this->call(CountriesTableSeeder::class);
		$this->call(AreasTableSeeder::class);
//		$this->call(CitiesTableSeeder::class);
//		$this->call(FeedbacksTableSeeder::class);
//		$this->call(ImagesTableSeeder::class);
		$this->call(ProductsTableSeeder::class);
		$this->call(QuestionsTableSeeder::class);
//		$this->call(RealtiesTableSeeder::class);	
	}
}
