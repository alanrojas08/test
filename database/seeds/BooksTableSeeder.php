<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [

            [
                'title' => 'Cien años de soledad',
                'description' => 'Cien años de soledad narra la historia de la familia Buendía, fundadores de una aldea ficticia llamada Macondo. Es en este lugar en donde los personajes dan pie a un conjunto de aventuras y acontecimientos tanto favorables como adversos.',
                'pages' => 300,
                'price' => 120.50
            ],

            [
                'title' => 'Don Quijote de la Mancha',
                'description' => 'Narra las aventuras del generoso Alonso Quijano, residente del pueblo de la Mancha que tras leer tantas novelas de caballería, acaba con la idea de creerse realmente un caballero y se nombra a sí mismo Don Quijote de la Mancha. Lucha por ayudar a los más desfavorecidos junto con su fiel escudero Sancho Panza y también por conseguir conquistar a Dulcinea, que es una campesina del lugar.',
                'pages' => 1000,
                'price' => 500
            ],

            [
                'title' => 'Hamlet',
                'description' => 'La historia se basa en el príncipe Hamlet de Dinamarca, quien decide tomar venganza por el asesinato de su padre, al cual ve como un fantasma que pide ser vengado. Este transforma todo su dolor y desesperación en ira y locura, dando lugar a un conjunto de hechos trágicos.',
                'pages' => 200,
                'price' => 352.20
            ],

            [
                'title' => 'El Principito',
                'description' => 'Las aventuras del principito vienen acompañadas de ilustraciones y frases profundas que son de reflexión para la vida adulta. Es uno de los mejores libros para leer y uno de los más vendidos a nivel mundial.',
                'pages' => 80,
                'price' => 200
            ],

            [
                'title' => 'Orgullo y Prejuicio',
                'description' => 'Es una de las primeras comedias románticas de la historia y uno de los libros más reconocidos dentro de la literatura inglesa tanto por sus múltiples ediciones como por sus frases famosas utilizadas en la cultura inglesa.',
                'pages' => 350,
                'price' => 221.20
            ],

            [
                'title' => '1984',
                'description' => '1984 es uno de los libros más influyentes del siglo XX y uno de los más vendidos en todo el mundo. Impresiona por su visión futurista de las sociedades y gobiernos de la actualidad debido a que se representa muchas acciones totalitarias de control y represión en donde se dejan claras las consecuencias de estar en desacuerdo con un sistema de gobierno que hace abuso de su poder.',
                'pages' => 200,
                'price' => 152.30
            ],

            [
                'title' => 'La Odisea',
                'description' => 'Se dice que dicha obra fue escrita alrededor del siglo VIII A.C y constituye uno de los clásicos más relevantes de la cultura occidental, pudiendo ser junto con la Ilíada una de las primeras obras literarias que fueron transcritas.',
                'pages' => 200,
                'price' => 80.50
            ]

        ];

        foreach ($books as $book) {

            App\Book::create($book);

        }
    }
}
