<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikelModel extends Model
{
    use HasFactory;
    protected $table = "tb_artikel";
    protected $primaryKey = "id_artikel";
    public $incrementing = true;
    public $timestamps = true;
    public $fillable = [
        'id_artikel','user_id','judul','isi','tanggal_terbit','waktu','created_at','updated_at'
    ];
}
