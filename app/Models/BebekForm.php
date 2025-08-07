<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BebekForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'dogum_tarihi', 'kac_haftalik', 'muayene_tarihi', 'izlem_sayisi',
        'termin_durumu', 'cinsiyet', 'kacinci_cocuk', 'kan_grubu',
        'ates', 'nabiz', 'solunum', 'kilo', 'boy', 'bas_cevresi', 'gogus_cevresi',
        'deri', 'bas', 'gozler', 'burun', 'agiz', 'kulak', 'boyun',
        'gogus', 'abdomen', 'kasik', 'genital', 'solunum_sistemi', 'kvs',
        'gis', 'uriner', 'kas_iskelet', 'norolojik'
    ];

    protected $casts = [
        
        'deri' => 'array',
        'bas' => 'array',
        'gozler' => 'array',
        'burun' => 'array',
        'agiz' => 'array',
        'kulak' => 'array',
        'boyun' => 'array',
        'gogus' => 'array',
        'abdomen' => 'array',
        'kasik' => 'array',
        'genital' => 'array',
        'solunum_sistemi' => 'array',
        'kvs' => 'array',
        'gis' => 'array',
        'uriner' => 'array',
        'kas_iskelet' => 'array',
        'norolojik' => 'array',
    ];
}
