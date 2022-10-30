<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{

    use HasFactory;

    protected $table = 'detailtransaksi';

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'idtransaksi');
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'idmenu');
    }
}
