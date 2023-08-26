<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda = $faker->company;
            $train->stazione_partenza = $faker->city;
            $train->stazione_arrivo = $faker->city;
            $train->orario_partenza = $faker->time('H:i');
            $train->orario_arrivo = $faker->time('H:i');
            $train->codice_treno = $faker->unique()->randomNumber(5);
            $train->numero_carrozze = $faker->numberBetween(1, 10);
            $train->in_orario = $faker->boolean;
            $train->cancellato = $faker->boolean;
            $train->save();
        }
    }
}
