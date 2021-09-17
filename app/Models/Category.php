<?php

declare(strict_types=1);

namespace App\Models;

use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function getCategories()
    {
        //return DB::select("SELECT id, title, `description`, created_at FROM {$this->table}"); 
        // return DB::select("SELECT id, title, `description`, created_at FROM {$this->table} WHERE id = :id", [
        //     'id' => 2
        // ]); // так обычно не пишут
        //return DB::table($this->table)->select(['id', 'title', 'description'])->get();
        return DB::table($this->table)->get();
        //return DB::table()->select();
        // return DB::table($this->table);


    }

    public function getCategoryById(int $id)
    {
        return DB::table($this->table)->find($id);
    }
}
