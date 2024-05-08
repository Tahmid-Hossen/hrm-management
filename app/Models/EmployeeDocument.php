<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDocument extends Model
{
    use HasFactory;

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class, 'document_type');
    }
}
