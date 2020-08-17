<?php

namespace App\Models\Ims;

use Illuminate\Database\Eloquent\Model;

class ItemCode extends Model
{
    protected $guarded = ['id'];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function stockItem()
    {
        return $this->hasOne(StockItem::class);
    }
}
