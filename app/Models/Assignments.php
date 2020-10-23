<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignments extends Model {
    use HasFactory;

    // Methods
    public function complete() {
        $this->completed = true;
        $this->save();
    }
}
