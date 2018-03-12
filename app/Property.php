<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    
    public function formattedPrice() {
        return number_format($this->price);
    }
}
