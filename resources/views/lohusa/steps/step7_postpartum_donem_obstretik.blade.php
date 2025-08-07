<div class="form-section p-3 rounded card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">F. Şu Anki Postpartum Döneme Ait Obstetrik Öykü</div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-4">
                <label>Postpartum Gün:</label>
                <input type="number" name="postpartum_gun" class="form-control">
            </div>
            <div class="col-md-4">
                <label>Hastaneden çıkalı kaç gün oldu?</label>
                <input type="number" name="hastaneden_cikis_gun" class="form-control">
            </div>
        </div>

        <div class="mt-3">
            <label>Şu an ilaç kullanıyor mu?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ilac_kullaniyor_mu" value="Evet">
                <label class="form-check-label">Evet</label>
            </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ilac_kullaniyor_mu" value="Hayır">
                <label class="form-check-label">Hayır</label>
            </div>
            
        </div>

        @php
        $postpartum_sikayetleri = [
            'Ateş', 'Sık ve yanmalı idrara çıkma', 'Aşırı vajinal kanama (menstruasyon kanamasından daha fazla)', 'Bayılma', 'Bacakta ağrı, kızarıklık, hassasiyet, şişlik',
            'Vajinal akıntıda pis koku', 'Baş ağrısı ve görme bozukluğu', 'Perine de veya abdomende şiddetli ağrı', 'Alerji', 'Diğer'
        ];
        @endphp

        <div class="mt-3">
            <label class="fw-bold text-danger">Hastaneden çıktıktan sonra aşağıdaki problemlerden herhangi biri oldu mu? Ve şuan var mı?</label>
            @foreach ($postpartum_sikayetleri as $item)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="postpartum_sikayetleri[]" value="{{ $item }}">
                    <label class="form-check-label">{{ $item }}</label>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            <label>Olduysa ne yaptınız?</label>
            <textarea name="ne_yapildi" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <label>Sigara kullanımı?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sigara_var_mi" value="Evet">
                <label class="form-check-label">Evet</label>
            </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sigara_var_mi" value="Hayır">
                <label class="form-check-label">Hayır</label>
            </div>
        </div>

        <div class="mt-2">
            <label>Alkol kullanımı?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="alkol_var_mi" value="Evet">
                <label class="form-check-label">Evet</label>
            </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="alkol_var_mi" value="Hayır">
                <label class="form-check-label">Hayır</label>
            </div>
        </div>

        <div class="mt-2">
            <label>Doğum sonrası kontrole gittiniz mi?</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dogum_sonrasi_kontrol" value="Evet">
                <label class="form-check-label">Evet</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dogum_sonrasi_kontrol" value="Hayır">
                <label class="form-check-label">Hayır</label>
            </div>
        </div>

        <div class="mt-4">
            <label class="fw-bold text-primary">Daha önce hiç aile planlaması yöntemi kullandınız mı?</label>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <label for="ap_hap_sure" class="form-label">Hap Kullanım Süresi</label>
                        <input type="text" class="form-control" name="ap_hap_sure" id="ap_hap_sure" value="{{ old('ap_hap_sure') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="ap_hap_neden" class="form-label">Hap Kullanımı Bırakma Nedeni</label>
                        <input type="text" class="form-control" name="ap_hap_neden" id="ap_hap_neden" value="{{ old('ap_hap_neden') }}">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="ap_ria_sure" class="form-label">RİA Kullanım Süresi</label>
                        <input type="text" class="form-control" name="ap_ria_sure" id="ap_ria_sure" value="{{ old('ap_ria_sure') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="ap_ria_neden" class="form-label">RİA Kullanımı Bırakma Nedeni</label>
                        <input type="text" class="form-control" name="ap_ria_neden" id="ap_ria_neden" value="{{ old('ap_ria_neden') }}">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="ap_kondom_sure" class="form-label">Kondom Kullanım Süresi</label>
                        <input type="text" class="form-control" name="ap_kondom_sure" id="ap_kondom_sure" value="{{ old('ap_kondom_sure') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="ap_kondom_neden" class="form-label">Kondom Kullanımı Bırakma Nedeni</label>
                        <input type="text" class="form-control" name="ap_kondom_neden" id="ap_kondom_neden" value="{{ old('ap_kondom_neden') }}">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="ap_geleneksel_yontem_sure" class="form-label">Geleneksel Yöntem Süresi</label>
                        <input type="text" class="form-control" name="ap_geleneksel_yontem_sure" id="ap_geleneksel_yontem_sure" value="{{ old('ap_geleneksel_yontem_sure') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="ap_geleneksel_yontem_neden" class="form-label">Geleneksel Yöntemi Bırakma Nedeni</label>
                        <input type="text" class="form-control" name="ap_geleneksel_yontem_neden" id="ap_geleneksel_yontem_neden" value="{{ old('ap_geleneksel_yontem_neden') }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <label>Şu anda düşündüğünüz AP yöntemi:</label>
            <input type="text" name="su_an_ap_yontem" class="form-control" placeholder="açıklayınız...">
        </div>

        <div class="mt-3">
            <label>Bebeğin cinsiyeti:</label>
            <input type="text" name="bebek_cinsiyet" class="form-control">
        </div>

        <div class="mt-3">
            <label>Annenin / ailenin cinsiyet tercihi:</label>
            <input type="text" name="anne_tercihi" class="form-control">
        </div>

        <div class="mt-3">
            <label>Doğumda cinsiyeti öğrendiğinizde ne hissettiniz?</label>
            <textarea name="cinsiyet_duygu" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <label>Şu anda bebeğiniz hakkında ne düşünüyorsunuz?</label>
            <textarea name="bebek_dusunceleri" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <label>Doğum sonrası kendiniz ya da bebeğiniz için endişe?</label>
            <textarea name="endise_var_mi" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <label>Doğum sonrası babanın ve ailenin yaklaşımı:</label>
            <textarea name="aile_yaklasim" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <label>Doğum sonrası cinsel yaşam:</label>
            <textarea name="dogum_sonrasi_cinsel_yasam" class="form-control"></textarea>
        </div>

        @php
        $geleneksel = [
            'Toprağa yatırma', 'Anneye su vermeme', 'Karnı sarma', 'Kundaklama',
            'Höllüğe yatırma', '3 ezan bekleme', 'Şekerli su', 'Fizyolojik sarılık uygulamaları',
            'Göbek düşmesi için uygulamalar', 'Tuzlama', 'Meme ovma', 'Diğer'
        ];
        @endphp

        <div class="mt-4">
            <label class="fw-bold text-danger">Doğum sonrası geleneksel uygulamalar:</label>
            <br>
            @foreach ($geleneksel as $uygulama)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="geleneksel_uygulamalar[]" value="{{ $uygulama }}" class="form-check-input">
                    <label class="form-check-label">{{ $uygulama }}</label>
                </div>
            @endforeach
        </div>
    </div>
</div>