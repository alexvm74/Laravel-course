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
    use HasFactory;
    protected $table = 'news';

    public function getNews()
    {
        //return DB::select("SELECT id, title, `description`, created_at FROM {$this->table}"); // так обычно не пишут
        //return DB::table($this->table)->select(['id', 'title', 'description', 'autor'])->get();
        return DB::table($this->table)->get();



    }

    public function getNewsById(int $id)
    {
        return DB::table($this->table)->find($id);
    }
}
