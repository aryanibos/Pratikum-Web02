<?Php 

include_once('templates/topbar.php');
include_once('templates/sidebar.php');

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="img/AryaI.png"
                            alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">Arya Isnaidi</h3>

                    <p class="text-muted text-center">Software Engineer</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Followers</b> <a class="float-right">5,348</a>
                        </li>
                        <li class="list-group-item">
                            <b>Following</b> <a class="float-right">20</a>
                        </li>
                        <li class="list-group-item">
                            <b>Friends</b> <a class="float-right">20,287</a>
                        </li>
                    </ul>

                    <a href="https://github.com/aryanibos" target="_blank"
                        class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Education</strong>
                    <ul>
                        <li>SD Negeri 49 Pangkal Pinang</li>
                        <li>SMP Negeri 8 Pangkal Pinang</li>
                        <li>SMK Negeri 2 Pangkal Pinang</li>
                        <li>STT Terpadu Nurul Fikri</li>
                    </ul>


                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                    <p class="text-muted">Jakarta Selatan, Indonesia</p>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                    <ul class="text-muted">
                        <li class="tag tag-danger">UI Design</li>
                        <li class="tag tag-success">HTML5</li>
                        <li class="tag tag-success">CSS3</li>
                        <li class="tag tag-info">Javascript</li>
                        <li class="tag tag-success">Bootstrap</li>
                        <li class="tag tag-warning">PHP</li>
                        <li class="tag tag-success">YII.php</li>
                        <li class="tag tag-success">CI.php</li>
                        <li class="tag tag-success">Laravel.php</li>
                        <li class="tag tag-primary">Node.js</li>
                        <li class="tag tag-success">React.js</li>
                    </ul>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                    <p class="text-muted">
                        Nama saya Arya Isnaidi. Saya lulusan Pengembangan Perangkat Lunak yang mencintai dunia Digital.
                        Saya memiliki pengalaman menjadi Front End dan Back End Developer Selama 1 Tahun.
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="img/testimonial-3.jpg"
                                        alt="user image">
                                    <span class="username">
                                        <a href="#">Anonim.</a>
                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                    </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Tips Aktivitas Berguna Seorang GreyHAT
                                </p>
                                <ol>
                                    <li>
                                        Mencari dan menganalisis kerentanan pada sistem, aplikasi, dan situs web.
                                    </li>
                                    <li>
                                        Mencari celah keamanan yang dapat digunakan untuk mengakses sistem, aplikasi,
                                        atau situs web agar mendapat keuntungan.
                                    </li>
                                    <li>
                                        Membuat laman atau script dengan menggunakan HTML dan CSS untuk mengubah
                                        tampilan
                                        asli situs web.
                                    </li>
                                    <li>
                                        Meng-upload malware atau konten berbahaya lainnya ke situs web telah Melangggar
                                        Aturan Agama.
                                    </li>
                                    <li>
                                        Menjaga atau memalsukan indentitas kita tetap anonim dengan menggunakan teknik
                                        seperti proxy
                                        atau penyamaran IP address.
                                    </li>
                                </ol>


                                <p>
                                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
                                        Share</a>
                                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
                                        Like</a>
                                    <span class="float-right">
                                        <a href="#" class="link-black text-sm">
                                            <i class="far fa-comments mr-1"></i> Comments (800)
                                        </a>
                                    </span>
                                </p>

                                <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                            </div>
                            <!-- /.post -->

                            <!-- Post -->
                            <div class="post clearfix">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="img/testimonial-2.jpg"
                                        alt="User Image">
                                    <span class="username">
                                        <a href="#">Arya Isnaidi</a>
                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                    </span>
                                    <span class="description">Sent you a message - 3 days ago</span>
                                </div>
                                <p>
                                    Tips Aktivitas Berguna Seorang Programmer
                                </p>
                                <ol>
                                    <li>
                                        Membuat prototipe dari program yang akan dibuat dengan membuat diagram alir
                                        kerja dan pseudocode untuk memvisualisasikan prosesnya.
                                    </li>
                                    <li>
                                        Mengkode program dengan bahasa pemrograman tertentu seperti Java, C++, Python,
                                        PHP, dan lainnya sesuai dengan spesifikasi proyek yang telah ditentukan.
                                    </li>
                                    <li>
                                        Melakukan pengujian unit untuk memastikan bahwa setiap bagian dari program
                                        berfungsi dengan benar sebelum melakukan pengujian sistem secara keseluruhan.
                                    </li>
                                    <li>
                                        Mengintegrasikan antarmuka pengguna (UI) dan antarmuka pemrograman aplikasi
                                        (API) ke dalam program yang sedang dibuat demi meningkatkan kinerja dan
                                        fungsionalitasnya secara keseluruhan.
                                    </li>
                                    <li>
                                        Melakukan debugging terhadap program yang telah jadi untuk menghilangkan bug dan
                                        memperbaiki masalah lainnya agar program bekerja dengan benar sesuai dengan
                                        spesifikasinya awalnya
                                    </li>
                                </ol>

                                <p>
                                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
                                        Share</a>
                                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
                                        Like</a>
                                    <span class="float-right">
                                        <a href="#" class="link-black text-sm">
                                            <i class="far fa-comments mr-1"></i> Comments (1,2k)
                                        </a>
                                    </span>
                                </p>


                                <form class="form-horizontal">
                                    <div class="input-group input-group-sm mb-0">
                                        <input class="form-control form-control-sm" placeholder="Response">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-danger">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.post -->

                            <!-- Post -->
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="dist/img/user6-128x128.jpg"
                                        alt="User Image">
                                    <span class="username">
                                        <a href="#">Adam Jones</a>
                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                    </span>
                                    <span class="description">Posted 5 photos - 5 days ago</span>
                                </div>
                                <!-- /.user-block -->
                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <p>
                                            Aestetic Foto
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img class="img-fluid" src="dist/img/photo1.png" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img class="img-fluid mb-3" src="dist/img/photo2.png" alt="Photo">
                                                <img class="img-fluid" src="dist/img/photo3.jpg" alt="Photo">
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <img class="img-fluid mb-3" src="dist/img/photo4.jpg" alt="Photo">
                                                <img class="img-fluid" src="dist/img/photo1.png" alt="Photo">
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <p>
                                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
                                        Share</a>
                                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
                                        Like</a>
                                    <span class="float-right">
                                        <a href="#" class="link-black text-sm">
                                            <i class="far fa-comments mr-1"></i> Comments (1k)
                                        </a>
                                    </span>
                                </p>

                                <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                            </div>
                            <!-- /.post -->
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <!-- The timeline -->
                            <div class="timeline timeline-inverse">
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-danger">
                                        10 Feb. 2014
                                    </span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-envelope bg-primary"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                        <div class="timeline-body">
                                            "Kesuksesan di dunia dan akhirat adalah hasil dari kerja keras, tekad yang
                                            kuat dan doa yang ikhlas. Jadilah orang yang pantang menyerah, berusaha
                                            untuk setiap tujuanmu, jangan pernah berhenti berjuang dan selalu ingat
                                            bahwa Allah pasti akan membimbingmu menuju jalan yang terbaik."
                                        </div>
                                        <div class="timeline-footer">
                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-user bg-info"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                        <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your
                                            friend request
                                        </h3>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-comments bg-warning"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post
                                        </h3>

                                        <div class="timeline-body">
                                            Bawa aku ke pemimpinmu! Swiss kecil dan netral! Kami lebih seperti Jerman,
                                            ambisius dan disalahpahami!
                                        </div>
                                        <div class="timeline-footer">
                                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-success">
                                        3 Jan. 2014
                                    </span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-camera bg-purple"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                        <div class="timeline-body">
                                            <img width="30%" src="img/service-besar.jpg" alt="...">
                                            <img width="30%" src="img/service-ringan.jpg" alt="...">
                                            <img width="30%" src="img/Servis-berkala-mobil.jpg" alt="...">
                                            <img width="30%" src="img/Servis-besar-mobil.webp" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <div>
                                    <i class="far fa-clock bg-gray"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience"
                                            placeholder="Experience"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> I agree to the <a href="#">terms and
                                                    conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->

<?php

include_once('templates/footer.php');

?>