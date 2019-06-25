<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Injuries extends Model
{
    protected $fillable = ['patient', 'knee', 'hip', 'spinal', 'wrist', 'whiplash'];
}
