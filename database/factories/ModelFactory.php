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

$factory->define(Scholr\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'loginId' => str_random(5),
        'Teacher' => factory('Scholr\Teacher'),
        'password' => bycript('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Scholr\Teacher::class, function ($faker) {
    return [
        'firstname' =>$faker->name,
        'lastname' =>$faker->name,
        'staffId' => str_random(5),
        'phone'  =>$faker->phoneNumber,
        'email' =>$faker->email,
        'dob' =>$faker->date,
        'state' => $faker->state,
        'gender' => $faker->titleMale,
        'nationality' =>$faker->country,
        'address'  => $faker->address,
        'image' => $faker->image,
        'slug' => $faker->name,
        'end_date' => $faker->date,
    ];
});

$factory->define(Scholr\Student::class, function ($faker) {
    return [
        'firstname' =>$faker->name,
        'lastname' =>$faker->name,
        'studentId' => str_random(5),
        'phone'  =>$faker->phoneNumber,
        'email' =>$faker->email,
        'dob' =>$faker->date,
        'state' => $faker->state,
        'gender' => $faker->titleFemale,
        'nationality' =>$faker->country,
        'address'  => $faker->address,

        'class' => 'SSS2',
        'image' => $faker->image,
        'end_date' => $faker->date,
    ];
});

$factory->define(Scholr\Admin::class, function ($faker) {
    return [
        'firstname' =>$faker->name,
        'lastname' =>$faker->name,
        'staffId' => str_random(5),
        'phone'  =>$faker->phoneNumber,
        'email' =>$faker->email,
        'dob' =>$faker->date,
        'state' => $faker->state,
        'gender' => $faker->titleFemale,
        'nationality' =>$faker->country,
        'address'  => $faker->address,
        'type' => $faker->name,
        'image' => $faker->image,
    ];

});

$factory->define(Scholr\Question::class, function($faker){
    return [
        'teacher_id' => 1,
        'classe_id' => 1,
        'subject_id' => 2,
        'term' => 'First Term',
        'question' => $faker->text,
        'option1' => $faker->name,
        'option2' => $faker->name,
        'option3' => $faker->name,
        'option4' => $faker->name
    ];
});

$factory->define(Scholr\Answer::class, function($faker){
    return [
        'question_id' => $faker->numberBetween($min = 1, $max = 100),
        'answer' => $faker->name
    ];
});