<?php

declare(strict_types=1);

namespace App\DataProvier\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
  protected $fillable = [
    'name',
    'address',
  ];
}