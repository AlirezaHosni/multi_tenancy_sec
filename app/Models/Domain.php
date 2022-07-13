<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends \Stancl\Tenancy\Database\Models\Domain
{
    use HasFactory;

    protected $fillable = ['domain', 'tenant_id'];
}
