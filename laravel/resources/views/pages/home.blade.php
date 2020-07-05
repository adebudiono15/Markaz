@extends('layouts.app')

@section('title', 'Markaz Media')

@section('content')
<!-- main content -->
<main>
    <!-- content 1 -->
    <div class="jumbotron jumbotron-fluid jumbosatu">
        <div class="container">
            <div class="row">
                <div class="col-md-6 animate__animated animate__backInUp ">
                    <h1 class="h-jumbo-satu">JASA PASANG CCTV PROFESIONAL
                    </h1>
                    <p class="text-white">Pasang dulu baru bayar...!</p>
                    <button class="btn btn_jumbo-satu mt-5">Hubungi Sekarang</button>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ url('frontend/image/slider2-img1.png') }}"
                        class="img-jumbo animate__animated animate__fadeInRight" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- last content 1 -->

    <!-- content 2 -->
    <div class="container-fluid content-dua" id="tentang" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-content-2">
                    <h1 class="text-primary">Markaz Media</h1>
                    <hr />
                    <p>Markaz Media adalah salah satu pioner Jasa Pasang dan Distributor CCTV terbaik dan terpercaya di
                        Indonesia yang bergaransi resmi. Berkontribusi dalam pemasangan kamera cctv untuk skala besar
                        maupun kecil. Kami melayani pemasangan
                        cctv di indoor maupun outdoor, seperti di Kantor, Hotel, sekolah, Rumah dan tempat-tempat
                        lainnya. Pemasangan cctv dihandle langsung oleh teknisi professional yang sudah berpengalaman.
                        Di setiap pemasangan kamera cctv dari
                        awal sampai selesai dilakukan sesuai standard operasional prosedure. Sehingga, hasil pemasangan
                        lebih rapi, aman dan sesuai dengan yang diharapkan. Jadi, segera hubungi kami untuk Jasa Pasang
                        dan Distributor CCTV yang bagus
                        dan aman.</p>
                    <button class=" btn btn-outline-primary"> Paket Harga </button>
                </div>
                <div class="col-md-6 img-content-2 text-center">
                    <img src="{{ url('frontend/image/content2.jpg') }}" class="img-dua shadow" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- last content 2 -->

    <!-- content 3 -->
    <div class="container-fluid content-tiga" data-aos="fade-up">
        <h1 class="text-center text-primary">Kenapa harus kami?</h1>
        <div class="container">
            <div class="row panel-satu">
                <div class="col-lg-4 text-center">
                    <img src="https://img.icons8.com/fluent/48/000000/list.png" />
                    <h5 class="text-primary mt-4">Banyak Pilihan Paket</h5>
                    <p>Kami memiliki banyak paket CCTV dengan harga terbaik yang bisa dipilih sesuai dengan budget dan
                        kebutuhan Anda</p>
                </div>

                <div class="col-lg-4 text-center">
                    <img src="https://img.icons8.com/ultraviolet/48/000000/contract.png" />
                    <h5 class="text-primary mt-4">Berkualitas Dan Bergaransi</h5>
                    <p>Menyediakan produk-produk CCTV berkualitas serta bertehnologi terbaru dan memiliki Garansi 1
                        Tahun Penuh
                    </p>
                </div>

                <div class="col-lg-4 text-center">
                    <img src="https://img.icons8.com/ultraviolet/48/000000/group-task.png" />
                    <h5 class="text-primary mt-4">Team Professional</h5>
                    <p>Bersama team professional yang sudah berpengalaman, Kami siap mewujudkan pemasangan CCTV sesuai
                        permintaan
                    </p>
                </div>
            </div>

            <div class="row panel-dua">
                <div class="col-lg-4 text-center">
                    <img src="https://img.icons8.com/color/48/000000/chain-intermidiate--v1.png" />
                    <h5 class="text-primary mt-4">Hasil Yang Maksimal</h5>
                    <p>Memiliki rancangan instalasi CCTV yang jelas dan sesuai standard operating procedures. Hasil
                        pemasangan CCTV lebih rapi</p>
                </div>

                <div class="col-lg-4 text-center">
                    <img src="https://img.icons8.com/ultraviolet/48/000000/money-bag-euro.png" />
                    <h5 class="text-primary mt-4">Harga Terjangkau</h5>
                    <p>Penawaran harga pemasangan CCTV sangat terjangkau dan real sesuai harga yang telah disepakati
                        sebelumnya
                    </p>
                </div>

                <div class="col-lg-4 text-center">
                    <img src="https://img.icons8.com/color/48/000000/chat.png" />
                    <h5 class="text-primary mt-4">Pelayanan Yang Baik</h5>
                    <p>Butuh konsultasi lebih lanjut tentang CCTV ? kami dengan senang hati menjawab segala pertanyaan
                        anda
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--last  content 3 -->

    <!-- content 4 -->
    <div class="container content-empat" id="paket" data-aos="zoom-in">
        <h1 class="text-center text-primary">Harga Paket Pemasangan CCTV</h1>
        <p class="text-center text-danger"><small> Harga paket sudah beserta jasa pemasangan (Khusus JABODETABEK dan
                BANTEN). Pemesanan bisa bayar ditempat (COD) setelah pemasangan.</small></p>
        <hr />
        <div class="row text-center">
            <div class="col text-center" style="margin-top: 50px;">
                <img src="{{ url('frontend/image/spc.png') }}" alt="" class="text-center">
            </div>
        </div>
        <div class="row ml-2 row-paket">
            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/spc.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">2 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 4 Channel SPC
                        </p>
                        <hr />
                        <p class="card-text">2 Unit kamera SPC (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 500GB
                        </p>
                        <hr />
                        <p class="card-text">40 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 10 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%202%20kamera%20SPC"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow  paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/spc.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">4 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 4 Channel SPC
                        </p>
                        <hr />
                        <p class="card-text">4 Unit kamera SPC (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 500GB
                        </p>
                        <hr />
                        <p class="card-text">100 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 10 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%204%20kamera%20SPC"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/spc.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">6 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 8 Channel SPC
                        </p>
                        <hr />
                        <p class="card-text">6 Unit kamera SPC (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 1000GB
                        </p>
                        <hr />
                        <p class="card-text">150 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 20 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%206%20kamera%20SPC"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- row 2  ml-4 -->
        <div class="row mt-5 ml-2  row-paket">
            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/spc.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">8 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 8 Channel SPC
                        </p>
                        <hr />
                        <p class="card-text">8 Unit kamera SPC (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 1000GB
                        </p>
                        <hr />
                        <p class="card-text">170 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 20 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%208%20kamera%20SPC"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/spc.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">12 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 16 Channel SPC
                        </p>
                        <hr />
                        <p class="card-text">12 Unit kamera SPC (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 2000GB
                        </p>
                        <hr />
                        <p class="card-text">250 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 30 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%2012%20kamera%20SPC"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/spc.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">16 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 16 Channel SPC
                        </p>
                        <hr />
                        <p class="card-text">16 Unit kamera SPC (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 2000GB
                        </p>
                        <hr />
                        <p class="card-text">350 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 30 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%2016%20kamera%20SPC"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- last spc -->


        <!-- hik -->
        <div class="row">
            <div class="col text-center" style="margin-top: 150px;">
                <img src="{{ url('frontend/image/Hikvision.png') }}" alt="" class="text-center">
            </div>
        </div>
        <div class="row ml-2 row-paket">
            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/Hikvision.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">2 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 4 Channel HIKVISION
                        </p>
                        <hr />
                        <p class="card-text">2 Unit kamera HIKVISION (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 500GB
                        </p>
                        <hr />
                        <p class="card-text">40 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 10 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%202%20kamera%20HIKVISION"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/Hikvision.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">4 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 4 Channel HIKVISION
                        </p>
                        <hr />
                        <p class="card-text">4 Unit kamera HIKVISION (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 500GB
                        </p>
                        <hr />
                        <p class="card-text">100 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 10 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%204%20kamera%20HIKVISION"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/Hikvision.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">6 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 8 Channel HIKVISION
                        </p>
                        <hr />
                        <p class="card-text">6 Unit kamera HIKVISION (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 1000GB
                        </p>
                        <hr />
                        <p class="card-text">150 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 20 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%206%20kamera%20HIKVISION"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- row 2 -->
        <div class="row mt-5 ml-2  row-paket">
            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/Hikvision.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">8 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 8 Channel HIKVISION
                        </p>
                        <hr />
                        <p class="card-text">8 Unit kamera HIKVISION (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 1000GB
                        </p>
                        <hr />
                        <p class="card-text">170 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 20 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%208%20kamera%20HIKVISION"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/Hikvision.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">12 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 16 Channel HIKVISION
                        </p>
                        <hr />
                        <p class="card-text">12 Unit kamera HIKVISION (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 2000GB
                        </p>
                        <hr />
                        <p class="card-text">250 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 30 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%2012%20kamera%20HIKVISION"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/Hikvision.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">16 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 16 Channel HIKVISION
                        </p>
                        <hr />
                        <p class="card-text">16 Unit kamera HIKVISION (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 2000GB
                        </p>
                        <hr />
                        <p class="card-text">350 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 30 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%2016%20kamera%20HIKVISION"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- last hik -->

        <!-- DAHUA -->
        <div class="row">
            <div class="col text-center" style="margin-top: 150px;">
                <img src="{{ url('frontend/image/dahua.png') }}" alt="" class="text-center">
            </div>
        </div>
        <div class="row ml-2  row-paket">
            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/dahua.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">2 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 4 Channel DAHUA
                        </p>
                        <hr />
                        <p class="card-text">2 Unit kamera DAHUA (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 500GB
                        </p>
                        <hr />
                        <p class="card-text">40 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 10 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%202%20kamera%20DAHUA"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/dahua.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">4 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 4 Channel DAHUA
                        </p>
                        <hr />
                        <p class="card-text">4 Unit kamera DAHUA (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 500GB
                        </p>
                        <hr />
                        <p class="card-text">100 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 10 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%204%20kamera%20DAHUA"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/dahua.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">6 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 8 Channel DAHUA
                        </p>
                        <hr />
                        <p class="card-text">6 Unit kamera DAHUA (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 1000GB
                        </p>
                        <hr />
                        <p class="card-text">150 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 20 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%206%20kamera%20DAHUA"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- row 2 -->
        <div class="row mt-5 ml-2  row-paket">
            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/dahua.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">8 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 8 Channel DAHUA
                        </p>
                        <hr />
                        <p class="card-text">8 Unit kamera DAHUA (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 1000GB
                        </p>
                        <hr />
                        <p class="card-text">170 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 20 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%208%20kamera%20DAHUA"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/dahua.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">12 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 16 Channel DAHUA
                        </p>
                        <hr />
                        <p class="card-text">12 Unit kamera DAHUA (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 2000GB
                        </p>
                        <hr />
                        <p class="card-text">250 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 30 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%2012%20kamera%20DAHUA"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/dahua.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">16 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 16 Channel DAHUA
                        </p>
                        <hr />
                        <p class="card-text">16 Unit kamera DAHUA (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 2000GB
                        </p>
                        <hr />
                        <p class="card-text">350 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 30 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%2016%20kamera%20DAHUA"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- LAST DAHUA -->


        <!-- AHD -->
        <div class="row">
            <div class="col text-center" style="margin-top: 150px;">
                <img src="{{ url('frontend/image/AHD.png') }}" alt="" class="text-center">
            </div>
        </div>
        <div class="row ml-2 row-paket">
            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/AHD.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">2 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 4 Channel AHD
                        </p>
                        <hr />
                        <p class="card-text">2 Unit kamera AHD (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 500GB
                        </p>
                        <hr />
                        <p class="card-text">40 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 10 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%202%20kamera%20AHD"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/AHD.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">4 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 4 Channel AHD
                        </p>
                        <hr />
                        <p class="card-text">4 Unit kamera AHD (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 500GB
                        </p>
                        <hr />
                        <p class="card-text">100 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 10 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="#" class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/AHD.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">6 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 8 Channel AHD
                        </p>
                        <hr />
                        <p class="card-text">6 Unit kamera AHD (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 1000GB
                        </p>
                        <hr />
                        <p class="card-text">150 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 20 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%206%20kamera%20AHD"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- row 2 -->
        <div class="row mt-5 ml-2 row-paket">
            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/AHD.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">8 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 8 Channel AHD
                        </p>
                        <hr />
                        <p class="card-text">8 Unit kamera AHD (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 1000GB
                        </p>
                        <hr />
                        <p class="card-text">170 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 20 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%208%20kamera%20AHD"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/AHD.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">12 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 16 Channel AHD
                        </p>
                        <hr />
                        <p class="card-text">12 Unit kamera AHD (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 2000GB
                        </p>
                        <hr />
                        <p class="card-text">250 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 30 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%2012%20kamera%20AHD"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center" style="margin-top: 50px;">
                <div class="card shadow paket" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('frontend/image/AHD.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">16 Kamera</h5>
                        <hr />
                        <p class="card-text">1 unit DVR 16 Channel AHD
                        </p>
                        <hr />
                        <p class="card-text">16 Unit kamera AHD (bebas)
                        </p>
                        <hr />
                        <p class="card-text">1 HDD 2000GB
                        </p>
                        <hr />
                        <p class="card-text">350 meter kabel coaxial rg59
                        </p>
                        <hr />
                        <p class="card-text">1 Unit PS 30 amper
                        </p>
                        <hr />
                        <p class="card-text">Kabel HDMI/VGA
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Pemasangan
                        </p>
                        <hr />
                        <p class="card-text text-danger">Gratis Setting Online
                        </p>
                        <hr />
                        <a href="https://api.whatsapp.com/send?phone=6283841230838&text=Halo%20admin%20saya%20tertarik%20untuk%20membeli%20paket%2016%20kamera%20AHD"
                            class="btn btn-primary">Pesan</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- LAST AHD -->
    </div>
    <!-- last content 4 -->

    <!-- content 5 -->
    <div class="continer content-lima text-center">
        <h1 class="text-center text-primary">Partner Kami</h1>
        <img src="{{ url('frontend/image/patner.jpg') }}" class="img-patner" alt="" data-aos="fade-up">

    </div>
    <!-- last content 5 -->
    <!-- content 6 -->
    <div class="continer content-enam" id="galeri">
        <h1 class="text-center text-primary" style="margin-top: 150px;">Galeri</h1>
        <div class="container">
            <hr class="mt-2 mb-5">
            <div class="row" data-aos="fade-up">

                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/13.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/2.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/3.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/4.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/5.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/6.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/7.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/8.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/14.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/10.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/11.jpeg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/12.jpeg') }}" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- last content 6 -->

    <!-- content 7 -->
    <div class="continer content-enam">
        <h1 class="text-center text-primary" style="margin-top: 150px;">Klien Kami</h1>
        <div class="container">
            <hr class="mt-2 mb-5">
            <div class="row" data-aos="fade-down">

                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/k1.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/k2.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="{{ url('frontend/image/k3.png') }}" alt="">
                    </a>
                </div>

            </div>

        </div>
    </div>
    <!-- last content 7 -->
    <!-- faq -->
    <div class="jumbotron-fluid faq_bg">
        <section id="faq-area" data-scroll-index="7">
            <div class="container">
                <h1 class="text-center text-primary" style="margin-top: 150px;">FAQ</h1>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div id="accordion" role="tablist">
                            <!--start faq single-->
                            <div class="card two">
                                <div class="card-header active" role="tab" id="faq1">
                                    <h5 class="mb-0">
                                        <a class="btn btn-light tombol-faq text-left" data-toggle="collapse"
                                            href="#collapse1" role="button" aria-expanded="true"
                                            aria-controls="collapseExample">Apa
                                            Bagaimana cara pemesanan CCTV di Markaz Media?</a>
                                    </h5>
                                </div>
                                <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="faq1"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class=" pt-3 ">Sangat mudah, Cukup menghubungi kami melalui kontak yang
                                            tertera pada web ini dan Sales Representative akan melayani Anda dengan
                                            baik.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--end faq single-->
                            <!-- faq 2 -->
                            <div class="card two">
                                <div class="card-header" role="tab" id="faq2">
                                    <h5 class="mb-0">
                                        <a class="btn btn-light tombol-faq text-left" data-toggle="collapse"
                                            href="#collapse2" role="button" aria-expanded="true"
                                            aria-controls="collapseExample">Bagaimana sistem pebayaran di Markaz
                                            Media?</a>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="faq2"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class=" pt-3 ">Pembayaran dilakukan setelah pemasangan cctv selesai melalui
                                            transfer Bank. (Tidak diperkenankan membayar cash ke teknisinya langsung
                                            kecuali sudah ad perjanjian dengan pihak Sales Representative kami)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- last faq 2 -->
                            <!-- faq 3 -->
                            <div class="card two">
                                <div class="card-header" role="tab" id="faq3">
                                    <h5 class="mb-0">
                                        <a class="btn btn-light tombol-faq text-left" data-toggle="collapse"
                                            href="#collapse3" role="button" aria-expanded="true"
                                            aria-controls="collapseExample">Apakah ada garansi resmi?</a>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="faq3"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class=" pt-3 ">Ya! Ada. Kami memiliki garansi resmi produsen untuk semua
                                            produk cctv kami jual dan garansi pemasangan terhitung selama 1 bulan
                                            setelah pemasangan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- last faq 3 -->
                            <!-- faq 4 -->
                            <div class="card two">
                                <div class="card-header" role="tab" id="faq4">
                                    <h5 class="mb-0">
                                        <a class="btn btn-light tombol-faq text-left" data-toggle="collapse"
                                            href="#collapse4" role="button" aria-expanded="true"
                                            aria-controls="collapseExample">Lalu bagaimana cara mendapatkan garansi
                                            dari Markaz Media?</a>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="faq4"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class=" pt-3 ">Mudah sekali, cukup menghubungi kami di kontak yang tertera di
                                            website ini.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- last gaq 4 -->
                        </div>
                    </div>
                    <!-- form -->
                    <div class=" col-md-4 ">
                        <img src="{{ url('frontend/image/6.jpeg') }}" class="img-faq shadow" width="320px"
                            style="margin-left:100px; border-radius: 10px;" alt=" ">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- last faq -->
</main>

<!-- last main content -->

@endsection