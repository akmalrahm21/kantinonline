<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kantin extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pemasok', 'jenis_barang', 'nama_barang', 'harga', 'jumlah', 'gambar'];

    // Jika diperlukan, definisikan relasi ke pemasok
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_pemasok');
    }
}
