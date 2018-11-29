<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 29/11/18
 * Time: 8.37.
 */

namespace App\Http\Controllers;

use LaravelDay\Article\UseCase\ListArticles\ListArticles;

class ListArticlesController
{
    public function __invoke()
    {
        return response()->json((new ListArticles())());
    }
}
