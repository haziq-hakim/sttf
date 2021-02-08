<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklists extends Model
{
    protected $fillable = ['description', 'item_id'];
}
