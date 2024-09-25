<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactReason extends Model
{
    use HasFactory;

    protected $table = 'contact_reasons';
    protected $fillable = ['description', 'description_en'];

    public function contactInfos()
    {
        return $this->hasMany(ContactInfo::class, 'contact_reason');
    }
}
