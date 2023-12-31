<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'news_id',
        'user_id',
    ];
    public function user() : BelongsTo {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function news() : BelongsTo {
        return $this->belongsTo(News::class,'news_id','id');
    }
}
