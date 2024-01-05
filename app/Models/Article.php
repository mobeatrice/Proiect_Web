<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'titlu',
        'data_creare',
        'data_modificare',
        'continut_articol',
        'autor',
        'editor',
        'status',
        'id_categorie'
    ];

    public function category()
    {
        return $this->belongsTo(Categorie::class, 'id_categorie');
    }

    public function nume_autor()
    {
        return $this->belongsTo(User::class, 'autor');
    }

}
