<div class="form-section fade-in p-3 rounded card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">D. Menstruel Öykü</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <label>Menarş Yaşı:</label>
                <input type="number" name="menars_yasi" class="form-control" min="9" max="19">
            </div>
        </div>

        <div class="mt-3">
            <label>Normal Menstrüel Periyotlar:</label><br>
            <div class="form-check">
                <input type="checkbox" name="normal_sure_25_kisa" value="25 günden kısa" class="form-check-input" >
                <label class="form-check-label" >25 günden kısa</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="normal_sure_35_uzun" value="35 günden uzun" class="form-check-input">
                <label class="form-check-label" >35 günden uzun</label>
            </div>
        </div>

        <div class="mt-3">
            <div class="form-check">
                <input type="checkbox" name="kanama_sure_3_kisa" value="3 günden kısa" class="form-check-input" >
                <label class="form-check-label" >3 günden kısa</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="kanama_sure_7_uzun" value="7 günden uzun" class="form-check-input" >
                <label class="form-check-label" >7 günden uzun</label>
            </div>
        </div>

        <div class="mt-3">
            <label>Menstrüel Sikluslar Düzenli Mi?</label><br>
            <div class="form-check form-check-inline">
                <input type="radio" name="siklus_duzenli" value="Evet" class="form-check-input">
                <label class="form-check-label" >Evet</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="siklus_duzenli" value="Hayır" class="form-check-input">
                <label class="form-check-label" >Hayır</label>
            </div>
        </div>

        <div class="mt-3">
            <label>Günde Kaç Ped(bez) Değiştiriyor?</label>
            <input type="number" name="gunde_kac_ped" class="form-control">
        </div>
    </div>
</div>