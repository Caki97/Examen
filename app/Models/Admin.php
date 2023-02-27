<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'email';

    static $rules = [
		'email' => 'required',
		'comentarios' => 'required',
    ];

    protected $fillable = [
        'email',
        'comentarios'
    ];

    public function user()
    {
        return $this->belongsTo(Prueba::class,'email');
    }
}
