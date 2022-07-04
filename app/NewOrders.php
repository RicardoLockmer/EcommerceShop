<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewOrders extends Model
{
    use HasFactory;

    public function sizes(){
        return $this->belongsTo(itemSizes::class, "item_sizes_id", "id");
    }

    protected $fillable = [
        'item_sizes_id',
        'user_id' ,
        'store_id',
        'quantity',
        'total_price',
        'deliver_city',
        'deliver_address',
        'deliver_reference',
        'deliver_by',
        'isAccepted',
        'isSent',
        'isDelivered',
        'isRejected',
        'purchase_date',
        'accepted_date',
        'deliver_date',
        'rejected_date',
        'created_at',
        'updated_at'
        
        
];

}
