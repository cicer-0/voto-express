<?php

use App\Models\Candidate;
use App\Models\Election;
use App\Models\Institution;
use App\Models\Option;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Crear Instituciones
        for ($i = 0; $i < 5; $i++) {
            Institution::create([
                'name' => $faker->company,
                'address' => $faker->address,
                'city' => $faker->city,
                'country' => $faker->country,
            ]);
        }

        // Crear Elecciones
        for ($i = 0; $i < 10; $i++) {
            $startDate = $faker->dateTimeBetween('-1 month', 'now');
            $endDate = $faker->dateTimeBetween($startDate, '+1 month');
            $institutionId = $faker->numberBetween(1, 5);
            Election::create([
                'name' => $faker->sentence(3),
                'start_date' => $startDate,
                'end_date' => $endDate,
                'institution_id' => $institutionId,
                'description' => $faker->paragraph,
                'status' => $faker->randomElement(['Planned', 'Ongoing', 'Finished']),
            ]);
        }

        // Crear Opciones
        for ($i = 0; $i < 20; $i++) {
            $electionId = $faker->numberBetween(1, 10);
            Option::create([
                'name' => $faker->sentence(2),
                'description' => $faker->paragraph,
                'image_url' => $faker->imageUrl(),
                'election_id' => $electionId,
            ]);
        }

        // Crear Candidatos
        for ($i = 0; $i < 30; $i++) {
            $optionId = $faker->numberBetween(1, 19);
            Candidate::create([
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'political_party' => $faker->company,
                'option_id' => $optionId,
                'photo_url' => $faker->imageUrl(),
                'date_of_birth' => $faker->date,
                'experience' => $faker->paragraph,
            ]);
        }

        // Crear Usuarios
        for ($i = 0; $i < 50; $i++) {
            $institutionId = $faker->numberBetween(1, 5);
            User::create([
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'dni' => $faker->unique()->isbn10,
                'email' => $faker->unique()->email,
                'password' => $faker->password(),
                'institution_id' => $institutionId,
                'type' => $faker->randomElement(['Administrator', 'Regular User','Institucion']),
            ]);
        }

        // // Crear Votos
        // for ($i = 0; $i < 100; $i++) {
        //     $userId = $faker->numberBetween(1, 50);
        //     $optionId = $faker->numberBetween(1, 20);
        //     Vote::create([
        //         'user_id' => $userId,
        //         'option_id' => $optionId,
        //         'vote_date' => $faker->dateTimeBetween('-1 month', 'now'),
        //     ]);
        // }
    }
}
