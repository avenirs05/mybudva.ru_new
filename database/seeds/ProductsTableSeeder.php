<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Product::create([
			'html_ru' => '
				<h3 class="text-xs-center blue--text mb-4">КАКИЕ ЦЕНЫ НА ПРОДУКТЫ В ЧЕРНОГОРИИ В 2019 ГОДУ?</h3>
				<v-layout row wrap class="table-products-layout">   
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Продукт</th>
								<th scope="col">Единица измерения</th>
								<th scope="col">Цена, €</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="3"><b>Овощи</b></td>
							</tr>
							<tr>
								<td>Картофель</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,45</td>
							</tr>
							<tr>
								<td>Помидоры</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,80</td>
							</tr>
							<tr>
								<td>Огурцы</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,60</td>
							</tr>
							<tr>
								<td>Перец</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 2,00</td>
							</tr>

							<tr>
								<td colspan="3"><b>Фрукты</b></td>
							</tr>
							<tr>
								<td>Клубника</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 3,00</td>
							</tr>
							<tr>
								<td>Черешня</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 4,50</td>
							</tr>
							<tr>
								<td>Яблоки</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,70</td>
							</tr>
							<tr>
								<td>Бананы</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 1,00</td>
							</tr>
							<tr>
								<td>Виноград</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 3,00</td>
							</tr>
							<tr>
								<td>Апельсины</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,80</td>
							</tr>

							<tr>
								<td colspan="3"><b>Мясо</b></td>
							</tr>
							<tr>
								<td>Свинина</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 3,50</td>
							</tr>
							<tr>
								<td>Говядина</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 6,50</td>
							</tr>
							<tr>
								<td>Курица</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 2,50</td>
							</tr>
							<tr>
								<td>Ветчина</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 3,70</td>
							</tr>
							<tr>
								<td>Пршут</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 12,00</td>
							</tr>

							<tr>
								<td colspan="3"><b>Молочные продукты</b></td>
							</tr>
							<tr>
								<td>Сыр</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 5,00</td>
							</tr>
							<tr>
								<td>Масло</td>
								<td nowrap>0,25 кг</td>
								<td nowrap>от 2,50</td>
							</tr>
							<tr>
								<td>Молоко</td>
								<td nowrap>1 л</td>
								<td nowrap>от 0,70</td>
							</tr>

							<tr>
								<td colspan="3"><b>Морепродукты</b></td>
							</tr>
							<tr>
								<td>Мидии</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 2,50</td>
							</tr>
							<tr>
								<td>Креветки</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 15,00</td>
							</tr>
							<tr>
								<td>Устрицы</td>
								<td nowrap>1 шт</td>
								<td nowrap>от 1,00</td>
							</tr>
							<tr>
								<td>Дорада/сибас</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 8,00</td>
							</tr>
							<tr>
								<td>Форель</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 5,00</td>
							</tr>                

							<tr>
								<td colspan="3"><b>Напитки</b></td>
							</tr>
							<tr>
								<td>Вода без газа</td>
								<td nowrap>1,5 л</td>
								<td nowrap>от 0,50</td>
							</tr>
							<tr>
								<td>Минеральная вода с газом</td>
								<td nowrap>1,5 л</td>
								<td nowrap>от 0,65</td>
							</tr>
							<tr>
								<td>Пиво баночное</td>
								<td nowrap>0,5 л</td>
								<td nowrap>от 0,60</td>
							</tr>
							<tr>
								<td>Вино местное Plantaze</td>
								<td nowrap>0,75 л</td>
								<td nowrap>от 3,00</td>
							</tr>
							<tr>
								<td>Вино местное Plantaze</td>
								<td nowrap>1 л</td>
								<td nowrap>от 12,00</td>
							</tr>                

							<tr>
								<td colspan="3"><b>Прочие продукты</b></td>
							</tr>
							<tr>
								<td>Хлеб</td>
								<td nowrap>1 шт</td>
								<td nowrap>от 0,6</td>
							</tr>
							<tr>
								<td>Макароны</td>
								<td nowrap>0,5 кг</td>
								<td nowrap>от 0,60</td>
							</tr>
							<tr>
								<td>Яйца</td>
								<td nowrap>10 шт</td>
								<td nowrap>от 1,3</td>
							</tr>
							<tr>
								<td>Чай в пакетиках</td>
								<td nowrap>20 шт</td>
								<td nowrap>от 0,80</td>
							</tr>
							<tr>
								<td>Кофе молотый</td>
								<td nowrap>0,5 кг</td>
								<td nowrap>от 4,00</td>
							</tr>
							<tr>
								<td>Сахар</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,40</td>
							</tr>
							<tr>
								<td>Сигареты</td>
								<td nowrap>1 пачка</td>
								<td nowrap>от 2,00</td>
							</tr>
						</tbody>
					</table>
				</v-layout>',

			
			
			
			
			
			'html_en' => '
				<h3 class="text-xs-center blue--text mb-4">En_КАКИЕ ЦЕНЫ НА ПРОДУКТЫ В ЧЕРНОГОРИИ В 2019 ГОДУ?</h3>
				<v-layout row wrap class="table-products-layout"> 					
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Продукт</th>
								<th scope="col">Единица измерения</th>
								<th scope="col">Цена, €</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="3"><b>En_Овощи</b></td>
							</tr>
							<tr>
								<td>Картофель</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,45</td>
							</tr>
							<tr>
								<td>Помидоры</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,80</td>
							</tr>
							<tr>
								<td>Огурцы</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,60</td>
							</tr>
							<tr>
								<td>Перец</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 2,00</td>
							</tr>

							<tr>
								<td colspan="3"><b>Фрукты</b></td>
							</tr>
							<tr>
								<td>Клубника</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 3,00</td>
							</tr>
							<tr>
								<td>Черешня</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 4,50</td>
							</tr>
							<tr>
								<td>Яблоки</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,70</td>
							</tr>
							<tr>
								<td>Бананы</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 1,00</td>
							</tr>
							<tr>
								<td>Виноград</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 3,00</td>
							</tr>
							<tr>
								<td>Апельсины</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,80</td>
							</tr>

							<tr>
								<td colspan="3"><b>Мясо</b></td>
							</tr>
							<tr>
								<td>Свинина</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 3,50</td>
							</tr>
							<tr>
								<td>Говядина</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 6,50</td>
							</tr>
							<tr>
								<td>Курица</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 2,50</td>
							</tr>
							<tr>
								<td>Ветчина</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 3,70</td>
							</tr>
							<tr>
								<td>Пршут</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 12,00</td>
							</tr>

							<tr>
								<td colspan="3"><b>Молочные продукты</b></td>
							</tr>
							<tr>
								<td>Сыр</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 5,00</td>
							</tr>
							<tr>
								<td>Масло</td>
								<td nowrap>0,25 кг</td>
								<td nowrap>от 2,50</td>
							</tr>
							<tr>
								<td>Молоко</td>
								<td nowrap>1 л</td>
								<td nowrap>от 0,70</td>
							</tr>

							<tr>
								<td colspan="3"><b>Морепродукты</b></td>
							</tr>
							<tr>
								<td>Мидии</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 2,50</td>
							</tr>
							<tr>
								<td>Креветки</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 15,00</td>
							</tr>
							<tr>
								<td>Устрицы</td>
								<td nowrap>1 шт</td>
								<td nowrap>от 1,00</td>
							</tr>
							<tr>
								<td>Дорада/сибас</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 8,00</td>
							</tr>
							<tr>
								<td>Форель</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 5,00</td>
							</tr>                

							<tr>
								<td colspan="3"><b>Напитки</b></td>
							</tr>
							<tr>
								<td>Вода без газа</td>
								<td nowrap>1,5 л</td>
								<td nowrap>от 0,50</td>
							</tr>
							<tr>
								<td>Минеральная вода с газом</td>
								<td nowrap>1,5 л</td>
								<td nowrap>от 0,65</td>
							</tr>
							<tr>
								<td>Пиво баночное</td>
								<td nowrap>0,5 л</td>
								<td nowrap>от 0,60</td>
							</tr>
							<tr>
								<td>Вино местное Plantaze</td>
								<td nowrap>0,75 л</td>
								<td nowrap>от 3,00</td>
							</tr>
							<tr>
								<td>Вино местное Plantaze</td>
								<td nowrap>1 л</td>
								<td nowrap>от 12,00</td>
							</tr>                

							<tr>
								<td colspan="3"><b>Прочие продукты</b></td>
							</tr>
							<tr>
								<td>Хлеб</td>
								<td nowrap>1 шт</td>
								<td nowrap>от 0,6</td>
							</tr>
							<tr>
								<td>Макароны</td>
								<td nowrap>0,5 кг</td>
								<td nowrap>от 0,60</td>
							</tr>
							<tr>
								<td>Яйца</td>
								<td nowrap>10 шт</td>
								<td nowrap>от 1,3</td>
							</tr>
							<tr>
								<td>Чай в пакетиках</td>
								<td nowrap>20 шт</td>
								<td nowrap>от 0,80</td>
							</tr>
							<tr>
								<td>Кофе молотый</td>
								<td nowrap>0,5 кг</td>
								<td nowrap>от 4,00</td>
							</tr>
							<tr>
								<td>Сахар</td>
								<td nowrap>1 кг</td>
								<td nowrap>от 0,40</td>
							</tr>
							<tr>
								<td>Сигареты</td>
								<td nowrap>1 пачка</td>
								<td nowrap>от 2,00</td>
							</tr>
						</tbody>
					</table>
				</v-layout>',
			]
		);
	}
}
