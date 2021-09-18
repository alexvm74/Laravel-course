<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';

    public function getNews(): SupportCollection
    {
        return DB::table($this->table)->get();
        // return DB::table($this->table)
        //     ->join('categories', 'categories.id', '=', 'news.category_id')
        //     ->select('news.*', 'categories.id as categoryId', 'categories.title as categoryTitle')
        //     //->whereNotIn('news.id', [1, 3, 5])
        //     //->whereBetween('news.id', [1,5])
        //     // ->where([
        //     //     ['news.id', '>', 6],
        //     //     ['categories.id', '<', 2]
        //     // ])
        //     //->orWhere('news.title', 'like', '%' . request()->get('query') . '%')
        //     ->orderBy('news.id', 'desc')
        //     ->get();
    }

    public function getNewsById(int $id)
    {
        return DB::table($this->table)->find($id);
    }
}
