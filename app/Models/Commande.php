<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commandes';
    public $timestamps = false;

    protected $fillable = ['user_id', 'statut'];

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $attributes = ['statut' => 'envoye'];

    public function pizza (){
        return $this->belongsToMany(pizza::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
