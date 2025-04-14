<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class KategoriModel extends Model
{
    use HasFactory;

    protected $table = 'm_kategori'; 
    
    protected $fillable = ['kategori_kode', 'kategori_nama'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $guard = [
    // ];
    // public function barang(): HasMany 
    // {
    //     return $this->hasMany(BarangModel::class, 'barang_id', 'barang_id');
    // }
}