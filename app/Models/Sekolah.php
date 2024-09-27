<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sekolah extends Model
{
    use HasFactory;

    protected $fillable =  ['namaSekolah',
                            'npsn',
                            'emailSekolah',
                            'namaKepalaSekolah',
                            'telpKepalaSekolah',
                            'namaWakasekKurikulum',
                            'telpWakasekKurikulum',
                            'namaBendahara',
                            'telpBendahara',
                            'namaOperator',
                            'telpOperator',
                            'jenjang',
                            'kabupaten'];
    
}
