<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karting extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'lokacija','radnoVreme','pravilaStaze','cena', 'usluge'
    ];
    use HasFactory;
    public function rezervacijas(){

        return $this->hasMany(Rezervacija::class);
    }
}
