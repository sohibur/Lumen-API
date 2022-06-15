<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_kelas extends Model
{
    //
    protected $fillable = ['kelas', 'wali_kelas', 'ketua_kelas', 'jumlah_siswa'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
