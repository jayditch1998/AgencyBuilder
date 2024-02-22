<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLevelModel extends Model
{
  use HasFactory;

  protected $table = 'user_levels';
  protected $guarded = [];

}
