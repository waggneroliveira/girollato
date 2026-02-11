<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use App\Services\ActivityLogService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductGallery extends Model
{
    use Notifiable, HasFactory, LogsActivity;

    protected $fillable = [
        'product_id',
        'file',
        'sorting',
        'active'
    ];

    public function scopeActive($query){
        return $query->where('active', 1);
    }
    public function scopeSorting($query){
        return $query->orderBy('sorting', 'ASC');
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        $activityLogService = new ActivityLogService($this);
        
        return LogOptions::defaults()
            ->logOnly($activityLogService->getLoggableAttributes());
    }
}
