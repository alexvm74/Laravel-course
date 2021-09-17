<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getCategories()
    {
        $model = new Category();
        return $model->getCategories();
        //return Category::getCategories(); // ругается на отсутствие статики в getCategories()
    }

    protected function getNews()
    {
        $model = new News();
        return $model->getNews();
        //return News::getNews(); // ругается на отсутствие статики в getNews()
    }
}
