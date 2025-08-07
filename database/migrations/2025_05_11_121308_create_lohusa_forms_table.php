<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('lohusa_forms', function (Blueprint $table) {
            $table->id();

            // Kimlik Bilgileri
            $table->string('ad_soyad');
            $table->integer('yas')->nullable();
            $table->string('egitim_durumu')->nullable();
            $table->string('meslek')->nullable();
            $table->string('saglik_guvence')->nullable();
            $table->string('akraba_evliligi')->nullable();
            $table->year('evlilik_yili')->nullable();
            $table->string('kan_grubu')->nullable();
            $table->string('gebelik_planlandimi')->nullable();
            $table->string('dogum_yeri')->nullable();

            // Eş Bilgileri
            $table->integer('es_yas')->nullable();
            $table->string('es_dogum_yeri')->nullable();
            $table->string('es_egitim')->nullable();
            $table->string('es_meslek')->nullable();
            $table->string('es_kan_grubu')->nullable();
            $table->string('es_telefon')->nullable();
            $table->text('es_adres')->nullable();

            // Aile ve Sosyal Durum
            $table->text('ailenin_hastalik_durumu')->nullable();
            $table->text('kontrollerin_onemi_biliniyor')->nullable();
            $table->text('aile_mevcut_hastaliklar')->nullable();
            $table->text('aile_ebeden_beklentiler')->nullable();
            $table->text('ucretsiz_saglik_bilgisi')->nullable();
            $table->text('sosyoekonomik_durum')->nullable();
            $table->string('ailede_karar_veren')->nullable();
            $table->text('aile_duygu_ortaya_koyma')->nullable();
            $table->json('sorun_paylasma')->nullable();
            $table->text('cocuga_verilen_onem')->nullable();

            // Konut ve Hijyen
            $table->string('ev_tipi')->nullable();
            $table->text('ev_odalar_islev_isi_hava')->nullable();
            $table->text('pencere_aydinlik')->nullable();
            $table->text('banyo_var_mi')->nullable();
            $table->text('banyo_temizlik')->nullable();
            $table->text('tuvalet_konum')->nullable();
            $table->text('tuvalet_durumu')->nullable();
            $table->text('bakim_verenler')->nullable();
            $table->text('yemek_pisirme_besin_degeri')->nullable();
            $table->text('yiyecek_saklama_kosullari')->nullable();

            // Geçmiş Tıbbi Öykü
            $table->json('gecmis_tibbi_oyku_kendisi')->nullable();
            $table->json('gecmis_tibbi_oyku_ailesi')->nullable();
            $table->text('gecmis_tibbi_oyku_diger_aciklama')->nullable();

            // Menstrüel Geçmiş
            $table->integer('menars_yasi')->nullable();
            $table->text('normal_sure_25_kisa')->nullable();
            $table->text('normal_sure_35_uzun')->nullable();
            $table->text('kanama_sure_3_kisa')->nullable();
            $table->text('kanama_sure_7_uzun')->nullable();
            $table->text('siklus_duzenli')->nullable();
            $table->integer('gunde_kac_ped')->nullable();

            // Doğurganlık Öyküsü
            $table->integer('para')->nullable();
            $table->integer('abortus')->nullable();
            $table->integer('yasayan')->nullable();
            $table->integer('gravida')->nullable();
            $table->text('cocuklarin_cinsiyeti')->nullable();
            $table->text('cocuklarin_saglik_durumu')->nullable();
            $table->text('dogum_yeri_kisi_sekli')->nullable();
            $table->text('abortus_yeri_kisi')->nullable();

            // Gebelik & Doğum Problemleri
            $table->json('gebelik_problemleri_son')->nullable();
            $table->json('gebelik_problemleri_onceki')->nullable();
            $table->json('dogum_problemleri_son')->nullable();
            $table->json('dogum_problemleri_onceki')->nullable();

            // Postpartum Bilgiler
            $table->json('postpartum_problemleri')->nullable();
            $table->integer('postpartum_gun')->nullable();
            $table->integer('hastaneden_cikis_gun')->nullable();
            $table->text('ilac_kullaniyor_mu')->nullable();
            $table->json('postpartum_sikayetleri')->nullable();
            $table->text('ne_yapildi')->nullable();
            $table->text('sigara_var_mi')->nullable();
            $table->text('alkol_var_mi')->nullable();
            $table->text('dogum_sonrasi_kontrol')->nullable();

            // Aile Planlaması
            $table->string('ap_hap_sure')->nullable();
            $table->string('ap_hap_neden')->nullable();
            $table->string('ap_ria_sure')->nullable();
            $table->string('ap_ria_neden')->nullable();
            $table->string('ap_kondom_sure')->nullable();
            $table->string('ap_kondom_neden')->nullable();
            $table->string('ap_geleneksel_yontem_sure')->nullable();
            $table->string('ap_geleneksel_yontem_neden')->nullable();
            $table->string('su_an_ap_yontem')->nullable();

            // Cinsiyet ve Duygusal Durum
            $table->string('bebek_cinsiyet')->nullable();
            $table->string('anne_tercihi')->nullable();
            $table->text('cinsiyet_duygu')->nullable();
            $table->text('bebek_dusunceleri')->nullable();
            $table->text('endise_var_mi')->nullable();
            $table->text('aile_yaklasim')->nullable();
            $table->text('dogum_sonrasi_cinsel_yasam')->nullable();

            // Geleneksel Uygulamalar
            $table->json('geleneksel_uygulamalar')->nullable();

            // Emzirme ve Psikolojik Değerlendirme
            $table->json('psikolojik_belirtiler')->nullable();
            $table->json('anne_bebek_iliskisi')->nullable();
            $table->json('emzirme_bulgular')->nullable();
            $table->integer('emzirme_suresi')->nullable();
            $table->json('sut_yeterliligi')->nullable();
            $table->json('egitim_istekleri')->nullable();
            $table->text('ebenin_yorumu')->nullable();

            // Bebek Bilgileri
            $table->date('dogum_tarihi')->nullable();
            $table->string('kac_haftalik')->nullable();
            $table->date('muayene_tarihi')->nullable();
            $table->integer('izlem_sayisi')->nullable();
            $table->string('termin_durumu')->nullable();
            $table->string('cinsiyet')->nullable();
            $table->integer('kacinci_cocuk')->nullable();

            // Vital Bulgular
            $table->float('kilo')->nullable();
            $table->float('boy')->nullable();
            $table->float('ates')->nullable();
            $table->float('nabiz')->nullable();
            $table->float('solunum')->nullable();
            $table->float('bas_cevresi')->nullable();
            $table->float('gogus_cevresi')->nullable();

            // Diğer Kısımlar (Checklist)
            $table->json('deri')->nullable();
            $table->json('bas')->nullable();
            $table->json('gozler')->nullable();
            $table->json('burun')->nullable();
            $table->json('agiz')->nullable();
            $table->json('kulak')->nullable();
            $table->json('boyun')->nullable();
            $table->json('gogus')->nullable();
            $table->json('abdomen')->nullable();
            $table->json('kasik')->nullable();
            $table->json('genital')->nullable();
            $table->json('solunum_sistemi')->nullable();
            $table->json('kvs')->nullable();
            $table->json('gis')->nullable();
            $table->json('uriner')->nullable();
            $table->json('kas_iskelet')->nullable();
            $table->json('norolojik')->nullable();

            // Ek İzlem Bilgileri
            $table->integer('postpartum_hafta')->nullable();
            $table->float('gebelik_kilosu')->nullable();
            $table->float('mevcut_kilo')->nullable();
            $table->string('tansiyon')->nullable();
            $table->json('bas_bulgular')->nullable();
            $table->json('sacli_deri_bulgular')->nullable();
            $table->json('yuz_bulgular')->nullable();
            $table->json('goz_bulgular')->nullable();
            $table->json('burun_bulgular')->nullable();
            $table->json('agiz_disfer_bulgular')->nullable();
            $table->json('bogaz_bulgular')->nullable();
            $table->json('solunum_bulgular')->nullable();
            $table->json('gogus_bulgular')->nullable();
           
            $table->string('meme_ucu')->nullable();
            $table->text('emzirmeye_uygun')->nullable();
            $table->text('meme_bakimi')->nullable();
            $table->text('sutyen_kullanimi')->nullable();
            $table->text('fundus_palpe_ediliyor')->nullable();
            $table->string('losia_tipi')->nullable();
            $table->json('abdomen_bulgulari')->nullable();
            $table->json('uriner_bulgular')->nullable();
            $table->json('barsak_bulgular')->nullable();
            $table->json('alt_ekstremite')->nullable();
            $table->json('uykusuzluk')->nullable();
            $table->integer('hemoglobin')->nullable();
            $table->text('diyet_var_mi')->nullable();
            $table->string('kilo_sorunu_tipi')->nullable();
            $table->text('istahsizlik')->nullable();
            $table->text('yeme_aliskanligi')->nullable();
            $table->text('vitamin_destegi')->nullable();
            $table->text('vitamin_icerigi')->nullable();
            $table->text('yiyemedigi_yiyecek')->nullable();
            $table->text('alinan_besin_gruplari')->nullable();
            $table->string('bebek_beslenmesi')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lohusa_forms');
    }
};

