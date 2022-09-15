<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	[
	        	'avatar' => 'https://dam.cocinafacil.com.mx/wp-content/uploads/2018/07/beneficios-de-la-papa-1.jpg',
	        	'Name' => 'Papa',
	        	'Price' => '2500',
	        	'Desc' => 'papa capira recien sacada de la tierra',
            ],
        	[
	        	'avatar' => 'https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2020/01/platano-maduro-en-un-dia-sipa.jpg',
	        	'Name' => 'Platano maduro',
	        	'Price' => '750',
	        	'Desc' => 'papa capira recien sacada de la tierra',
            ],
        	[
	        	'avatar' => 'https://mui.kitchen/__export/1621526042573/sites/muikitchen/img/2021/05/20/image_3b20b684-def8-4b14-98e2-4d74a66cd5d1.jpg_118292745.jpg',
	        	'Name' => 'Platano Verde',
	        	'Price' => '900',
	        	'Desc' => 'papa capira recien sacada de la tierra',
            ],
        	[
	        	'avatar' => 'https://nutricionpractica.es/wp-content/uploads/2020/06/Imagen-Pl%C3%A1tano-verde-1135x758.jpg',
	        	'Name' => 'Banano',
	        	'Price' => '2200',
	        	'Desc' => 'papa capira recien sacada de la tierra',
            ],
        	[
	        	'avatar' => 'https://canalcocina.es/medias/_cache/zoom-4bed8abde11408cd05cc83d68ba45945-920-518.jpg',
	        	'Name' => 'Mazorca',
	        	'Price' => '5000',
	        	'Desc' => 'papa capira recien sacada de la tierra',
            ],
        	[
	        	'avatar' => 'https://static.diariofemenino.com/media/22740/consejos-conservar-yuca.jpg',
	        	'Name' => 'Yuca',
	        	'Price' => '1250',
	        	'Desc' => 'papa capira recien sacada de la tierra',
            ],
        	[
	        	'avatar' => 'https://www.tododisca.com/wp-content/uploads/2020/12/queso-suizo-elemental-Sistema-Inmunologico.jpg',
	        	'Name' => 'Queso',
	        	'Price' => '4200',
	        	'Desc' => 'papa capira recien sacada de la tierra',
            ]
        ]);
    }
}






