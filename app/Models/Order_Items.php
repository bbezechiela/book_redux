<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Items extends Model
{
    use HasFactory;

    public function order() {
        return $this->belongsTo(Orders::class, 'order_id');
    }
    public function book() {
        return $this->belongsTo(Books::class, 'book_id');
    }

    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'book_id',
        'bar_code'
    ];
}
