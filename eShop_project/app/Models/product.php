<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        "prod_name",
        "price",
        "content",
        "cover_img",
        "id_cat"
    ];

    //cấu hình liên kết với khóa ngoại
    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class, "id_cat", "id");
    }
}
