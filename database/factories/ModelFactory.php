<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/* $factory->define(App\Persona::class, function (Faker\Generator $faker) {

    return [
        'dni' => $faker->text(10)->unique(),
        'nombre' => $faker->text(10),
        'apellido' => $faker->text(10),
        'email' => $faker->unique()->safeEmail,
        //'password' => $password ?: $password = bcrypt('secret'),
        'edad' => $faker->text(2),
        'telefono' => $faker->text(10),
        'ciudadProcedencia' => $faker->text(20),
        'areaConocimiento' => $faker->text(15),
        'nivelEjerce' => "Universitario",
        'estudianteActual' => "Si",
        'categoria_id' => "1",

        'remember_token' => str_random(10),
    ];
});

*/