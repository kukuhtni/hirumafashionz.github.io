<?php
//Lodading Konfigurasi Website Hiruma
$site = $this->m_konfigurasi->listing();
$nav_produk_footer = $this->m_konfigurasi->nav_produk();

?>
<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                TENTANG TOKO KAMI
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    <?php echo $site->deskripsi ?>
                </p>

                <!-- <div class="flex-m p-t-30">
                    <a href="<?php echo $site->facebook ?>" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="<?php echo $site->instagram ?>" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                </div> -->
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Kategori Produk
            </h4>

            <ul>
                <?php foreach ($nav_produk_footer as $nav_produk_footer) { ?>
                    <li class="p-b-9">
                        <a href="<?php echo base_url('produk/kategori/' . $nav_produk_footer->slug_kategori) ?>" class="s-text7">
                            <?php echo $nav_produk_footer->nama_kategori ?>
                        </a>
                    </li>
                <?php } ?>

            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                HUBUNGI KAMI
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        <?php echo $site->email ?>
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        <?php echo $site->telephone ?>
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                ALAMAT KANTOR
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    <?php echo $site->alamat ?>
                </p>

                <div class="flex-m p-t-30">
                    <a href="<?php echo $site->facebook ?>" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="<?php echo $site->instagram ?>" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="https://www.youtube.com/channel/UC-2Jar1eisI1phXCz4eqDJg" class="topbar-social-item fa fa-youtube-play"></a>

                </div>
            </div>
        </div>

    </div>

    <div class="t-center p-l-15 p-r-15">
        <div class="t-center s-text8 p-t-20">
            Copyright © 2022&nbsp;<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">HirumaFashionZ</a>
        </div>
    </div>
</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/template/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/template/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/template/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/template/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/template/vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/template/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/template/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/template/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/template/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/template/vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>

<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/template/js/main.js"></script>

</body>

</html>