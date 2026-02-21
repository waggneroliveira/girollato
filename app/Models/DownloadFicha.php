<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DownloadFicha extends Model
{
    use Notifiable, HasFactory;
    
    protected $fillable = [
        'name',
        'cnpj',
        'phone'
    ];
}
