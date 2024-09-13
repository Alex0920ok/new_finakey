<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    use HasFactory;
    
    protected $table = 'formfields';

    protected $fillable = [
        'user_id',
        'form_id',
        'field_id',
        'field_name',
        'value',
        'field_type',
        'rm_id',
        'sc_id',
        'rm_modified_at',
        'sc_modified_at',
        'state'
    ];

    public function url()
    {
        return route('documents.download', ['filename' => $this->value]);
    }

}
