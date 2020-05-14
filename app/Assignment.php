<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function complete()
    {
        $this->completed_at = true;
        $this->save();
    }

    public function uncomplete()
    {
        $this->completed_at = false;
        $this->save();
    }
}
