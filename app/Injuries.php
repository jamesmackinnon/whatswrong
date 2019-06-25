<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Injuries extends Model
{
    protected $fillable = ['knee', 'hip', 'spinal', 'wrist', 'whiplash'];
}
