<div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">G. Fiziksel Muayene</div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-3"><label>Muayene Tarihi</label><input type="date" name="muayene_tarihi" class="form-control"></div>
            <div class="col-md-3"><label>Postpartum Gün (hafta)</label><input type="number" name="postpartum_hafta" class="form-control"></div>
            <div class="col-md-3"><label>Gebelik Kilosu</label><input type="number" step="1" name="gebelik_kilosu" class="form-control"></div>
            <div class="col-md-3"><label>Mevcut Kilo</label><input type="number" step="1" name="mevcut_kilo" class="form-control"></div>
        </div>

        <div class="row mt-3">
            <label class="fw-bold text-primary">Yaşam bulguları:</label>
            <div class="col-md-3"><label>Ateş (°C)</label><input type="number" step="1" name="ates" class="form-control"></div>
            <div class="col-md-3"><label>Nabız</label><input type="number" name="nabiz" class="form-control"></div>
            <div class="col-md-3"><label>Solunum</label><input type="number" name="solunum" class="form-control"></div>
            <div class="col-md-3"><label>TA</label><input type="text" name="tansiyon" class="form-control"></div>
        </div>
        <br>
        
        @php
        $basFields = [
            'Baş ağrısı',
            'Baş dönmesi',
        ];

        $sacliDeriFields = [
            'Kepek',
            'Bit, sirke',
            'Dökülme',
            'Saç hijyeni',
        ];

        $yuzFields = [
            'Solukluk',
            'Ödem',
        ];

        $gozlerFields = [
            'Konjuktivads solukluk',
            'Sulanma, akıntı, iltihap',
            'Çapaklanma',
            'Göz kapaklarında ödem',
        ];

        $burunFields = [
            'Tıkanıklık',
            'Akıntı',
            'Burun kanaması',
        ];

        $agizDisferFields = [
            'Dudak mukozası soluk',
            'Ağızda aft',
            'Dişlerde çürük',
            'Diş eti kanaması',
            'Diş hijyeni bozukluğu',
        ];

        $bogazFields = [
            'Hipertroidi',
            'Lenf bezlerinde şişme',
            'Tonsillerde şişme',
        ];

        $solunumFields = [
            'Solunum (normal/hızlı)',
            'Nefes darlığı',
            'Akciğer seslerinde patoloji',
            'Öksürük',
            'Göğüs ağrısı',
            'Kalp sesleri ( taşikardi, bradikardi)',
        ];

        $goguslerFields = [
            'Kırmızılık',
            'Hassasiyet',
            'Dolgunluk',
            'Meme ucu çatlağı',
            'Meme absesi',
            'Meme ent',
            'Önceden geçirilmiş meme hastalığı',
        ];
        @endphp

        <div>
            <h5>Baş</h5>
            @foreach ($basFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="bas_bulgular[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            <h5>Saçlı Deri</h5>
            @foreach ($sacliDeriFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="sacli_deri_bulgular[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            <h5>Yüz</h5>
            @foreach ($yuzFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="yuz_bulgular[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            <h5>Gözler</h5>
            @foreach ($gozlerFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="goz_bulgular[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            <h5>Burun</h5>
            @foreach ($burunFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="burun_bulgular[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            <h5>Ağız / Disfer</h5>
            @foreach ($agizDisferFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="agiz_disfer_bulgular[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            <h5>Boğaz</h5>
            @foreach ($bogazFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="bogaz_bulgular[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            <h5>Solunum Sistemi / KYS</h5>
            @foreach ($solunumFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="solunum_bulgular[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            <h5>Göğüsler</h5>
            @foreach ($goguslerFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="gogus_bulgular[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>



        <div class="mt-3">
            <label>Meme Ucu Tipi:</label>
            <select name="meme_ucu" class="form-control">
                <option value="Normal">Normal</option>
                <option value="Düz">Düz</option>
                <option value="İçe Çökük">İçe Çökük</option>
                <option value="Büyük">Büyük</option>
            </select>
        </div>

        <div class="mt-3">
            <label>Emzirmeye Uygunluk:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="emzirmeye_uygun" value="Uygun">
                <label class="form-check-label">Uygun</label>
            </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="emzirmeye_uygun" value="Uygun Değil">
                <label class="form-check-label">Uygun Değil</label>
            </div>
        </div>

        <div class="mt-3">
            <label>Meme Bakımı:</label>
            <textarea name="meme_bakimi" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <label>Sutyen Kullanımı:</label>
            <textarea name="sutyen_kullanimi" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <label>Fundus:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="fundus_palpe_ediliyor" value="Palpe ediliyor">
                <label class="form-check-label">Palpe ediliyor</label>
            </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="fundus_palpe_ediliyor" value="Palpe edilmiyor">
                <label class="form-check-label">Palpe edilmiyor</label>
            </div>
        </div>
        

        <div class="mt-3">
            <label>Losia Tipi:</label>
            <select name="losia_tipi" class="form-control">
                <option value="Rubra">Rubra</option>
                <option value="Seroze">Seroze</option>
                <option value="Alba">Alba</option>
            </select>
        </div>


        @php
        $losiaFields = [
            'Loşia akıntıda anormal bulgu',
            'Üretrosel',
            'Cinsel ilişki',
            'İlişki sırasında herhangi bir sorun',
            'Epizyo bölgesinde enf belirtileri',
            'Perine hijyeni (Uygun teknikte)',
            'Hematom'
        ];
        @endphp

        <div class="mt-3">
            <label class="fw-bold">Loşia ve İlgili Bulgular:</label><br>
            @foreach ($losiaFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="losia_bulgulari[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>
        @php
        $abdomenFields = [
            'Lineanigra', 'Striolar', 'Diastazis rekti', 'İnsizyon bölgesinde enf. belirtileri', 'Egzersiz uygulanması'
        ];
        @endphp

        <div class="mt-3">
            <label class="fw-bold">Abdomen Bulguları:</label><br>
            @foreach ($abdomenFields as $abdomen)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="abdomen_bulgulari[]" value="{{ $abdomen }}" class="form-check-input">
                    <label class="form-check-label">{{ $abdomen }}</label>
                </div>
            @endforeach
        </div>

        @php
        $urinerFields = [
            'Sık idrara çıkma', 'Ağrılı idrara çıkma', 'İnkontinans', 'Sistasel', 'Enfeksiyon', 'Kepel egzersizi uygulanması'
        ];
        @endphp

        <div class="mt-3">
            <label class="fw-bold">Üriner Sistem Bulguları:</label><br>
            @foreach ($urinerFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="uriner_bulgular[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        @php
        $barsakFields = [
            'Konstipasyon', 'Diare', 'Distansiyon', 'Rektosel', 'Hemoroid'
        ];
        @endphp

        <div class="mt-3">
            <label class="fw-bold">Barsak Fonksiyonları:</label><br>
            @foreach ($barsakFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="barsak_bulgular[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        @php
        $altExtremiteFields = [
            'Bacaklarda trombo flebit belirtileri', 'Ödem', 'Varis'
        ];
        @endphp

        <div class="mt-3">
            <label class="fw-bold">Alt Ekstremite Bulguları:</label><br>
            @foreach ($altExtremiteFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="alt_ekstremite[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        @php
        $uykuFields = ['Uykusuzluk'];
        @endphp

        <div class="mt-3">
            <label class="fw-bold">Uyku / Dinlenme Durumu:</label><br>
            @foreach ($uykuFields as $field)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="uykusuzluk[]" value="{{ $field }}" class="form-check-input">
                    <label class="form-check-label">{{ $field }}</label>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            <label>Hemoglobin:</label>
            <input type="number" name="hemoglobin" class="form-control">
        </div>

        <div class="mt-3">
            <label class="fw-bold">Beslenme durumu:</label>
            <br>
            <label>Herhangi bir nedenle diyet uyguluyor musunuz?</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="diyet_var_mi" value="Evet">
                <label class="form-check-label">Evet</label>
            </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="diyet_var_mi" value="Hayır">
                <label class="form-check-label">Hayır</label>
            </div>
        </div>


        <div class="mt-3">
            <label>Kilo ile ilgili sorununuz?</label>
            <select name="kilo_sorunu_tipi" class="form-control">
                <option value="">Yok</option>
                <option value="Zayıflık">Zayıflık</option>
                <option value="Şişmanlık">Şişmanlık</option>
                <option value="Diğer">Diğer</option>
            </select>
        </div>

        <div class="mt-3">
            <label>İştahsızlık sorununuz var mı?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="istahsizlik" value="Evet">
                <label class="form-check-label">Evet</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="istahsizlik" value="Hayır">
                <label class="form-check-label">Hayır</label>
            </div>
        </div>

        <div class="mt-3">
            <label class="fw-bold">Yeme Alışkanlığı:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="yeme_aliskanligi" value="Düzenli">
                <label class="form-check-label">Düzenli(Açıklayınız.)</label>
            </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="yeme_aliskanligi" value="Düzensiz">
                <label class="form-check-label">Düzensiz(Açıklayınız.)</label>
            </div>
            
            <textarea name="yeme_aliskanligi_aciklama" class="form-control mt-2" placeholder="Açıklama yazınız..."></textarea>
        </div>


        <div class="mt-3">
            <label>Vitamin / Mineral Desteği:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vitamin_destegi" value="Evet">
                <label class="form-check-label">Evet</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vitamin_destegi" value="Hayır">
                <label class="form-check-label">Hayır</label>
            </div>
            <br>
            <label class="mt-2">Nedir?</label>
            <input type="text" name="vitamin_icerigi" class="form-control">
        </div>

        <div class="mt-3">
            <label class="fw-bold">Yiyemediğiniz yiyecek var mı?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="yiyemedigi_yiyecek" value="Evet">
                <label class="form-check-label">Evet</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="yiyemedigi_yiyecek" value="Hayır">
                <label class="form-check-label">Hayır</label>
            </div>

            <textarea name="yiyemedigi_yiyecek_aciklama" class="form-control mt-2" placeholder="Varsa açıklayınız..."></textarea>
        </div>


        <div class="mt-3">
            <label>Evde alınan besin grupları:</label>
            <textarea name="alinan_besin_gruplari" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <label>Bebeğinizi nasıl besliyorsunuz?</label>
            <select name="bebek_beslenmesi" class="form-control">
                <option>Emzirme</option>
                <option>Ticari mama</option>
                <option>Süt</option>
                <option>Diğer</option>
            </select>
        </div>
    </div>
</div>