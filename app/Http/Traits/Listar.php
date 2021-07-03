<?php

namespace App\Http\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

trait Listar
{
    public function apagar(string $model, Collection $list, int $id)
    {
        $model::destroy($id);
        return $list->filter(fn ($el) => $el->id != $id);
    }
}
