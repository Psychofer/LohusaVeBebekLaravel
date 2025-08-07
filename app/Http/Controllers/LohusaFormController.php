<?php

namespace App\Http\Controllers;

use App\Models\LohusaForm;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LohusaFormController extends Controller
{
    public function index()
    {
        $forms = LohusaForm::orderBy('created_at', 'desc')->get();
        return view('lohusa.index', compact('forms'));
    }

    public function create()
    {
        return view('lohusa.create');
    }

    public function store(Request $request)
    {
        $jsonFields = [
            'sorun_paylasma',
            'gecmis_tibbi_oyku_kendisi',
            'gecmis_tibbi_oyku_ailesi',
            'gebelik_problemleri_son',
            'gebelik_problemleri_onceki',
            'dogum_problemleri_son',
            'dogum_problemleri_onceki',
            'postpartum_problemleri',
            'postpartum_sikayetleri',
            'ap_yontem_gecmis',
            'geleneksel_uygulamalar',
            'muayene_bulgulari',
            'cinsel_durum',
            'abdomen_bulgulari',
            'uriner_bulgular',
            'barsak_bulgular',
            'alt_ekstremite',
            'psikolojik_belirtiler',
            'anne_bebek_iliskisi',
            'emzirme_bulgular',
            'sut_yeterliligi',
            'egitim_istekleri',
            'uykusuzluk',
            'bas_bulgular',
            'sacli_deri_bulgular',
            'yuz_bulgular',
            'goz_bulgular',
            'burun_bulgular',
            'agiz_disfer_bulgular',
            'bogaz_bulgular',
            'solunum_bulgular',
            'gogus_bulgular',

            // Bebek formu
            'deri', 'bas', 'gozler', 'burun', 'agiz', 'kulak', 'boyun', 'gogus',
            'abdomen', 'kasik', 'genital', 'solunum_sistemi', 'kvs', 'gis',
            'uriner', 'kas_iskelet', 'norolojik',
        ];

        foreach ($jsonFields as $field) {
            $value = $request->input($field, []);
            $request->merge([
                $field => json_encode($value),
            ]);
        }

        // $booleanFields = [

           
        // ];

        // foreach ($booleanFields as $field) {
        //     $request->merge([
        //         $field => filter_var($request->input($field), FILTER_VALIDATE_BOOLEAN),
        //     ]);
        // }

        $request->merge([
            'fiziksel_muayene' => json_encode($this->collectCheckboxFields($request, $this->getFizikselMuayeneKeys())),
        ]);

        $validated = $request->validate([

            'ucretsiz_saglik_bilgisi' => 'nullable|string',
            'gecmis_tibbi_oyku_kendisi' => 'nullable|json',
            'gecmis_tibbi_oyku_ailesi' => 'nullable|json',
            'normal_sure_25_kisa' => 'nullable|string',
            'normal_sure_35_uzun' => 'nullable|string',
            'kanama_sure_3_kisa' => 'nullable|string',
            'kanama_sure_7_uzun' => 'nullable|string',
            'siklus_duzenli' => 'nullable|string',
            'cocuklarin_saglik_durumu' => 'nullable|json',
            'gebelik_problemleri_son' => 'nullable|json',
            'gebelik_problemleri_onceki' => 'nullable|json',
            'postpartum_problemleri' => 'nullable|json',
            'ilac_kullaniyor_mu' => 'nullable|string',
            'postpartum_sikayetleri' => 'nullable|json',
            'sigara_var_mi' => 'nullable|string',
            'alkol_var_mi' => 'nullable|string',
            'dogum_sonrasi_kontrol' => 'nullable|string',
            'geleneksel_uygulamalar' => 'nullable|json',
            'psikolojik_belirtiler' => 'nullable|json',
            'anne_bebek_iliskisi' => 'nullable|json',
            'emzirme_bulgular' => 'nullable|json',
            'sut_yeterliligi' => 'nullable|json',
            'egitim_istekleri' => 'nullable|json',
            'kilo' => 'nullable|numeric',
            'boy' => 'nullable|numeric',
            'bas_cevresi' => 'nullable|numeric',
            'gogus_cevresi' => 'nullable|numeric',
            'deri' => 'nullable|json',
            'bas' => 'nullable|json',
            'gozler' => 'nullable|json',
            'burun' => 'nullable|json',
            'agiz' => 'nullable|json',
            'kulak' => 'nullable|json',
            'boyun' => 'nullable|json',
            'gogus' => 'nullable|json',
            'abdomen' => 'nullable|json',
            'kasik' => 'nullable|json',
            'genital' => 'nullable|json',
            'solunum_sistemi' => 'nullable|json',
            'kvs' => 'nullable|json',
            'gis' => 'nullable|json',
            'uriner' => 'nullable|json',
            'kas_iskelet' => 'nullable|json',
            'norolojik' => 'nullable|json',
            'bas_bulgular' => 'nullable|json',
            'sacli_deri_bulgular' => 'nullable|json',
            'yuz_bulgular' => 'nullable|json',
            'goz_bulgular' => 'nullable|json',
            'burun_bulgular' => 'nullable|json',
            'agiz_disfer_bulgular' => 'nullable|json',
            'bogaz_bulgular' => 'nullable|json',
            'solunum_bulgular' => 'nullable|json',
            'gogus_bulgular' => 'nullable|json',
            'emzirmeye_uygun' => 'nullable|string',
            'fundus_palpe_ediliyor' => 'nullable|string',
            'abdomen_bulgulari' => 'nullable|json',
            'uriner_bulgular' => 'nullable|json',
            'barsak_bulgular' => 'nullable|json',
            'alt_ekstremite' => 'nullable|json',
            'uykusuzluk' => 'nullable|json',
            'istahsizlik' => 'nullable|string',
            'vitamin_destegi' => 'nullable|string',
            'yiyemedigi_yiyecek' => 'nullable|string',
            'kontrollerin_onemi_biliniyor' => 'nullable|string',
            'ad_soyad' => 'required|string|max:255|regex:/^[\p{L}\s]+$/u',
            'yas' => 'nullable|integer',
            'egitim_durumu' => 'nullable|string',
            'meslek' => 'nullable|string',
            'saglik_guvence' => 'nullable|string',
            'akraba_evliligi' => 'nullable|string',
            'evlilik_yili' => 'nullable|string',
            'kan_grubu' => 'nullable|string',
            'gebelik_planlandimi' => 'nullable|string',
            'dogum_yeri' => 'nullable|string',
            'es_yas' => 'nullable|integer',
            'es_dogum_yeri' => 'nullable|string',
            'es_egitim' => 'nullable|string',
            'es_meslek' => 'nullable|string',
            'es_kan_grubu' => 'nullable|string',
            'es_telefon' => 'nullable|string',
            'es_adres' => 'nullable|string',
            'ailenin_hastalik_durumu' => 'nullable|string',
            'aile_mevcut_hastaliklar' => 'nullable|string',
            'aile_ebeden_beklentiler' => 'nullable|string',
            'sosyoekonomik_durum' => 'nullable|string',
            'ailede_karar_veren' => 'nullable|string',
            'aile_duygu_ortaya_koyma' => 'nullable|string',
            'cocuga_verilen_onem' => 'nullable|string',
            'ev_tipi' => 'nullable|string',
            'ev_odalar_islev_isi_hava' => 'nullable|string',
            'pencere_aydinlik' => 'nullable|string',
            'banyo_var_mi' => 'nullable|string',
            'banyo_temizlik' => 'nullable|string',
            'tuvalet_konum' => 'nullable|string',
            'tuvalet_durumu' => 'nullable|string',
            'bakim_verenler' => 'nullable|string',
            'yemek_pisirme_besin_degeri' => 'nullable|string',
            'yiyecek_saklama_kosullari' => 'nullable|string',
            'gecmis_tibbi_oyku_diger_aciklama' => 'nullable|string',
            'menars_yasi' => 'nullable|integer',
            'gunde_kac_ped' => 'nullable|integer',
            'para' => 'nullable|integer',
            'abortus' => 'nullable|integer',
            'yasayan' => 'nullable|integer',
            'gravida' => 'nullable|integer',
            'cocuklarin_cinsiyeti' => 'nullable|string',
            'cocuklarin_saglik_durumu' => 'nullable|string',
            'dogum_yeri_kisi_sekli' => 'nullable|string',
            'abortus_yeri_kisi' => 'nullable|string',
            'postpartum_gun' => 'nullable|integer',
            'hastaneden_cikis_gun' => 'nullable|integer',
            'ne_yapildi' => 'nullable|string',
            'ap_hap_sure' => 'nullable|string',
            'ap_hap_neden' => 'nullable|string',
            'ap_ria_sure' => 'nullable|string',
            'ap_ria_neden' => 'nullable|string',
            'ap_kondom_sure' => 'nullable|string',
            'ap_kondom_neden' => 'nullable|string',
            'ap_geleneksel_yontem_sure' => 'nullable|string',
            'ap_geleneksel_yontem_neden' => 'nullable|string',
            'su_an_ap_yontem' => 'nullable|string',
            'bebek_cinsiyet' => 'nullable|string',
            'anne_tercihi' => 'nullable|string',
            'cinsiyet_duygu' => 'nullable|string',
            'bebek_dusunceleri' => 'nullable|string',
            'endise_var_mi' => 'nullable|string',
            'aile_yaklasim' => 'nullable|string',
            'dogum_sonrasi_cinsel_yasam' => 'nullable|string',
            'muayene_tarihi' => 'nullable|date',
            'postpartum_hafta' => 'nullable|integer',
            'gebelik_kilosu' => 'nullable|integer',
            'mevcut_kilo' => 'nullable|integer',
            'ates' => 'nullable|numeric',
            'nabiz' => 'nullable|numeric',
            'solunum' => 'nullable|numeric',
            'tansiyon' => 'nullable|string',
            'meme_ucu' => 'nullable|string',
            'meme_bakimi' => 'nullable|string',
            'sutyen_kullanimi' => 'nullable|string',
            'losia_tipi' => 'nullable|string',
            'hemoglobin' => 'nullable|numeric',
            'diyet_var_mi' => 'nullable|string',
            'kilo_sorunu_tipi' => 'nullable|string',
            'yeme_aliskanligi' => 'nullable|string',
            'vitamin_icerigi' => 'nullable|string',
            'alinan_besin_gruplari' => 'nullable|string',
            'bebek_beslenmesi' => 'nullable|string',
            'emzirme_suresi' => 'nullable|integer',
            'dogum_tarihi' => 'nullable|date',
            'kac_haftalik' => 'nullable|string',
            'izlem_sayisi' => 'nullable|integer',
            'termin_durumu' => 'nullable|string',
            'cinsiyet' => 'nullable|string',
            'kacinci_cocuk' => 'nullable|integer',
            'ebenin_yorumu' => 'nullable|string',
            'sorun_paylasma' => 'nullable|json',
            'dogum_problemleri_onceki' => 'nullable|json',
            'dogum_problemleri_son' => 'nullable|json',
            'gebelik_problemleri_onceki' => 'nullable|json',
            'gebelik_problemleri_son' => 'nullable|json',
            ],[
            'ad_soyad.regex' => 'Ad Soyad sadece harf ve boşluk içerebilir.',
            'ad_soyad.min' => 'Ad Soyad en az 5 karakter olmalıdır.',
            'ad_soyad.max' => 'Ad Soyad en fazla 60 karakter olmalıdır.',
        ]);

        LohusaForm::create($validated);

        return redirect()->route('lohusa.index')->with('success', 'Form başarıyla kaydedildi.');
    }

    public function show(LohusaForm $lohusaForm)
    {
        return view('lohusa.show', compact('lohusaForm'));
    }

    public function exportPdf($id)
    {
        $lohusa = LohusaForm::findOrFail($id);
        $pdf = Pdf::loadView('lohusa.pdf', compact('lohusa'))->setPaper('a4', 'portrait')->setOptions(['defaultFont' => 'DejaVu Sans']);
        return $pdf->download('lohusa-izlem-formu.pdf');
    }

    private function getFizikselMuayeneKeys()
    {
        return [
            'bas_agrisi', 'bas_donmesi', 'kepek', 'bit', 'dokulme', 'sac_hijyen',
            'yuz_solukluk', 'yuz_odem', 'konjuktiva_solukluk', 'sulanma_akinti',
            'capaklanma', 'goz_kapagi_odem', 'burun_tikaniklik', 'burun_akinti',
            'burun_kanamasi', 'dudak_solukluk', 'agiz_aft', 'dis_curuk', 'dis_eti_kanama',
            'dis_hijyen', 'hipertroidi', 'lenf_sisme', 'tonsil_sisme', 'solunum_normal',
            'nefes_darligi', 'akciger_ses_patoloji', 'oksuruk', 'gogus_agrisi',
            'kalp_sesi', 'kirmizlik', 'hassasiyet', 'dolgunluk', 'meme_catlagi',
            'meme_absesi', 'meme_ent', 'gecmis_meme_hastalik'
        ];
    }

    private function collectCheckboxFields(Request $request, array $keys)
    {
        $result = [];
        foreach ($keys as $key) {
            $result[$key] = $request->has($key);
        }
        return $result;
    }

    
    public function sonKayitlar()
    {
        $sonLohusaKayitlar = LohusaForm::latest()->take(3)->get();
        return view('welcome', compact('sonLohusaKayitlar'));
    }


    public function destroy($id)
    {
        LohusaForm::destroy($id);
        return redirect()->route('lohusa.index')->with('success', 'Kayıt silindi.');
    }


}


