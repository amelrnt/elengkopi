<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BahanBaku extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * @var string $table
     */
    protected $table = 'bahanbaku';
}
