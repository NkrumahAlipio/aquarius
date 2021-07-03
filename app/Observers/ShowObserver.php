<?php

namespace App\Observers;

use App\Models\Show;

class ShowObserver
{


    public function deleting(Show $show)
    {
        foreach ($show->animais as $animal) {
            $animal->shows()->detach($show);
        }
    }
}
