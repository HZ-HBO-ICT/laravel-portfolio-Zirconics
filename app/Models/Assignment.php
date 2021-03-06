<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    /**
     * Function that sets the assignment as completed
     *
     * @return void
     */
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }
}
