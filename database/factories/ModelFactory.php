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

$factory->define(acessoSystem\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'cpf' => str_random(11),
        'identity'=>$faker->randomDigit,
        'dispatcher'=>$faker->word,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),


    ];
});


$factory->define(acessoSystem\Entities\Client::class, function (Faker\Generator $faker) {
    return [
        'birthdate'=>$faker->date,
        'phone'=> $faker->phoneNumber,
        'cel'=> $faker->phoneNumber,
        'gender'=>'M',
        'maritalstatus'=>$faker->word,
        'mother'=>$faker->word,
        'father'=>$faker->word,
        'nationality'=>$faker->word,
        'naturality'=>$faker->word,
        'children'=>$faker->randomDigit,
        'zipcode'=>$faker->postcode,
        'address'=> $faker->address,
        'complement'=>$faker->secondaryAddress,
        'city'=> $faker->city,
        'state'=>$faker->state,

    ];
});

$factory->define(acessoSystem\Entities\Sponsor::class, function (Faker\Generator $faker) {
    return [
        'name'=>$faker->word,
        'state'=>$faker->state,
        'contact'=>$faker->word,
        'cel'=> $faker->phoneNumber,
        'description'=>$faker->sentence,

    ];
});

$factory->define(acessoSystem\Entities\Protocol::class, function (Faker\Generator $faker) {
    return [
        'name'=>$faker->word,
        'description'=>$faker->sentence,
        'date'=>$faker->date,
        'progress' => rand(1,100),
        'status' => rand(1,3),
    ];
});


$factory->define(acessoSystem\Entities\Project::class, function (Faker\Generator $faker) {
    return [
        'protocol_id'=>rand(1,3),
        'name'=>$faker->word,
        'schooling'=>$faker->word,
        'age'=>$faker->word,
        'tax'=>$faker->numberBetween(100,50),
        'description'=>$faker->sentence,
        'register' => 1,
        'status' => rand(1,3),
    ];
});


$factory->define(acessoSystem\Entities\Contact::class, function (Faker\Generator $faker) {
    return [
        'name'=>$faker->word,
        'email'=>$faker->email,
        'cel'=> $faker->phoneNumber,
        'description'=>$faker->sentence,
        'return'=>$faker->sentence,
        'about'=>$faker->word,
        'status' => rand(1,3),
        'protocol' => rand(1,3),

    ];
});






$factory->define(acessoSystem\Entities\Appeal::class, function (Faker\Generator $faker) {
    return [
        'user_id'=>rand(1,3),
        'project_id'=>rand(1,3),
        'name'=>$faker->word,
        'description'=>$faker->sentence,
        'return'=>$faker->sentence,
        'about'=>$faker->word,
        'status' => rand(1,3)

    ];
});

$factory->define(acessoSystem\Entities\Permission::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
    ];
});

$factory->define(acessoSystem\Entities\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
    ];
});

