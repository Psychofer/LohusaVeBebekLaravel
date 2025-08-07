        <div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
            <div class="card-header bg-secondary text-white">A.2 Eşin Tanıtıcı Bilgileri</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <label>Eşinin Yaşı</label>
                        <input type="number" name="es_yas" class="form-control" min="15" max="100">
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Eşinin Doğum Yeri</label>
                        <input type="text" name="es_dogum_yeri" class="form-control only-letters">
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Eğitim Durumu</label>
                        <select name="es_egitim" class="form-control">
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
                        <input type="text" name="es_meslek" class="form-control only-letters">
                    </div>

                    <div class="col-md-6 mt-2">
                        <label>Kan Grubu</label>
                        <select name="es_kan_grubu" class="form-control">
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
                        <label>Telefon</label>
                        <input type="text" name="es_telefon" class="form-control only-numbers" placeholder="(5xx) xxx xx xx" data-inputmask="'mask': '(999) 999 99 99'" data-mask>
                    </div>

                    <div class="col-md-12 mt-2">
                        <label>Adres</label>
                        <textarea name="es_adres" class="form-control" rows="2"></textarea>
                    </div>
                </div>
            </div>
        </div>
