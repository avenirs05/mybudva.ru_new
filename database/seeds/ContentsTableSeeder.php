<?php

use Illuminate\Database\Seeder;

use App\Content;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::create(
			[
				'lang' => 'ru', 
				'header_main_screen' => 'Аренда вилл и апартаментов в Черногории без посредников',	
				'header_main_content' => 'Отдых в Черногории в 2019 году. Часто задаваемые вопросы.',
				'phone_main' => '+382 68 089 888',
				'header_areas' => 'КУРОРТЫ И ГОРОДА В ЧЕРНОГОРИИ: КУДА ЛУЧШЕ ПОЕХАТЬ?',		
				'contact_page' => '
					<v-layout class="mt-2"> 
						<v-flex class="contacts-wrapper mt-4">
							<p><b>Адрес:</b> Budva 85310</p>
							<p><b>Тел.:</b> +382 68 089 888</p>
							<p><b>Viber:</b> +382 68 089 888</p>
							<p><b>WhatsApp:</b> +382 68 089 888</p>
							<p><b>E-mail:</b> arenda@mybudva.ru</p> 
						</v-flex>
					</v-layout>
					',
			]
		);	
		
		Content::create(
			[
				'lang' => 'en',
				'header_main_screen' => 'en_Аренда вилл и апартаментов в Черногории без посредников',
				'header_main_content' => 'en_Отдых в Черногории в 2019 году. Часто задаваемые вопросы.',
				'phone_main' => '+382 68 089 888',
				'header_areas' => 'en_КУРОРТЫ И ГОРОДА В ЧЕРНОГОРИИ: КУДА ЛУЧШЕ ПОЕХАТЬ?',
				'contact_page' => '
					<v-layout class="mt-2"> 
						<v-flex class="contacts-wrapper mt-4">
							<p><b>en_Адрес:</b> Budva 85310</p>
							<p><b>Тел.:</b> +382 68 089 888</p>
							<p><b>Viber:</b> +382 68 089 888</p>
							<p><b>WhatsApp:</b> +382 68 089 888</p>
							<p><b>E-mail:</b> arenda@mybudva.ru</p> 
						</v-flex>
					</v-layout>
				',
			]
		);
	}
}
