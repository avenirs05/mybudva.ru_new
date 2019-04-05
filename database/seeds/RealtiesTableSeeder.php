<?php

use Illuminate\Database\Seeder;

use App\Realty;

class RealtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Realty::create(
		[
			'name' => 'Begonia',			
			
			'type' => 'apartment',
//			'type_ru' => '',
//			'type_en' => '',
			
			'subname_ru' => 'Апартаменты в Кумборе с 1 спальней',
			'subname_en' => 'One-Bedroom Apartment in Kumbor',
			
			'square' => 48,
			
//			'view_ru' => '',
//			'view_en' => '',
			
			'bedrooms' => 1,
			'capacity' => 4,
			'dist_sea' => 250,
			'dist_tivat' => 18,
			'dist_podg' => 102,
			
//			'transfer_ru' => '',
//			'transfer_en' => '',
//			
//			'internet_ru' => '',
//			'internet_en' => '',
//			
//			'parking_ru' => '',
//			'parking_en' => '',
			
			'booking_mark' => 9.08,
			
			'description_ru' => 'descr_ru',
			'description_en' => 'descr_en',
			
//			'country_ru' => '',
//			'country_en' => '',
			
			'area_ru' => 'Барская ривьера',
			'area_en' => 'Bar Riviera',
			
			'city_ru' => 'Кумбор',
			'city_en' => 'Kumbor',
			
			'map_html' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.3632492036777!2d18.867321315101165!3d42.292113947382965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE3JzMxLjYiTiAxOMKwNTInMTAuMiJF!5e0!3m2!1sru!2sru!4v1507902217396" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>',
			
			'price' => 100,
			'price_line_through' => 99,
			'price_jan' => 98,
			'price_feb' => 97,
			'price_may' => 96,
			'price_jun' => 95,
			'price_jul' => 94,
			'price_aug' => 93,
			'price_sep' => 92,
			'price_oct' => 91,
			'price_nov' => 90,
			'price_dec' => 89,
			'price_oct_apr' => 88,			
			
//			'discount' => '',
		]);
		
		
		Realty::create(
				[
			'name' => 'Olive',
					
			'type' => 'apartment',		
//			'type_ru' => '',
//			'type_en' => '',
					'subname_ru' => 'Апартаменты в Кумборе с 1 спальней',
					'subname_en' => 'One-Bedroom Apartment in Kumbor',
					'square' => 48,
//			'view_ru' => '',
//			'view_en' => '',
					'bedrooms' => 1,
					'capacity' => 4,
					'dist_sea' => 250,
					'dist_tivat' => 18,
					'dist_podg' => 102,
//			'transfer_ru' => '',
//			'transfer_en' => '',
//			
//			'internet_ru' => '',
//			'internet_en' => '',
//			
//			'parking_ru' => '',
//			'parking_en' => '',
					'booking_mark' => 9.08,
					'description_ru' => 'descr_ru',
					'description_en' => 'descr_en',
//			'country_ru' => '',
//			'country_en' => '',
					'area_ru' => 'Барская ривьера',
					'area_en' => 'Bar Riviera',
					'city_ru' => 'Кумбор',
					'city_en' => 'Kumbor',
					'map_html' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.3632492036777!2d18.867321315101165!3d42.292113947382965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE3JzMxLjYiTiAxOMKwNTInMTAuMiJF!5e0!3m2!1sru!2sru!4v1507902217396" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>',
					'price' => 100,
					'price_line_through' => 99,
					'price_jan' => 98,
					'price_feb' => 97,
					'price_may' => 96,
					'price_jun' => 95,
					'price_jul' => 94,
					'price_aug' => 93,
					'price_sep' => 92,
					'price_oct' => 91,
					'price_nov' => 90,
					'price_dec' => 89,
					'price_oct_apr' => 88,
//			'discount' => '',
		]);
		
		Realty::create(
		[
			'name' => 'Begonia Villa',
			
			'type' => 'villa',
			'type_ru' => 'вилла',
			'type_en' => 'apartment',
					'subname_ru' => 'Апартаменты в Кумборе с 1 спальней',
					'subname_en' => 'One-Bedroom Apartment in Kumbor',
					'square' => 48,
//			'view_ru' => '',
//			'view_en' => '',
					'bedrooms' => 1,
					'capacity' => 4,
					'dist_sea' => 250,
					'dist_tivat' => 18,
					'dist_podg' => 102,
//			'transfer_ru' => '',
//			'transfer_en' => '',
//			
//			'internet_ru' => '',
//			'internet_en' => '',
//			
//			'parking_ru' => '',
//			'parking_en' => '',
					'booking_mark' => 9.08,
					'description_ru' => 'descr_ru',
					'description_en' => 'descr_en',
//			'country_ru' => '',
//			'country_en' => '',
					'area_ru' => 'Барская ривьера',
					'area_en' => 'Bar Riviera',
					'city_ru' => 'Кумбор',
					'city_en' => 'Kumbor',
					'map_html' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.3632492036777!2d18.867321315101165!3d42.292113947382965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE3JzMxLjYiTiAxOMKwNTInMTAuMiJF!5e0!3m2!1sru!2sru!4v1507902217396" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>',
					'price' => 100,
					'price_line_through' => 99,
					'price_jan' => 98,
					'price_feb' => 97,
					'price_may' => 96,
					'price_jun' => 95,
					'price_jul' => 94,
					'price_aug' => 93,
					'price_sep' => 92,
					'price_oct' => 91,
					'price_nov' => 90,
					'price_dec' => 89,
					'price_oct_apr' => 88,
//			'discount' => '',
		]);


		Realty::create(
		[
			'name' => 'Olive Villa',
			
			'type' => 'villa',
			'type_ru' => 'вилла',
			'type_en' => 'villa',
					'subname_ru' => 'Апартаменты в Кумборе с 1 спальней',
					'subname_en' => 'One-Bedroom Apartment in Kumbor',
					'square' => 48,
//			'view_ru' => '',
//			'view_en' => '',
					'bedrooms' => 1,
					'capacity' => 4,
					'dist_sea' => 250,
					'dist_tivat' => 18,
					'dist_podg' => 102,
//			'transfer_ru' => '',
//			'transfer_en' => '',
//			
//			'internet_ru' => '',
//			'internet_en' => '',
//			
//			'parking_ru' => '',
//			'parking_en' => '',
					'booking_mark' => 9.08,
					'description_ru' => 'descr_ru',
					'description_en' => 'descr_en',
//			'country_ru' => '',
//			'country_en' => '',
					'area_ru' => 'Барская ривьера',
					'area_en' => 'Bar Riviera',
					'city_ru' => 'Кумбор',
					'city_en' => 'Kumbor',
					'map_html' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.3632492036777!2d18.867321315101165!3d42.292113947382965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE3JzMxLjYiTiAxOMKwNTInMTAuMiJF!5e0!3m2!1sru!2sru!4v1507902217396" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>',
					'price' => 100,
					'price_line_through' => 99,
					'price_jan' => 98,
					'price_feb' => 97,
					'price_may' => 96,
					'price_jun' => 95,
					'price_jul' => 94,
					'price_aug' => 93,
					'price_sep' => 92,
					'price_oct' => 91,
					'price_nov' => 90,
					'price_dec' => 89,
					'price_oct_apr' => 88,
//			'discount' => '',
		]);
	}
}
