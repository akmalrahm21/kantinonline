<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'barang', 'no_telp'];

    // Jika diperlukan, definisikan relasi ke kantin
    public function kantins()
    {
        return $this->hasMany(Kantin::class, 'id_pemasok');
    }
}
