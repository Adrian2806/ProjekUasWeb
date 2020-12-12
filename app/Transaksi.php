<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table='transaksi';
    protected $primaryKey='id_transaksi';
    protected $fillable=['id_admin','id_kostumer','id_mobil','tgl_masuk','tgl_keluar','tgl_bayar','biaya','denda','jumlah_bayar','tempo']; 
}