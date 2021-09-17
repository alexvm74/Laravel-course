<?php declare(strict_types=1);

namespace App\Models;

use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    //use HasFactory;
    //protected $table = 'categories';

    public function getCategories(): array
    {
        //return DB::select("SELECT id, title, description, created_at FROM {$this->table}");
        //return DB::table()->select();
        //return DB::table($this->table)->get();

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

    // public function getCategoryById(int $id)
    // {
    //     return DB::table($this->table)->find($id);
    // }
}
