<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;
    
    protected $fillable = ['mahlzeit', 'datum', 'uhrzeit', 'ort', 'essen', 'getraenk', 'beschwerden', 'anmerkungen'];
}
