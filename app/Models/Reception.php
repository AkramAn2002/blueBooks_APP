<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    use HasFactory;
    protected $table = 'reception';
    protected $fillable = [
        'societe','phone','Email','nombreFacture','nombreDocumentbanquaire'
     ];
}
