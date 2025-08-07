@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Lohusa ve Bebek İzlem Formu - Detay</h2>

    @php
        function goster($deger) {
            if (is_array($deger)) return implode(', ', $deger);
            if (is_string($deger) && str_starts_with($deger, '[')) {
                $arr = json_decode($deger, true);
                return is_array($arr) ? implode(', ', $arr) : $deger;
            }
            return $deger !== null && $deger !== '' ? $deger : 'Veri yok';
        }
    @endphp

    {{-- Temel Bilgiler --}}
    <div class="card shadow mb-4">
        <div class="card-header bg-primary text-white">👩 Anne Temel Bilgiler</div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr><th>Ad Soyad</th><td>{{ $lohusaForm->ad_soyad }}</td></tr>
                <tr><th>Yaş</th><td>{{ goster($lohusaForm->yas) }}</td></tr>
                <tr><th>Kan Grubu</th><td>{{ goster($lohusaForm->kan_grubu) }}</td></tr>
                <tr><th>Gebelik Sayısı (Gravida)</th><td>{{ goster($lohusaForm->gravida) }}</td></tr>
                <tr><th>Abortus</th><td>{{ goster($lohusaForm->abortus) }}</td></tr>
                <tr><th>Yaşayan Çocuk</th><td>{{ goster($lohusaForm->yasayan) }}</td></tr>
                <tr><th>Doğum Yeri</th><td>{{ goster($lohusaForm->dogum_yeri) }}</td></tr>
                <tr><th>Bebek Cinsiyeti</th><td>{{ goster($lohusaForm->bebek_cinsiyet) }}</td></tr>
                <tr><th>Bebek Beslenmesi</th><td>{{ goster($lohusaForm->bebek_beslenmesi) }}</td></tr>
                <tr><th>Doğum Tarihi</th><td>{{ goster($lohusaForm->dogum_tarihi) }}</td></tr>
                <tr><th>Kaç Haftalık</th><td>{{ goster($lohusaForm->kac_haftalik) }}</td></tr>
                <tr><th>Muayene Tarihi</th><td>{{ goster($lohusaForm->muayene_tarihi) }}</td></tr>
                <tr><th>İzlem Sayısı</th><td>{{ goster($lohusaForm->izlem_sayisi) }}</td></tr>
                <tr><th>Emzirme Süresi (dk)</th><td>{{ goster($lohusaForm->emzirme_suresi) }}</td></tr>
                <tr><th>Emzirme Bulguları</th><td>{{ goster($lohusaForm->emzirme_bulgular) }}</td></tr>
                <tr><th>Süt Yeterliliği</th><td>{{ goster($lohusaForm->sut_yeterliligi) }}</td></tr>
                <tr><th>Psikolojik Belirtiler</th><td>{{ goster($lohusaForm->psikolojik_belirtiler) }}</td></tr>
                <tr><th>Eğitim İstekleri</th><td>{{ goster($lohusaForm->egitim_istekleri) }}</td></tr>
                <tr><th>Ebenin Yorumu</th><td>{{ goster($lohusaForm->ebenin_yorumu) }}</td></tr>
                <tr><th>Anne-Bebek İlişkisi</th><td>{{ goster($lohusaForm->anne_bebek_iliskisi) }}</td></tr>
                <tr><th>Anne Tercihi</th><td>{{ goster($lohusaForm->anne_tercihi) }}</td></tr>
                <tr><th>Cinsiyet Duygu</th><td>{{ goster($lohusaForm->cinsiyet_duygu) }}</td></tr>
                <tr><th>Bebek Düşünceleri</th><td>{{ goster($lohusaForm->bebek_dusunceleri) }}</td></tr>
                <tr><th>Endişe Var mı?</th><td>{{ $lohusaForm->endise_var_mi ? 'Evet' : 'Hayır' }}</td></tr>
                <tr><th>Aile Yaklaşım</th><td>{{ goster($lohusaForm->aile_yaklasim) }}</td></tr>
                <tr><th>Doğum Sonrası Cinsel Yaşam</th><td>{{ goster($lohusaForm->dogum_sonrasi_cinsel_yasam) }}</td></tr>
                <tr><th>Geleneksel Uygulamalar</th><td>{{ goster($lohusaForm->geleneksel_uygulamalar) }}</td></tr>
                <tr><th>İlaç Kullanıyor mu?</th><td>{{ $lohusaForm->ilac_kullaniyor_mu ? 'Evet' : 'Hayır' }}</td></tr>
                <tr><th>İlaç Kullanım Süresi</th><td>{{ goster($lohusaForm->ilac_kullanim_suresi) }}</td></tr>
                <tr><th>İlaç Kullanım Nedeni</th><td>{{ goster($lohusaForm->ilac_kullanim_nedeni) }}</td></tr>
                <tr><th>Postpartum Problemleri</th><td>{{ goster($lohusaForm->postpartum_problemleri) }}</td></tr>
                <tr><th>Postpartum Gün</th><td>{{ goster($lohusaForm->postpartum_gun) }}</td></tr>
            </table>
        </div>
    </div>

    {{-- Fiziksel Muayene --}}
    <div class="card shadow mb-4">
        <div class="card-header bg-success text-white">🩺 Fiziksel Muayene</div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr><th>Baş Bulguları</th><td>{{ goster($lohusaForm->bas_bulgular) }}</td></tr>
                <tr><th>Saçlı Deri Bulguları</th><td>{{ goster($lohusaForm->sacli_deri_bulgular) }}</td></tr>
                <tr><th>Yüz Bulguları</th><td>{{ goster($lohusaForm->yuz_bulgular) }}</td></tr>
                <tr><th>Göz Bulguları</th><td>{{ goster($lohusaForm->goz_bulgular) }}</td></tr>
                <tr><th>Burun Bulguları</th><td>{{ goster($lohusaForm->burun_bulgular) }}</td></tr>
                <tr><th>Ağız-Diş Bulguları</th><td>{{ goster($lohusaForm->agiz_disfer_bulgular) }}</td></tr>
                <tr><th>Boğaz Bulguları</th><td>{{ goster($lohusaForm->bogaz_bulgular) }}</td></tr>
                <tr><th>Solunum Bulguları</th><td>{{ goster($lohusaForm->solunum_bulgular) }}</td></tr>
                <tr><th>Göğüs Bulguları</th><td>{{ goster($lohusaForm->gogus_bulgular) }}</td></tr>
                <tr><th>Fundus Palpe Ediliyor mu?</th><td>{{ $lohusaForm->fundus_palpe_ediliyor ? 'Evet' : 'Hayır' }}</td></tr>
                <tr><th>Losia Tipi</th><td>{{ goster($lohusaForm->losia_tipi) }}</td></tr>
                <tr><th>Meme Ucu</th><td>{{ goster($lohusaForm->meme_ucu) }}</td></tr>
                <tr><th>Meme Bakımı</th><td>{{ goster($lohusaForm->meme_bakimi) }}</td></tr>
                <tr><th>Sütyen Kullanımı</th><td>{{ goster($lohusaForm->sutyen_kullanimi) }}</td></tr>
            </table>
        </div>
    </div>

    {{-- Beslenme ve Hemoglobin --}}
    <div class="card shadow mb-4">
        <div class="card-header bg-info text-white">🍎 Beslenme ve Hemoglobin</div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr><th>Hemoglobin</th><td>{{ goster($lohusaForm->hemoglobin) }}</td></tr>
                <tr><th>Diyet Var mı?</th><td>{{ goster($lohusaForm->diyet_var_mi) }}</td></tr>
                <tr><th>Kilo Sorunu</th><td>{{ $lohusaForm->kilo_sorunu ? 'Evet' : 'Hayır' }}</td></tr>
                <tr><th>Kilo Sorunu Tipi</th><td>{{ goster($lohusaForm->kilo_sorunu_tipi) }}</td></tr>
                <tr><th>İştahsızlık</th><td>{{ $lohusaForm->istahsizlik ? 'Evet' : 'Hayır' }}</td></tr>
                <tr><th>Yeme Alışkanlığı</th><td>{{ goster($lohusaForm->yeme_aliskanligi) }}</td></tr>
                <tr><th>Vitamin Desteği</th><td>{{ $lohusaForm->vitamin_destegi ? 'Evet' : 'Hayır' }}</td></tr>
                <tr><th>Vitamin İçeriği</th><td>{{ goster($lohusaForm->vitamin_icerigi) }}</td></tr>
                <tr><th>Yiyemediği Yiyecekler</th><td>{{ goster($lohusaForm->yiyemedigi_yiyecek) }}</td></tr>
                <tr><th>Alınan Besin Grupları</th><td>{{ goster($lohusaForm->alinan_besin_gruplari) }}</td></tr>
            </table>
        </div>
    </div>

    {{-- Muayene Checklistleri --}}
    <div class="card shadow mb-4">
        <div class="card-header bg-warning text-white">📋 Muayene Checklistleri</div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr><th>Deri</th><td>{{ goster($lohusaForm->deri) }}</td></tr>
                <tr><th>Baş</th><td>{{ goster($lohusaForm->bas) }}</td></tr>
                <tr><th>Gözler</th><td>{{ goster($lohusaForm->gozler) }}</td></tr>
                <tr><th>Burun</th><td>{{ goster($lohusaForm->burun) }}</td></tr>
                <tr><th>Ağız</th><td>{{ goster($lohusaForm->agiz) }}</td></tr>
                <tr><th>Kulak</th><td>{{ goster($lohusaForm->kulak) }}</td></tr>
                <tr><th>Boyun</th><td>{{ goster($lohusaForm->boyun) }}</td></tr>
                <tr><th>Göğüs</th><td>{{ goster($lohusaForm->gogus) }}</td></tr>
                <tr><th>Abdomen</th><td>{{ goster($lohusaForm->abdomen) }}</td></tr>
                <tr><th>Kasık</th><td>{{ goster($lohusaForm->kasik) }}</td></tr>
                <tr><th>Genital</th><td>{{ goster($lohusaForm->genital) }}</td></tr>
                <tr><th>Solunum Sistemi</th><td>{{ goster($lohusaForm->solunum_sistemi) }}</td></tr>
                <tr><th>KVS</th><td>{{ goster($lohusaForm->kvs) }}</td></tr>
                <tr><th>GİS</th><td>{{ goster($lohusaForm->gis) }}</td></tr>
                <tr><th>Üriner</th><td>{{ goster($lohusaForm->uriner) }}</td></tr>
                <tr><th>Kas İskelet</th><td>{{ goster($lohusaForm->kas_iskelet) }}</td></tr>
                <tr><th>Nörolojik</th><td>{{ goster($lohusaForm->norolojik) }}</td></tr>
            </table>
        </div>
    </div>

    {{-- Alt Ekstremite, Uyku, Psikoloji --}}
    <div class="card shadow mb-4">
        <div class="card-header bg-danger text-white">🚶‍♀️😴🧠 Alt Ekstremite, Uyku, Psikoloji</div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr><th>Alt Ekstremite</th><td>{{ goster($lohusaForm->alt_ekstremite) }}</td></tr>
                <tr><th>Uykusuzluk</th><td>{{ $lohusaForm->uykusuzluk ? 'Evet' : 'Hayır' }}</td></tr>
                <tr><th>Psikolojik Belirtiler</th><td>{{ goster($lohusaForm->psikolojik_belirtiler) }}</td></tr>
                <tr><th>Anne-Bebek İlişkisi</th><td>{{ goster($lohusaForm->anne_bebek_iliskisi) }}</td></tr>
            </table>
        </div>
    </div>

    {{-- Aile Planlaması --}}
    <div class="card shadow mb-4">
        <div class="card-header bg-secondary text-white">👨‍👩‍👧‍👦 Aile Planlaması</div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr><th>AP Hap Süre</th><td>{{ goster($lohusaForm->ap_hap_sure) }}</td></tr>
                <tr><th>AP RIA Süre</th><td>{{ goster($lohusaForm->ap_ria_sure) }}</td></tr>
                <tr><th>AP Kondom Süre</th><td>{{ goster($lohusaForm->ap_kondom_sure) }}</td></tr>
                <tr><th>AP Geleneksel Yöntem Süre</th><td>{{ goster($lohusaForm->ap_geleneksel_yontem_sure) }}</td></tr>
                <tr><th>Şu Anki AP Yöntemi</th><td>{{ goster($lohusaForm->su_an_ap_yontem) }}</td></tr>
            </table>
        </div>
    </div>

    {{-- Bebek Bilgileri --}}
    <div class="card shadow mb-4">
        <div class="card-header bg-dark text-white">👶 Bebek Bilgileri</div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr><th>Doğum Tarihi</th><td>{{ goster($lohusaForm->dogum_tarihi) }}</td></tr>
                <tr><th>Kaç Haftalık</th><td>{{ goster($lohusaForm->kac_haftalik) }}</td></tr>
                <tr><th>Muayene Tarihi</th><td>{{ goster($lohusaForm->muayene_tarihi) }}</td></tr>
                <tr><th>İzlem Sayısı</th><td>{{ goster($lohusaForm->izlem_sayisi) }}</td></tr>
                <tr><th>Termin Durumu</th><td>{{ goster($lohusaForm->termin_durumu) }}</td></tr>
                <tr><th>Cinsiyet</th><td>{{ goster($lohusaForm->cinsiyet) }}</td></tr>
                <tr><th>Kacinci Cocuk</th><td>{{ goster($lohusaForm->kacinci_cocuk) }}</td></tr>
                <tr><th>Kan Grubu</th><td>{{ goster($lohusaForm->kan_grubu) }}</td></tr>
            </table>
        </div>
    </div>

    {{-- Bebekte Klinik Bulgular --}}
    <div class="card shadow mb-4">
        <div class="card-header bg-dark text-white">🩺 Bebekte Klinik Bulgular</div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tr><th>Baş Çevresi</th><td>{{ goster($lohusaForm->bas_cevresi) }}</td></tr>
                <tr><th>Göğüs Çevresi</th><td>{{ goster($lohusaForm->gogus_cevresi) }}</td></tr>
                <tr><th>Deride Bulgular</th><td>{{ goster($lohusaForm->deri) }}</td></tr>
                <tr><th>Baş Bulgular</th><td>{{ goster($lohusaForm->bas) }}</td></tr>
                <tr><th>Gözler</th><td>{{ goster($lohusaForm->gozler) }}</td></tr>
                <tr><th>Burun</th><td>{{ goster($lohusaForm->burun) }}</td></tr>
                <tr><th>Ağız</th><td>{{ goster($lohusaForm->agiz) }}</td></tr>
                <tr><th>Kulak</th><td>{{ goster($lohusaForm->kulak) }}</td></tr>
                <tr><th>Boyun</th><td>{{ goster($lohusaForm->boyun) }}</td></tr>
                <tr><th>Göğüs</th><td>{{ goster($lohusaForm->gogus) }}</td></tr>
                <tr><th>Abdomen</th><td>{{ goster($lohusaForm->abdomen) }}</td></tr>
                <tr><th>Kasık</th><td>{{ goster($lohusaForm->kasik) }}</td></tr>
                <tr><th>Genital</th><td>{{ goster($lohusaForm->genital) }}</td></tr>
                <tr><th>Solunum Sistemi</th><td>{{ goster($lohusaForm->solunum_sistemi) }}</td></tr>
                <tr><th>KVS</th><td>{{ goster($lohusaForm->kvs) }}</td></tr>
                <tr><th>GİS</th><td>{{ goster($lohusaForm->gis) }}</td></tr>
                <tr><th>Üriner</th><td>{{ goster($lohusaForm->uriner) }}</td></tr>
                <tr><th>Kas İskelet</th><td>{{ goster($lohusaForm->kas_iskelet) }}</td></tr>
                <tr><th>Nörolojik</th><td>{{ goster($lohusaForm->norolojik) }}</td></tr>
            </table>
        </div>
    </div>


    <div class="mt-3">
        <a href="{{ route('lohusa.index') }}" class="btn btn-secondary">⬅️ Geri</a>
        <a href="{{ route('lohusa.pdf', $lohusaForm->id) }}" class="btn btn-outline-primary" target="_blank">
            🖨️ PDF Olarak İndir
        </a>
    </div>
</div>
@endsection

