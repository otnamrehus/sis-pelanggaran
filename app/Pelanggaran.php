<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pelanggaran extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'pelanggaran'; //custom table name
    protected $primaryKey = 'id'; //custom id column
    public $timestamps = false; 

    protected $fillable = [
        'id', 'guru_id', 'kehadiran_id', 'nama_petugas'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
