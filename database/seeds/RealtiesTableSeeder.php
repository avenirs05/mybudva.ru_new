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
			'name' => 'Anthurium I',			
			
			'type' => 'apartment',
			'type_ru' => 'апартамент',
			'type_en' => 'apartment',
			
			'subname_ru' => 'Апартаменты с 2 спальнями',
			'subname_en' => 'en_Апартаменты с 2 спальнями',
			
			'square' => 60,
			
			'view_ru' => 'на горы',
			'view_en' => 'mountains',
			
			'bedrooms' => 2,
			'capacity' => 6,
			'dist_sea' => 400,
			'dist_tivat' => 9,
			'dist_podg' => 96,
			
			'transfer_ru' => 'платный',
			'transfer_en' => 'paid',
//			
//			'internet_ru' => '',
//			'internet_en' => '',
//			
//			'parking_ru' => '',
//			'parking_en' => '',
			
			'booking_mark' => 9.0,
			
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
			'price_mar' => 97,
			'price_apr' => 96,
			'price_may' => 95,
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
			'name' => 'Begonia',
					
			'type' => 'apartment',		
			'type_ru' => 'апартамент',
			'type_en' => 'apartment',
			'subname_ru' => 'Апартаменты в Кумборе с 1 спальней',
			'subname_en' => 'en_Апартаменты в Кумборе с 1 спальней',
			'square' => 48,
			'view_ru' => 'на море и горы',
			'view_en' => 'sea and mountains',
			'bedrooms' => 1,
			'capacity' => 4,
			'dist_sea' => 250,
			'dist_tivat' => 18,
			'dist_podg' => 102,
			'transfer_ru' => 'платный',
			'transfer_en' => 'paid',
//			
//			'internet_ru' => '',
//			'internet_en' => '',
//			
//			'parking_ru' => '',
//			'parking_en' => '',
			'booking_mark' => 9.5,
			'description_ru' => 'descr_ru',
			'description_en' => 'descr_en',
//			'country_ru' => '',
//			'country_en' => '',
			'area_ru' => 'Барская ривьера',
			'area_en' => 'Bar Riviera',
			'city_ru' => 'Кумбор',
			'city_en' => 'Kumbor',
			'map_html' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.3632492036777!2d18.867321315101165!3d42.292113947382965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE3JzMxLjYiTiAxOMKwNTInMTAuMiJF!5e0!3m2!1sru!2sru!4v1507902217396" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>',
			'price' => 120,
			'price_line_through' => 89,
			'price_jan' => 98,
			'price_feb' => 97,
			'price_mar' => 97,
			'price_apr' => 96,
			'price_may' => 95,
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
			'name' => 'Heart of Budva',
			
			'type' => 'villa',
			'type_ru' => 'вилла',
			'type_en' => 'villa',
			'subname_ru' => 'Гостевой дом в Будве',
			'subname_en' => 'en_Гостевой дом в Будве',
			'square' => 100,
			'view_ru' => 'на окрестности и горы',
			'view_en' => 'surroundings and mountains',
			'bedrooms' => 4,
			'capacity' => 10,
			'dist_sea' => 850,
			'dist_tivat' => 20,
			'dist_podg' => 60,
			'transfer_ru' => 'платный',
			'transfer_en' => 'paid',
//			
//			'internet_ru' => '',
//			'internet_en' => '',
//			
//			'parking_ru' => '',
//			'parking_en' => '',
			'booking_mark' => 9.3,
			'description_ru' => 'descr_ru',
			'description_en' => 'descr_en',
//			'country_ru' => '',
//			'country_en' => '',
			'area_ru' => 'Барская ривьера',
			'area_en' => 'Bar Riviera',
			'city_ru' => 'Кумбор',
			'city_en' => 'Kumbor',
			'map_html' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.3632492036777!2d18.867321315101165!3d42.292113947382965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE3JzMxLjYiTiAxOMKwNTInMTAuMiJF!5e0!3m2!1sru!2sru!4v1507902217396" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>',
			'price' => 65,
			'price_line_through' => 110,
			'price_jan' => 98,
			'price_feb' => 97,
			'price_mar' => 97,
			'price_apr' => 96,
			'price_may' => 95,
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
			'name' => 'Astra 1',
			
			'type' => 'villa',
			'type_ru' => 'вилла',
			'type_en' => 'villa',
			'subname_ru' => 'Вилла с бассейном',
			'subname_en' => 'en_Вилла с бассейном',
			'square' => 350,
//			'view_ru' => '',
//			'view_en' => '',
			'bedrooms' => 4,
			'capacity' => 12,
			'dist_sea' => 1800,
			'dist_tivat' => 20,
			'dist_podg' => 60,
			'transfer_ru' => 'платный',
			'transfer_en' => 'paid',
//			
//			'internet_ru' => '',
//			'internet_en' => '',
//			
//			'parking_ru' => '',
//			'parking_en' => '',
			'booking_mark' => 9.0,
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
			'price_mar' => 97,
			'price_apr' => 96,
			'price_may' => 95,
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
