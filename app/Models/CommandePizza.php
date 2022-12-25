<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandePizza extends Model
{
    use HasFactory;
    protected $table = 'commande_pizza';
    public $timestamps = false;

    protected $fillable = ['commande_id', 'pizza_id', 'qte'];


}
