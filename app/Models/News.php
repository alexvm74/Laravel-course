<?php

declare(strict_types=1);

namespace App\Models;

use Faker\Factory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    // use HasFactory;
    // protected $table = 'news';

    public function getNews(): array
    {

        //return DB::table($this->table)
     //   return DB::table()->select();
        //     ->join('categories', 'categories.id', '=', 'news.category_id')
        //     ->select("news.*", "categories.id as categoryId", "categories.title as categoryTitle")
        //     ->whereBetween('news.id', [1, 5])
        //     /*->where([
		// 	   ['news.id', '>', 6],
		// 	   ['categories.id', '<', 2]
		//    ])*/

        //     //   ->orWhere('news.title', 'like', '%'.request()->get('query').'%')
        //     ->orderBy('news.id', 'desc')
        //     ->get();

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

    // public function getNewsById(int $id)
    // {
    //     return DB::table($this->table)->find($id);
    // }
}
