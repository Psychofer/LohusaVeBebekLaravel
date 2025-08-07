        <div class="form-section p-3 rounded card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">A.1 Lohusanın Tanıtıcı Bilgileri</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="ad_soyad" class="form-label">Ad Soyad</label>
                        <input type="text"
                            name="ad_soyad"
                            id="ad_soyad"
                            class="form-control only-letters"
                            value="{{ old('ad_soyad') }}"
                            required>
                        <div class="invalid-feedback d-none" id="ad_soyad_error">
                            Sadece harf ve boşluk girilmelidir.
                        </div>

                        @error('ad_soyad')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Yaşı</label>
                        <input type="text" name="yas" class="form-control only-numbers" required>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label>Eğitim Durumu</label>
                        <select name="egitim_durumu" class="form-control">
                            <option value="">Seçiniz</option>
                            <option value="Okuryazar Değil">Okuryazar Değil</option>
                            <option value="İlkokul">İlkokul</option>
                            <option value="Ortaokul">Ortaokul</option>
                            <option value="Lise">Lise</option>
                            <option value="Üniversite">Üniversite</option>
                            <option value="Yüksek Lisans/Doktora">Yüksek Lisans/Doktora</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Meslek</label>
                        <input type="text" name="meslek" class="form-control only-letters" >
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Sağlık Güvence Durumu</label>
                        <select name="saglik_guvence" class="form-control">
                            <option value="">Seçiniz</option>
                            <option value="SGK">SGK</option>
                            <option value="Bağ-Kur">Bağ-Kur</option>
                            <option value="Özel Sigorta">Özel Sigorta</option>
                            <option value="Yok">Yok</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Akraba Evliliği</label>
                        <select name="akraba_evliligi" class="form-control">
                            <option value="">Seçiniz</option>
                            <option value="Evet">Evet</option>
                            <option value="Hayır">Hayır</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Evlilik Yılı</label>
                        <input type="number" name="evlilik_yili" class="form-control" min="1900" max="{{ date('Y') }}">
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Kan Grubu</label>
                        <select name="kan_grubu" class="form-control">
                            <option value="">Seçiniz</option>
                            <option value="A Rh+">A Rh+</option>
                            <option value="A Rh-">A Rh-</option>
                            <option value="B Rh+">B Rh+</option>
                            <option value="B Rh-">B Rh-</option>
                            <option value="AB Rh+">AB Rh+</option>
                            <option value="AB Rh-">AB Rh-</option>
                            <option value="0 Rh+">0 Rh+</option>
                            <option value="0 Rh-">0 Rh-</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Gebelik Planlandı mı?</label>
                        <select name="gebelik_planlandimi" class="form-control">
                            <option value="">Seçiniz</option>
                            <option value="Evet">Evet</option>
                            <option value="Hayır">Hayır</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Doğum Yeri</label>
                        <input type="text" name="dogum_yeri" class="form-control only-letters">
                    </div>
                </div>
            </div>
        </div>