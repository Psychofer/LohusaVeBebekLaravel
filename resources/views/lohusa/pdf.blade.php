<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lohusa ve Bebek İzlem Formu</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 11px; /* Slightly smaller font for more content */
            line-height: 1.5;
            margin: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        h3 {
            background: #e9ecef; /* Light grey background */
            color: #495057; /* Dark grey text */
            padding: 8px 12px;
            margin-top: 25px; /* Space above section title */
            margin-bottom: 15px; /* Space below section title */
            border-left: 4px solid #007bff; /* Blue border on the left */
            font-size: 14px;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Subtle shadow */
        }
        td, th {
            border: 1px solid #dee2e6; /* Lighter border color */
            padding: 8px 12px;
            text-align: left;
            vertical-align: top;
        }
        th {
            background-color: #f8f9fa; /* Very light grey background for headers */
            color: #495057;
            width: 35%; /* Slightly wider header column */
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Zebra striping for rows */
        }
        table td:empty::after {
            content: 'Veri yok'; /* Display "Veri yok" for empty cells */
            color: #999;
            font-style: italic;
        }
    </style>
</head>

<body>
    <h2>Lohusa ve Bebek İzlem Formu</h2>

    @php
    function formatValue($value) {
        if (is_array($value)) {
            return count($value) ? implode(', ', $value) : 'Seçim yok';
        }

        if (is_string($value) && str_starts_with($value, '[')) {
            $decoded = json_decode($value, true);
            return is_array($decoded) && count($decoded) ? implode(', ', $decoded) : 'Seçim yok';
        }

        // Handle simple JSON strings that are not arrays (e.g., single value in quotes)
        $decoded = json_decode($value);
        if ($decoded !== null && !is_array($decoded) && !is_object($decoded)) {
             return $decoded !== '' ? $decoded : 'Veri yok';
        }


        return $value !== null && $value !== '' ? $value : 'Veri yok';
    }

    $groups = [
        'Tanıtıcı Bilgiler' => ['ad_soyad', 'yas', 'egitim_durumu', 'meslek', 'saglik_guvence', 'akraba_evliligi', 'evlilik_yili', 'kan_grubu', 'gebelik_planlandimi', 'dogum_yeri'],
        'Eş Bilgileri' => ['es_yas', 'es_dogum_yeri', 'es_egitim', 'es_meslek', 'es_kan_grubu', 'es_telefon', 'es_adres'],
        'Aile ve Sosyal Durum' => ['ailenin_hastalik_durumu', 'kontrollerin_onemi_biliniyor', 'aile_mevcut_hastaliklar', 'aile_ebeden_beklentiler', 'ucretsiz_saglik_bilgisi', 'sosyoekonomik_durum', 'ailede_karar_veren', 'aile_duygu_ortaya_koyma', 'sorun_paylasma', 'cocuga_verilen_onem'],
        'Ev Durumu ve Hijyen' => ['ev_tipi', 'ev_odalar_islev_isi_hava', 'pencere_aydinlik', 'banyo_var_mi', 'banyo_temizlik', 'tuvalet_konum', 'tuvalet_durumu', 'bakim_verenler', 'yemek_pisirme_besin_degeri', 'yiyecek_saklama_kosullari'],
        'Tıbbi Öykü' => ['gecmis_tibbi_oyku_kendisi', 'gecmis_tibbi_oyku_ailesi', 'gecmis_tibbi_oyku_diger_aciklama'],
        'Menstrüel Durum' => ['menars_yasi', 'normal_sure_25_kisa', 'normal_sure_35_uzun', 'kanama_sure_3_kisa', 'kanama_sure_7_uzun', 'siklus_duzenli', 'gunde_kac_ped'],
        'Gebelik ve Doğum' => ['para', 'abortus', 'yasayan', 'gravida', 'cocuklarin_cinsiyeti', 'cocuklarin_saglik_durumu', 'dogum_yeri_kisi_sekli', 'abortus_yeri_kisi', 'gebelik_problemleri_son', 'gebelik_problemleri_onceki', 'dogum_problemleri_son', 'dogum_problemleri_onceki'],
        'Postpartum Süreç' => ['postpartum_problemleri', 'postpartum_gun', 'hastaneden_cikis_gun', 'ilac_kullaniyor_mu', 'postpartum_sikayetleri', 'ne_yapildi'],
        'Alışkanlıklar' => ['sigara_var_mi', 'alkol_var_mi', 'dogum_sonrasi_kontrol'],
        'Aile Planlaması' => ['ap_hap_sure', 'ap_hap_neden', 'ap_ria_sure', 'ap_ria_neden', 'ap_kondom_sure', 'ap_kondom_neden', 'ap_geleneksel_yontem_sure', 'ap_geleneksel_yontem_neden', 'su_an_ap_yontem'],
        'Bebek Beslenmesi ve Gelişimi' => ['bebek_cinsiyet', 'anne_tercihi', 'cinsiyet_duygu', 'bebek_dusunceleri', 'endise_var_mi', 'aile_yaklasim', 'dogum_sonrasi_cinsel_yasam'],
        'Geleneksel Uygulamalar' => ['geleneksel_uygulamalar'],
        'Muayene Bulgıları' => ['ates', 'nabiz', 'tansiyon', 'solunum', 'postpartum_hafta', 'gebelik_kilosu', 'mevcut_kilo'],
        'Fiziksel Muayene' => ['bas_bulgular', 'sacli_deri_bulgular','yuz_bulgular','goz_bulgular','burun_bulgular','agiz_disfer_bulgular','bogaz_bulgular','solunum_bulgular','gogus_bulgular'],
        'Göğüs ve Emzirme' => ['meme_ucu', 'emzirmeye_uygun', 'meme_bakimi', 'sutyen_kullanimi', 'fundus_palpe_ediliyor', 'losia_tipi'],
        'Emzirmenin Değerlendirilmesi' => ['emzirme_suresi', 'emzirme_bulgular', 'sut_yeterliligi'],
        'Genel Sistem Değerlendirmeleri' => ['abdomen_bulgulari', 'uriner_bulgular', 'barsak_bulgular', 'alt_ekstremite'],
        'Beslenme Durumu' => ['uykusuzluk', 'hemoglobin', 'diyet_var_mi', 'kilo_sorunu_tipi', 'istahsizlik', 'yeme_aliskanligi', 'vitamin_destegi', 'vitamin_icerigi', 'yiyemedigi_yiyecek', 'alinan_besin_gruplari', 'bebek_beslenmesi'],
        'Psikolojik Değerlendirme' => ['psikolojik_belirtiler'],
        'Anne-Bebek İlişkisi' => ['anne_bebek_iliskisi'],
        'Eğitim İstekleri' => ['egitim_istekleri'],
        'Ebenin Notu' => ['ebenin_yorumu'],
        'Bebek Bilgileri' => ['dogum_tarihi', 'kac_haftalik', 'muayene_tarihi', 'izlem_sayisi', 'termin_durumu', 'cinsiyet', 'kacinci_cocuk', 'kan_grubu'],
        'Bebekte Klinik Bulgular' => ['ates','nabiz','solunum','kilo', 'boy', 'bas_cevresi', 'gogus_cevresi', 'deri', 'bas', 'gozler', 'burun', 'agiz', 'kulak', 'boyun', 'gogus', 'abdomen', 'kasik', 'genital', 'solunum_sistemi', 'kvs', 'gis', 'uriner', 'kas_iskelet', 'norolojik']
    ];
    @endphp

    @foreach($groups as $title => $fields)
        <h3>{{ $title }}</h3>
        <table>
            @foreach($fields as $field)
                @php
                    $label = ucwords(str_replace('_', ' ', $field));
                    $value = $lohusa->{$field} ?? null;
                @endphp
                <tr>
                    <th>{{ $label }}</th>
                    <td>{{ formatValue($value) }}</td>
                </tr>
            @endforeach
        </table>
    @endforeach

</body>
</html>




