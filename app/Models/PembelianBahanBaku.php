<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianBahanBaku extends Model
{
    use HasFactory;
        /**
     * @var string $table
     */
    protected $table = 'pembelianbahanbaku';

    public function bahanbaku()
    {
        return $this->belongsTo(BahanBaku::class, 'idbahanbaku')->withTrashed();
    }
}
