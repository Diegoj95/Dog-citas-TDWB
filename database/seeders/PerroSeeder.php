<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;


class PerroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new Client();

        DB::table('perro')->insert([
            'nombre' => 'Akamaru',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => 'Leal y valiente, siempre listo para acompañar a su dueño, Kiba, en cualquier aventura ninja.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Pakkun',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => 'Un ninja rastreador, tiene un agudo sentido del olfato y es conocido por su astucia en misiones de inteligencia.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Rocky',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => 'Perro valiente y protector que siempre está alerta para cuidar de su hogar y de las personas que ama.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Lola',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => 'Soy una perrita juguetona y curiosa que se divierte explorando nuevos lugares y descubriendo juguetes divertidos.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Elvis',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => 'Soy un perro lleno de energía y carisma, nombrado en honor al legendario cantante Elvis Presley.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Harrison',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => 'Saludos, soy Harrison, un perro aventurero y lleno de intriga. Así como el famoso actor, disfruto explorando nuevos territorios y descubriendo emocionantes secretos.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Jim Carrey',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => '¡Hola, soy Jim Carrey, el perro más divertido y juguetón! Siempre estoy listo para hacer reír a todos a mi alrededor con mis travesuras y ocurrencias cómicas.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Forest Gump',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => 'Hola, soy Forest Gump, un perro amigable y lleno de energía. Al igual que mi homónimo humano, estoy listo para correr aventuras y disfrutar de la vida al máximo.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Will Smith',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => '¡Saludos! Soy Will Smith, el perro más carismático y positivo que puedas conocer. Siempre listo para brillar y contagiar alegría a todos los que me rodean.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Lionel Messi',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => '¡Hola, soy Lionel Messi! Aunque no tengo habilidades de fútbol, soy un perro rápido y ágil que siempre está listo para jugar y divertirse en el campo de juego de la vida.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Cristiano Ronaldo',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => 'Soy Cristiano Ronaldo, un perro fuerte y determinado. Así como el famoso futbolista, siempre me esfuerzo por ser el mejor en todo lo que hago, ya sea corriendo o jugando.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Scooby Doo',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => '¡Ruh-roh! Soy Scooby Doo, el perro más valiente y hambriento de aventuras. Siempre estoy listo para resolver misterios y disfrutar de unas cuantas Scooby Galletas.',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Corxea',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => '¡Hola, soy Corxea! Un perro curioso y lleno de energía. Disfruto explorando nuevos lugares y descubriendo cosas emocionantes. ¿Me acompañas en esta aventura?',
        ]);

        DB::table('perro')->insert([
            'nombre' => 'Dross',
            'url_foto' => $this->getRandomDogImageUrl($client),
            'descripcion' => 'Saludos, soy Dross, un perro misterioso y un tanto travieso. Siempre listo para explorar lo desconocido y descubrir los secretos más oscuros de la vida canina.',
        ]);
    }


    private function getRandomDogImageUrl(Client $client): string
    {
        $response = $client->get('https://dog.ceo/api/breeds/image/random');
        $data = json_decode($response->getBody(), true);

        return $data['message'];
    }
}
