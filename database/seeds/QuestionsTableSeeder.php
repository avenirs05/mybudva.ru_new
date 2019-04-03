<?php

use Illuminate\Database\Seeder;

use App\Question;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create(
			[
				'question_ru' => 'КАКОЕ МОРЕ В ЧЕРНОГОРИИ?',
				'question_en' => 'en_КАКОЕ МОРЕ В ЧЕРНОГОРИИ?',
				'answer_ru' => 'Адриатическое море с чистой (прозрачность воды до 60 м) и лазурной водой, но при этом не самое теплое. Вода очень соленая (содержание природной соли 40 %) и богата минералами. Пляжный сезон в Черногории начинается в начале мая, а заканчивается в середине октября.',
				'answer_en' => 'en_Адриатическое море с чистой (прозрачность воды до 60 м) и лазурной водой, но при этом не самое теплое. Вода очень соленая (содержание природной соли 40 %) и богата минералами. Пляжный сезон в Черногории начинается в начале мая, а заканчивается в середине октября.'
			]
		);
		
		Question::create(
			[
				'question_ru' => 'КАКИЕ ПЛЯЖИ В ЧЕРНОГОРИИ?',
				'question_en' => 'en_КАКИЕ ПЛЯЖИ В ЧЕРНОГОРИИ?',
				'answer_ru' => 'В Черногории более 100 пляжей, преимущественно с мелкой и крупной галькой. Песчаные пляжи в Черногории встречаются не везде. Практически все они находятся в Будванской ривьере: Будва, Бечичи, Свети-Стеван (Близикуче), Рафаиловичи, Петровац, Булярица. Пляжи в районе Котора, Рисана, Доброты в основном представлены бетонными плитами. Вход на пляжи Черногории бесплатный. Комплект лежаков (два шезлонга и зонт) стоит от 7 € до 15 € в день. 30% территории любого пляжа общедоступны.',
				'answer_en' => 'en_В Черногории более 100 пляжей, преимущественно с мелкой и крупной галькой. Песчаные пляжи в Черногории встречаются не везде. Практически все они находятся в Будванской ривьере: Будва, Бечичи, Свети-Стеван (Близикуче), Рафаиловичи, Петровац, Булярица. Пляжи в районе Котора, Рисана, Доброты в основном представлены бетонными плитами. Вход на пляжи Черногории бесплатный. Комплект лежаков (два шезлонга и зонт) стоит от 7 € до 15 € в день. 30% территории любого пляжа общедоступны.'
			]
		);
	}
}