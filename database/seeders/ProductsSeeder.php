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
	        	'Desc' => 'Fuente de proteina y carbohidratos',
            ],
        	[
	        	'avatar' => 'https://mui.kitchen/__export/1621526042573/sites/muikitchen/img/2021/05/20/image_3b20b684-def8-4b14-98e2-4d74a66cd5d1.jpg_118292745.jpg',
	        	'Name' => 'Platano Verde',
	        	'Price' => '900',
	        	'Desc' => 'Delicioso para hacer un patacon e invitar a todos',
            ],
        	[
	        	'avatar' => 'https://nutricionpractica.es/wp-content/uploads/2020/06/Imagen-Pl%C3%A1tano-verde-1135x758.jpg',
	        	'Name' => 'Banano',
	        	'Price' => '2200',
	        	'Desc' => 'Deliciosos Bananos jugosos y sabrosos',
            ],
        	[
	        	'avatar' => 'https://canalcocina.es/medias/_cache/zoom-4bed8abde11408cd05cc83d68ba45945-920-518.jpg',
	        	'Name' => 'Mazorca',
	        	'Price' => '5000',
	        	'Desc' => 'El verdadero oro',
            ],
        	[
	        	'avatar' => 'https://static.diariofemenino.com/media/22740/consejos-conservar-yuca.jpg',
	        	'Name' => 'Yuca',
	        	'Price' => '1250',
	        	'Desc' => 'yuca recien sacada de la tierra',
            ],
        	[
	        	'avatar' => 'https://www.tododisca.com/wp-content/uploads/2020/12/queso-suizo-elemental-Sistema-Inmunologico.jpg',
	        	'Name' => 'Queso',
	        	'Price' => '4200',
	        	'Desc' => 'Un producto fresco y delicioso',
            ],


            [
	        	'avatar' => 'https://statics-cuidateplus.marca.com/cms/styles/natural/azblob/conjunto-de-manzanas-verdes.jpg.webp?itok=r3DMKWSO',
	        	'Name' => 'Manzana',
	        	'Price' => '2000',
	        	'Desc' => 'Manzana tierna y dulce',
            ],
            [
	        	'avatar' => 'https://dam.cocinafacil.com.mx/wp-content/uploads/2018/05/propiedades-de-la-pera-salud-belleza.jpg',
	        	'Name' => 'Pera',
	        	'Price' => '1500',
	        	'Desc' => 'Pera robusta verde y sana',
            ],
            [
	        	'avatar' => 'https://statics-cuidateplus.marca.com/cms/styles/natural/azblob/papaya_0.jpg.webp?itok=G8D-GoXz',
	        	'Name' => 'Papaya',
	        	'Price' => '500',
	        	'Desc' => 'Lo mejor para la digestion, coma papaya',
            ],
            [
	        	'avatar' => 'https://static2.diariovasco.com/www/multimedia/202106/09/media/cortadas/esparragos-kuyG-U140644297105BKI-624x385@Diario%20Vasco.jpg',
	        	'Name' => 'Esparragos',
	        	'Price' => '700',
	        	'Desc' => 'Para una dieta sana consuma esparragos',
            ],
            [
	        	'avatar' => 'https://dam.cocinafacil.com.mx/wp-content/uploads/2018/04/espinaca.jpg',
	        	'Name' => 'Espinaca',
	        	'Price' => '2500',
	        	'Desc' => 'Si fuerte quieres ser, espinaca debes comer',
            ],
            [
	        	'avatar' => 'https://static1.abc.es/media/bienestar/2020/09/22/brocoli-1-kTsD--620x349@abc.jpg',
	        	'Name' => 'Brocoli',
	        	'Price' => '1250',
	        	'Desc' => 'Bueno para el corazon aunque no lo parezca por su sabor',
            ],
            [
	        	'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkidWoqD0_EwD8SYjKZeL47ZKBgYth2lceow&usqp=CAU',
                'Name' => 'Zanahoria',
	        	'Price' => '300',
	        	'Desc' => 'Consume zanahoria y tendras una vision de 10',
            ],
            [
	        	'avatar' => 'https://dam.cocinafacil.com.mx/wp-content/uploads/2019/07/leche-bronca-que-es.jpg',
	        	'Name' => 'Leche',
	        	'Price' => '3000',
	        	'Desc' => 'Leche completamente entera',
            ],
            [
	        	'avatar' => 'https://dam.cocinafacil.com.mx/wp-content/uploads/2019/05/cortes-de-carne.jpg',
	        	'Name' => 'Carne de Res',
	        	'Price' => '9000',
	        	'Desc' => 'La carne mas fresca que vas a encontrar',
            ],
            [
	        	'avatar' => 'https://www.innaturale.com/es/wp-content/uploads/2021/07/Carne-de-cerdo.jpg',
	        	'Name' => 'Carne de Cerdo',
	        	'Price' => '9500',
	        	'Desc' => 'La carne mas fresca que vas a encontrar',
            ],
            [
	        	'avatar' => 'https://i.blogs.es/8ceb02/pollo_entero/1366_2000.jpg',
	        	'Name' => 'Pollo',
	        	'Price' => '7000',
	        	'Desc' => 'Pollo criado en el campo',
            ],
            [
	        	'avatar' => 'https://fedefruta.cl/wp-content/uploads/2018/01/uvademesa04.jpg',
	        	'Name' => 'Uvas',
	        	'Price' => '6000',
	        	'Desc' => 'Uva chilena dulce y jugosa',
            ],
            [
	        	'avatar' => 'http://www.frutas-hortalizas.com/img/fruites_verdures/presentacio/4.jpg',
	        	'Name' => 'Coco',
	        	'Price' => '1250',
	        	'Desc' => 'Coco recien bajado de la palmera',
            ],
            [
	        	'avatar' => 'https://static4.abc.es/media/bienestar/2020/11/06/naranja-kOMF--1200x630@abc.jpg',
	        	'Name' => 'Naranja',
	        	'Price' => '700',
	        	'Desc' => 'Aporta vitamina C',
            ],

        ]);
    }
}






