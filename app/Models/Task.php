<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that should be shown in lists.
     *
     * @var array
     */
    protected $listable = [
        'id',
        'name',
        'description',
        'status_id',
        'category_id',
        'user_id',
        'is_starred',
        'icon',
        'color',
        'expires_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'status_id',
        'category_id',
        'user_id',
        'is_starred',
        'icon',
        'color',
        'expires_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
