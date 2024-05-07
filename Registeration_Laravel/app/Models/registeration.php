<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registeration extends Model
{
  protected $table = 'registeration';
  protected $fillable = [
    'name', 'username', 'password',  'email', 'phone', 'address', 'birthday', 'image',
];

protected $hidden = [
    'password',
];
}
