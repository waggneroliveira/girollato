<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use App\Services\ActivityLogService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use Notifiable, HasFactory, LogsActivity;
    
    protected $fillable = [
        'title',
        'slug',
        'active',
        'highlight',
        'path_image',
        'sorting',
    ];

    public function blogs(){
        return $this->hasMany(Blog::class, 'product_category_id');
    }

    public function scopeActive($query){
        return $query->where('active', 1);
    }

    public function scopeHighlightOnly($query)
    {
        return $query->where('highlight', 1);
    }
    public function scopeSorting($query){
        return $query->orderby('sorting', 'ASC');
    }

    public function getActivitylogOptions(): LogOptions
    {
        $activityLogService = new ActivityLogService($this);
        
        return LogOptions::defaults()
            ->logOnly($activityLogService->getLoggableAttributes());
    }
}
