<div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
    <div class="card-header bg-danger text-white">B. Ailenin Sağlıkla İlgili Tutum ve Deneyimleri</div>
    <div class="card-body">

        
        <div class="mb-3">
            <label>1. Aile üyelerinden birinin geçirdiği hastalık, operasyon, hastane deneyimi, ölüm, boşanma, işsizlik olmuş mu? Bu kriz durumlarını nasıl geçirmişler?</label>
            <textarea name="ailenin_hastalik_durumu" class="form-control" rows="4" placeholder="Açıklayınız..."></textarea>
        </div>

        <div class="mb-3">
            <label>2. Aile sağlıklı iken kontrollerin önemini biliyor mu?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kontrollerin_onemi_biliniyor" value="Evet">
                <label class="form-check-label">Evet</label>
            </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kontrollerin_onemi_biliniyor" value="Hayır">
                <label class="form-check-label">Hayır</label>
            </div>
            
        </div>

        <div class="mb-3">
            <label>3. Aile bireylerinde mevcut hastalık / alerjiler / genetik bozukluklar var mı?</label>
            <textarea name="aile_mevcut_hastaliklar" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>4. Ailenin ebeden beklentileri neler?</label>
            <textarea name="aile_ebeden_beklentiler" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>5. Ücretsiz sağlık hizmetleri hakkında bilgisi var mı?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ucretsiz_saglik_bilgisi" value="Evet">
                <label class="form-check-label">Evet</label>
            </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ucretsiz_saglik_bilgisi" value="Hayır">
                <label class="form-check-label">Hayır</label>
            </div>
        </div>

        <div class="mb-3">
            <label>6. Ailenin sosyoekonomik durumu nasıl?</label>
            <textarea name="sosyoekonomik_durum" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>7. Aile içinde önemli kararlarda kim karar veriyor?</label>
            <input type="text" name="ailede_karar_veren" class="form-control">
        </div>

        <div class="mb-3">
            <label>8. Aile bireyleri duygu ve gereksinimlerini ne derece ortaya koyabiliyorlar?</label>
            <textarea name="aile_duygu_ortaya_koyma" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>9. Aile bireyleri sorunlarını paylaşabilecek birini bulabiliyor mu?</label><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sorun_paylasma[]" value="Eş">
                <label class="form-check-label">Eş</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sorun_paylasma[]" value="Aile">
                <label class="form-check-label">Aile</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sorun_paylasma[]" value="Akraba">
                <label class="form-check-label">Akraba</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sorun_paylasma[]" value="Komşular">
                <label class="form-check-label">Komşular</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sorun_paylasma[]" value="Arkadaş">
                <label class="form-check-label">Arkadaş</label>
            </div>
        </div>

        <div class="mb-3">
            <label>10. Ailenin çocuğa verdiği önem nasıl?</label>
            <textarea name="cocuga_verilen_onem" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Yaşanılan evin tipi:</label>
            <select name="ev_tipi" class="form-control">
                <option value="">Seçiniz</option>
                <option value="Konut">Konut</option>
                <option value="Apartman">Apartman</option>
                <option value="Müstakil">Müstakil</option>
                <option value="Gecekondu">Gecekondu</option>
                <option value="Diğer">Diğer</option>
            </select>
        </div>

        <div class="mb-3">
            <label>12. Evdeki oda sayısı ve işlevleri, ısınma, havalandırma yeterli mi?</label>
            <textarea name="ev_odalar_islev_isi_hava" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>13. Pencere sayısı, aydınlanma nasıl?</label>
            <textarea name="pencere_aydinlik" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>14. Evde ayrı bir banyo var mı?</label><br>
            <div class="form-check form-check-inline">
                <input type="radio" name="banyo_var_mi" value="Var" class="form-check-input" id="banyo_var">
                <label class="form-check-label" for="banyo_var">Var</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="banyo_var_mi" value="Yok" class="form-check-input" id="banyo_yok">
                <label class="form-check-label" for="banyo_yok">Yok</label>
            </div>
            
        </div>
        <div class="mb-3">
            <label>Temizliği, havalandırması nasıl?</label>
            <textarea name="banyo_temizlik" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>15. Tuvalet evin içinde mi, dışında mı?</label><br>
            <div class="form-check form-check-inline">
                <input type="radio" name="tuvalet_konum" value="İçeride" class="form-check-input" id="tuvalet_ic">
                <label class="form-check-label" for="tuvalet_ic">İçeride</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="tuvalet_konum" value="Dışarıda" class="form-check-input" id="tuvalet_dis">
                <label class="form-check-label" for="tuvalet_dis">Dışarıda</label>
            </div>
        </div>
        <div class="mb-3">
            <label>Temizliği, havalandırması nasıl?</label>
            <textarea name="tuvalet_durumu" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>16. Evde lohusaya ve bebeğe bakabilecek kişiler var mı? Kimler?</label>
            <textarea name="bakim_verenler" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>17. Yemek pişirme yöntemleri, yiyeceklerin besin değerini etkiliyor mu?</label>
            <textarea name="yemek_pisirme_besin_degeri" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>18. Yiyeceklerin saklanma koşulu sağlığa uygun mu?</label>
            <textarea name="yiyecek_saklama_kosullari" class="form-control"></textarea>
        </div>

    </div>
</div>
