<!-- footer section -->
<section class="footer section-p1">
    <div class="fo-about">
        <img src="<?= base_url('public/assets/logo.png') ?>" alt="maskost">
        <span>Dapatkan <b>"Info Kost Murah"</b> hanya di MasKost.</span>
        <span>Mau "Sewa Kost Murah" MasKost saja!</span>
        <a href="" class="btn btn-sm btn-primary">sewa</a>
    </div>
    <div class="fo-page">
        <h4>MasKost</h4>
        <a href="">Tentang Kami</a>
        <a href="">Blog MasKost</a>
        <a href="">Promosikan Kost Anda</a>
        <a href="">Tentang Kami</a>
    </div>
    <div class="fo-kebijakan">
        <h4>Kebijakan</h4>
        <a href="">Kebijakan Privasi</a>
        <a href="">Syarat dan Ketentuan Umum</a>
    </div>
    <fo class="fo-kontak">
        <h4>Kontak Kami</h4>
        <span><i class="fa-solid fa-at"></i> maskost@outlook.com</span>
        <span><i class="fa-solid fa-phone"></i>+628995425284</span>
    </fo>
</section>

<!-- modal search section -->
<div class="modal fade" id="cari-kost" tabindex="-1" role="dialog" aria-labelledby="cari-kost" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cari Kost</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputEmail4">Masukan kata kunci pencarian</label>
                        <input type="text" class="form-control" id="searchbytext" placeholder="kata kunci pencarian">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Tipe</label>
                            <select id="inputState" class="form-control">
                                <option selected>Pilih tipe...</option>
                                <option>Perempuan</option>
                                <option>Laki</option>
                                <option>Pasutri</option>
                                <option>Bebas</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Lokasi</label>
                            <select id="inputState" class="form-control">
                                <option selected>Pilih Lokasi...</option>
                                <option>Yogyakarta</option>
                                <option>Bantul</option>
                                <option>Sleman</option>
                                <option>Jakarta</option>
                                <option>Surabaya</option>
                                <option>Malang</option>
                                <option>Bandung</option>
                                <option>Solo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<!-- Core theme JS-->
<script src="<?= base_url('public/') ?>js/scripts.js"></script>
</body>

</html>