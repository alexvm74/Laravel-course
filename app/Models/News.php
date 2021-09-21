<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $table = 'news';
    //protected $primaryKey = 'idnews'; // for example, if $primaryKey != 'id'

    // обновить указанные поля, если их не много, иначе через $guarded:
    protected $fillable = [
        'category_id', 'title', 'author', 'description'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
