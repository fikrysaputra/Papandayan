<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'pesanan',
        'jumlah',
        'hari',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('id');
    }
}
