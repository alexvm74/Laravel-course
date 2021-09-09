<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getCategories(): array
    {
        $faker = Factory::create('ru_RU');
        $data = [];
        $countNumber = mt_rand(6, 12);
        for ($i = 0; $i < $countNumber; $i++) {
            $data[] = [
                'id' => $i + 1,
                'title' => $faker->country(),
                'created_at' => now()
            ];
        }
        return $data;
    }

    protected function getNews(): array
    {
        $faker = Factory::create('ru_RU');
        $data = [];
        $countNumber = mt_rand(5, 15);
        for ($i = 0; $i < $countNumber; $i++) {
            $data[] = [
                'id' => $i + 1,
                'title' => $faker->jobTitle(),
                'description' => $faker->sentence(nbWords: 10),
                'author' => $faker->name(),
                'created_at' => now()
            ];
        }
        return $data;
    }
}
