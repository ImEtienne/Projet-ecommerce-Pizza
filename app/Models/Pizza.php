<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pizza extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'pizzas';
    public $timestamps = false;

    protected $fillable = ['nom', 'description', 'prix'];

    public function commandes(){
        $this->belongsToMany(Commande::class);
    }
}
