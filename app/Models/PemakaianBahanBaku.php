<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemakaianBahanBaku extends Model
{
    use HasFactory;
    /**
     * @var string $table
     */

    protected $table = 'pemakaianbahanbaku';

    public function bahanbaku()
    {
        return $this->belongsTo(BahanBaku::class, 'idbahanbaku')->withTrashed();
    }
}
