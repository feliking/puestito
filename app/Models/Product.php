<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function documents () {
        return $this->belongsToMany(Document::class, 'product_document', 'product_id', 'document_id');
    }

    public function category () {
        return $this->belongsTo(Category::class);
    }

    public function colors () {
        return $this->hasMany(Color::class);
    }
}
