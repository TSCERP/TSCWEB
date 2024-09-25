<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $table = 'contact_info';
    protected $fillable = [
        'fullname', 
        'email', 
        'company_name', 
        'phone_number', 
        'contact_reason', 
        'message'
    ];

    public function reason()
    {
        return $this->belongsTo(ContactReason::class, 'contact_reason');
    }
}
