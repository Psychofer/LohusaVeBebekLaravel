<h3>Bebek İzleme Formu</h3>
<div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">Bebeğe Ait Bilgiler</div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-3">
                <label>Doğum Tarihi</label>
                <input type="date" name="dogum_tarihi" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Kaç Haftalık</label>
                <input type="text" name="kac_haftalik" class="form-control">
            </div>
            <div class="col-md-3">
                <label>Muayene Tarihi</label>
                <input type="date" name="muayene_tarihi" class="form-control">
            </div>
            <div class="col-md-3">
                <label>İzlem Sayısı</label>
                <input type="number" name="izlem_sayisi" class="form-control">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <label>Termin Durumu</label>
                <select name="termin_durumu" class="form-control">
                    <option>Term</option>
                    <option>Prematür</option>
                    <option>Postmatür</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>Cinsiyet</label>
                <select name="cinsiyet" class="form-control">
                    <option>Kız</option>
                    <option>Erkek</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>Kaçıncı çocuk?</label>
                <input type="number" name="kacinci_cocuk" class="form-control">
            </div>

            <div class="col-md-3">
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
        </div>
    </div>
</div>