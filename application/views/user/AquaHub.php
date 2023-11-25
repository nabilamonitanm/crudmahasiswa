


<div class="container-xl py-2 card-body">
    <div class="border rounded">
        <div class="card-body">
            <div class="bg-blue rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 100px;">
                        <div class="position-relative  w-20 h-100">
                            <img class="position-relative w-100 h-100 rounded"
                                src="<?= base_url('assets2/') ?>img/poster3.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">

                            <h1 class="mb-4">Pendataan Air di Desa</h1>
                            <form action="<?= base_url('proses_form'); ?>" method="post">
                                <div class="form-group">
                                    <label for="sumber_air">Nama Lengkap:</label>
                                    <input type="text" class="form-control" name="sumber_air" id="sumber_air" required>
                                </div>
                                <div class="form-group">
                                    <label for="sumber_air">Status:</label>
                                    <input type="text" class="form-control" name="sumber_air" id="sumber_air" required>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi:</label>
                                    <input type="text" class="form-control" name="lokasi" id="lokasi"
                                        placeholder="Masukkan lokasi" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="kualitas">Kualitas Air:</label>
                                    <select class="form-control" name="kualitas" id="kualitas" required>
                                        <option value="layak">Layak</option>
                                        <option value="tidak_layak">Tidak Layak</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sumber_air">Sumber Air:</label>
                                    <input type="text" class="form-control" name="sumber_air" id="sumber_air" required>
                                </div>

                                <div class="form-group">
                                    <label for="jumlah_penduduk">Jumlah Penduduk:</label>
                                    <input type="number" class="form-control" name="jumlah_penduduk"
                                        id="jumlah_penduduk" required>
                                </div>

                                <div class="form-group">
                                    <label for="jenis_sumur">Jenis Sumur:</label>
                                    <input type="text" class="form-control" name="jenis_sumur" id="jenis_sumur"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="ketersediaan_air">Ketersediaan Air (dalam liter per hari):</label>
                                    <input type="number" class="form-control" name="ketersediaan_air"
                                        id="ketersediaan_air" required>
                                </div>

                                <div class="form-group">
                                    <label for="konsumsi_air">Konsumsi Air per Kapita (dalam liter per hari):</label>
                                    <input type="number" class="form-control" name="konsumsi_air" id="konsumsi_air"
                                        required>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="belum_ada_air_bersih"
                                        id="belum_ada_air_bersih">
                                    <label class="form-check-label" for="belum_ada_air_bersih">Desa belum mendapatkan
                                        air
                                        bersih</label>
                                </div>

                                <div class="form-group">
                                    <label for="keterangan">Keterangan Tambahan:</label>
                                    <textarea class="form-control" name="keterangan" id="keterangan"
                                        rows="4"></textarea>
                                </div>
                                <br>

                                <div class="col-12">
                                    <button class="btn btn-info w-100 py-3" type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
function initMap() {
    var input = document.getElementById('lokasi');
    var autocomplete = new google.maps.places.Autocomplete(input);
}
google.maps.event.addDomListener(window, 'load', initMap);
</script>