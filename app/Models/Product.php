<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use App\Services\ActivityLogService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use Notifiable, HasFactory, LogsActivity;
    
    protected $casts = [
        'sizes' => 'array'
    ];
    
    protected $fillable = [
        'product_category_id',
        'title',
        'slug',
        'sizes',
        'description',
        'text',
        'path_image',
        'active',
        'sorting',
    ];

    public function category(){
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function scopeActive($query){
        return $query->where('active', 1);
    }

    public function scopeSorting($query){
        return $query->orderby('sorting', 'DESC');
    }

    public function getActivitylogOptions(): LogOptions
    {
        $activityLogService = new ActivityLogService($this);
        
        return LogOptions::defaults()
            ->logOnly($activityLogService->getLoggableAttributes());
    }
}
