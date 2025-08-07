<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LohusaForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'ad_soyad', 'yas', 'egitim_durumu', 'meslek', 'saglik_guvence', 'akraba_evliligi', 'evlilik_yili', 'kan_grubu',
        'gebelik_planlandimi', 'dogum_yeri', 'es_yas', 'es_dogum_yeri', 'es_egitim', 'es_meslek', 'es_kan_grubu',
        'es_telefon', 'es_adres', 'ailenin_hastalik_durumu', 'kontrollerin_onemi_biliniyor', 'aile_mevcut_hastaliklar',
        'aile_ebeden_beklentiler', 'ucretsiz_saglik_bilgisi', 'sosyoekonomik_durum', 'ailede_karar_veren',
        'aile_duygu_ortaya_koyma', 'sorun_paylasma', 'cocuga_verilen_onem', 'ev_tipi', 'ev_odalar_islev_isi_hava',
        'pencere_aydinlik', 'banyo_var_mi', 'banyo_temizlik', 'tuvalet_konum', 'tuvalet_durumu', 'bakim_verenler',
        'yemek_pisirme_besin_degeri', 'yiyecek_saklama_kosullari', 'gecmis_tibbi_oyku_kendisi', 'gecmis_tibbi_oyku_ailesi',
        'gecmis_tibbi_oyku_diger_aciklama', 'menars_yasi', 'normal_sure_25_kisa', 'normal_sure_35_uzun',
        'kanama_sure_3_kisa', 'kanama_sure_7_uzun', 'siklus_duzenli', 'gunde_kac_ped', 'para', 'abortus', 'yasayan',
        'gravida', 'cocuklarin_cinsiyeti', 'cocuklarin_saglik_durumu', 'dogum_yeri_kisi_sekli', 'abortus_yeri_kisi',
        'gebelik_problemleri_son', 'gebelik_problemleri_onceki', 'dogum_problemleri_son', 'dogum_problemleri_onceki',
        'postpartum_problemleri', 'postpartum_gun', 'hastaneden_cikis_gun', 'ilac_kullaniyor_mu', 'postpartum_sikayetleri',
        'ne_yapildi', 'sigara_var_mi', 'alkol_var_mi', 'dogum_sonrasi_kontrol', 'ap_hap_sure', 'ap_hap_neden',
        'ap_ria_sure', 'ap_ria_neden', 'ap_kondom_sure', 'ap_kondom_neden', 'ap_geleneksel_yontem_sure',
        'ap_geleneksel_yontem_neden', 'su_an_ap_yontem', 'bebek_cinsiyet', 'anne_tercihi', 'cinsiyet_duygu',
        'bebek_dusunceleri', 'endise_var_mi', 'aile_yaklasim', 'dogum_sonrasi_cinsel_yasam', 'geleneksel_uygulamalar',
        'muayene_tarihi', 'postpartum_hafta', 'gebelik_kilosu', 'mevcut_kilo', 'ates', 'nabiz', 'solunum', 'tansiyon',
        'bas_bulgular','sacli_deri_bulgular','yuz_bulgular','goz_bulgular','burun_bulgular','agiz_disfer_bulgular',
        'bogaz_bulgular','solunum_bulgular','gogus_bulgular','meme_ucu', 'emzirmeye_uygun', 'meme_bakimi', 'sutyen_kullanimi', 'fundus_palpe_ediliyor',
        'losia_tipi', 'abdomen_bulgulari', 'uriner_bulgular', 'barsak_bulgular', 'alt_ekstremite',
        'uykusuzluk', 'hemoglobin', 'diyet_var_mi', 'kilo_sorunu_tipi', 'istahsizlik', 'yeme_aliskanligi',
        'vitamin_destegi', 'vitamin_icerigi', 'yiyemedigi_yiyecek', 'alinan_besin_gruplari', 'bebek_beslenmesi',
        'psikolojik_belirtiler', 'anne_bebek_iliskisi', 'emzirme_bulgular', 'emzirme_suresi', 'sut_yeterliligi',
        'egitim_istekleri', 'ebenin_yorumu',

        'dogum_tarihi', 'kac_haftalik', 'izlem_sayisi', 'termin_durumu', 'cinsiyet', 'kacinci_cocuk', 'bas_cevresi',
        'gogus_cevresi', 'kilo', 'boy',

        'deri', 'bas', 'gozler', 'burun', 'agiz', 'kulak', 'boyun', 'gogus', 'abdomen', 'kasik', 'genital',
        'solunum_sistemi', 'kvs', 'gis', 'uriner', 'kas_iskelet', 'norolojik',
    ];

    protected $casts = [
        'sorun_paylasma' => 'array',
        'gecmis_tibbi_oyku_kendisi' => 'array',
        'gecmis_tibbi_oyku_ailesi' => 'array',
        'gebelik_problemleri_son' => 'array',
        'gebelik_problemleri_onceki' => 'array',
        'dogum_problemleri_son' => 'array',
        'dogum_problemleri_onceki' => 'array',
        'postpartum_problemleri' => 'array',
        'postpartum_sikayetleri' => 'array',
        'geleneksel_uygulamalar' => 'array',
        'psikolojik_belirtiler' => 'array',
        'anne_bebek_iliskisi' => 'array',
        'emzirme_bulgular' => 'array',
        'sut_yeterliligi' => 'array',
        'egitim_istekleri' => 'array',
        'bas_bulgular' => 'array',
        'sacli_deri_bulgular' => 'array',
        'yuz_bulgular' => 'array',
        'goz_bulgular' => 'array',
        'burun_bulgular' => 'array',
        'agiz_disfer_bulgular' => 'array',
        'bogaz_bulgular' => 'array',
        'solunum_bulgular' => 'array',
        'gogus_bulgular' => 'array',
        'abdomen_bulgulari' => 'array',
        'uriner_bulgular' => 'array',
        'barsak_bulgular' => 'array',
        'alt_ekstremite' => 'array',

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
        'uykusuzluk' => 'array',
    ];
}

