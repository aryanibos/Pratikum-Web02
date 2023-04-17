<?Php

include_once('templates/topbar.php');
include_once('templates/sidebar.php');

?>

<div class="container-fluid">
    <div class="row mb-2">
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">Bengkel c<span style="color: red;">AR</span>s</h3>
                        <div class="col-12">
                            <img src="img/service-besar.jpg" class="product-image img-thumbnail shadow-lg"
                                alt="Product Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">Bengkel c<span style="color: red;">AR</span>s</h3>
                        <p>Mengapa Harus di Bengkel c<span style="color: red;">AR</span>s?<br>
                            Karena Kami Menawarkan anda kategori fasilitas jasa dalam bidang otomotif yang mewadahi
                            kegiatan perbengkelan dan fasilitas penunjang penunjang kegiatan serta pelayanan yang sangat
                            baik 1x24 jam.
                        </p>

                        <hr>
                    </div>
                </div>
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                href="#product-desc" role="tab" aria-controls="product-desc"
                                aria-selected="true">Description</a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                href="#product-comments" role="tab" aria-controls="product-comments"
                                aria-selected="false">Comments</a>
                            <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab"
                                href="#product-rating" role="tab" aria-controls="product-rating"
                                aria-selected="false">Rating</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                            aria-labelledby="product-desc-tab" style="text-align: justify;"><span
                                style="color: red;">&nbsp;&nbsp;&nbsp;&nbsp;AR</span>TECH adalah
                            aplikasi yang memberikan solusi lengkap untuk para profesional di bidang teknologi. Aplikasi
                            ini menawarkan berbagai alat, sumber daya, dan informasi untuk membantu para profesional
                            meningkatkan keterampilan mereka dan mengembangkan karier mereka. Aplikasi ini juga
                            menyediakan berbagai artikel berkualitas tinggi dari para ahli di bidang teknologi, termasuk
                            tips dan trik tentang bagaimana cara terbaik untuk menggunakan alat-alatnya. Aplikasi ini
                            juga memiliki fitur diskusi yang memungkinkan pengguna untuk bertukar ide dan berbagi
                            pengetahuan dengan sesama profesional di bidang teknologi. ARTECH adalah aplikasi yang
                            sempurna bagi para profesional teknologi yang ingin tetap up to date dengan perkembangan
                            terkini dalam industri.. <br> Ada Tiga Metode yang Anda Dapatkan Di kami:<br>
                            <ol>
                                <li>Layanan Service</li>
                                <p>
                                    Ruang tunggu yang nyaman untuk semua pelanggan Bengkel c<span
                                        style="color: red;">AR</span>s dan Pelayanan yang selalu
                                    stay 24 jam Untuk Ingin Bertanya.
                                </p>
                                <li>Cara Booking Service</li>
                                <p>
                                    Bisa Melakukan Booking dengan Menggunakan Aplikasi dan Melalui Website Kami, kami
                                    juga Mempunyai jaminan garansi Bengkel c<span style="color: red;">AR</span>s.
                                </p>
                                <li>Pembayaran yang Nyaman</li>
                                <p>
                                    Pembayaran Bisa Di lakukan Via Transfer Atau Mau Langsung Ke Bengkel kami Ajah dan
                                    Menjamin akurasi pelayanan yang cepat dan memuaskan.
                                </p>
                            </ol>
                        </div>
                        <div class="tab-pane fade" id="product-comments" role="tabpanel"
                            aria-labelledby="product-comments-tab">
                            <ul>
                                <li>
                                    Bengkel mobil ini hebat! Mereka selalu memiliki solusi untuk masalah mobil saya dan
                                    memberikan layanan yang luar biasa. ~ Mr. Jones
                                </li>
                                <li>
                                    Saya sangat puas dengan layanan bengkel mobil ini. Mereka cepat, efisien, dan sangat
                                    ramah. ~ Mrs. Sonia
                                </li>
                                <li>
                                    Bengkel Mobil adalah tempat yang tepat untuk perbaikan mobil Anda. Mereka
                                    berpengalaman dalam bidang ini dan tahu apa yang mereka lakukan. ~ Mrs. Frisca
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="product-rating" role="tabpanel"
                            aria-labelledby="product-rating-tab"> Saya sangat senang dengan bengkel mobil yang baru saja
                            saya gunakan! Mereka benar-benar menawarkan layanan yang luar biasa. Mereka sangat cepat dan
                            profesional dalam menyelesaikan pekerjaan, dan mereka juga sangat ramah dan bersedia
                            membantu saya dengan apa pun yang saya butuhkan. Saya juga merasa aman dan nyaman saat
                            berkunjung ke sana karena tempatnya bersih dan rapi. Saya tidak ragu untuk merekomendasikan
                            bengkel mobil ini kepada teman-teman dan keluarga saya!. </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<?php

include_once('templates/footer.php');

?>