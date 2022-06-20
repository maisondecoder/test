<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="html2canvas.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="drop.css" rel="stylesheet" />
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }

        .modal-dialog {
            max-width: 1280px !important;
            margin: auto !important;
        }
    </style>
    <title>Snaptor+ v2.0</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-brand fw-bold">Snaptor+ v2.0</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="d-flex">
                    <div class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Program:</a></div>
                    <select id="logoprogram" class="form-control js-example-basic-single" aria-label="Default select example" style="width:400px">
                        <option value="nologo.png" selected>Tanpa Logo</option>
                        <optgroup label="Sinetron">
                            <option value="logo_aw5.png">Amanah Wali 5</option>
                            <option value="logo_anugerahterindah.png">Anugerah Terindah</option>
                            <option value="logo_anakjalanannb.png">Anak Jalanan A New Beginning</option>
                            <option value="logo_cintaanaksholeh.png">Cinta Anak Sholeh</option>
                            <option value="logo_duniaterbalik.png">Dunia Terbalik</option>
                            <option value="logo_ic.png">Ikatan Cinta</option>
                            <option value="logo_ipa.png">IPA & IPS</option>
                            <option value="logo_kuraihbintang.png">Kuraih Bintang</option>
                            <option value="logo_pupa.png">Putri Untuk Pangeran</option>
                            <option value="logo_rtkampungambyar.png">RT Kampung Ambyar</option>
                            <option value="logo_top.png">Tukang Ojek Pengkolan</option>
                        </optgroup>
                        <optgroup label="Infotainment">
                            <option value="logo_barista.png">Barista</option>
                            <option value="logo_gospot.png">Go Spot</option>
                            <option value="logo_obsesi.png">Obsesi</option>
                            <option value="logo_son.png">Seleb On News</option>
                            <option value="logo_silet.png">Silet</option>
                        </optgroup>
                        <optgroup label="News">
                            <option value="logo_bip.png">Buletin Inews Pagi</option>
                            <option value="logo_bis.png">Buletin Inews Siang</option>
                            <option value="logo_bim.png">Buletin Inews Malam</option>
                            <option value="logo_inewsp.png">Inews Pagi</option>
                            <option value="logo_inewss.png">Inews Siang</option>
                            <option value="logo_inewsm.png">Inews Malam</option>
                            <option value="logo_lip.png">Lintas Inews Pagi</option>
                            <option value="logo_lis.png">Lintas Inews Siang</option>
                            <option value="logo_lim.png">Lintas Inews Malam</option>
                            <option value="logo_sip.png">Seputar Inews Pagi</option>
                            <option value="logo_sis.png">Seputar Inews Siang</option>
                            <option value="logo_sim.png">Seputar Inews Malam</option>
                        </optgroup>
                        <optgroup label="Lainnya">
                            <option value="logo_tuturtinular.png">Tutur Tinular</option>
                            <option value="logo_kks.png">Kejebak Kawin</option>
                            <option value="logo_hotspot.png">Hot Spot</option>
                            <option value="logo_goksabis.png">Goks Abis</option>
                            <option value="logo_cafedmd.png">Cafe DMD</option>
                            <option value="logo_xfactor.png">X Factor</option>
                            <option value="logo_bapau.png">BAPAU Asli Indonesia</option>
                            <option value="logo_bgy.png">Bisa Gitu Yak</option>
                            <option value="logo_chi.png">Cahaya Hati Indonesia</option>
                            <option value="logo_hsb.png">Hati Sang Bidadari</option>
                            <option value="logo_hypening.png">Hypening</option>
                            <option value="logo_kisahviral.png">Kisah Viral</option>
                            <option value="logo_lordadi.png">Lord Adi</option>
                            <option value="logo_momnkids.png">Mom & Kids</option>
                            <option value="logo_sirqol.png">Siraman Qolbu</option>
                            <option value="logo_dahsyatnya2021.png">Dahsyatnya 2021</option>
                            <option value="logo_aw4.png">Amanah Wali 4</option>
                            <option value="logo_krks.png">Kembalinya Raden Kian Santang</option>
                            <option value="logo_sidoelgedongan.png">Si Doel Anak Gedongan</option>
                            <option value="logo_sidoelsekolahans1.png">Si Doel Anak Sekolahan S1</option>
                            <option value="logo_uangkagetlagi.png">Uang Kaget Lagi</option>
                            <option value="logo_uncensored.png">Uncensored</option>
                        </optgroup>
                    </select>
                    <div class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Format:</a></div>
                    <select id="format" class="form-control" style="max-width:100px">
                        <option value="jpeg" selected>JPEG</option>.
                        <option value="webp">WEBP</option>
                    </select>
                </div>
            </div>
        </div>
    </nav>
    <div id="dropzone" class="dropzone"></div>
    <div class="p-5 pt-4" style="margin-bottom:100px; margin-top:30px">
        <div class="row mt-4">

            <div class="col-sm-4 col-md-3">
                <div class="fs-5 mb-2">
                    <label for=""><strong>Portrait</strong> | Adjustment : </label>
                    <input type="range" min="-1200" max="0" value="0" id="portrait-adjust">
                </div>
                <div style="background:url('img/leak-bg.jpg');width:384px; height:576px;">
                    <div id="input-portrait" style="background:url('img/empty.png');background-size:cover;background-position: center left;width:384px; height:576px; background-repeat:no-repeat">
                        <center>
                            <div style="width:300px;padding-top:400px">
                                <img class="logothumbnail" src="logo/nologo.png" width="100%">
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-9">
                <div class="fs-5 mb-2">
                    <label for=""><strong>Landscape</strong> | (No Adjustment)</label>
                </div>
                <div style="background:url('img/leak-bg.jpg');width:1000px; height:562px;">
                    <div id="input-landscape" style="background:url('img/empty.png');background-size:cover;width:1000px; height:562px; background-repeat:no-repeat">
                        <div style="width:300px; float:right">
                            <img class="logothumbnail" src="logo/nologo.png" width="100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-4 col-md-3">
                    <div class="fs-5 mb-2">
                        <label for=""><strong>Square</strong> | Adjustment : </label>
                        <input type="range" min="-600" max="0" value="0" id="square-adjust">
                    </div>
                    <div style="background:url('img/leak-bg.jpg');width:384px; height:384px;">
                        <div id="input-square" style="background:url('img/empty.png');background-size:cover;background-position: center left;width:384px !important; height:384px !important; background-repeat:no-repeat">
                            <center>
                                <div style="width:300px;padding-top:240px">
                                    <img class="logothumbnail" src="logo/nologo.png" width="250px">
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-9">
                    <div class="fs-5 mb-2">
                        <label for=""><strong>Medium</strong> | Adjustment : </label>
                        <input type="range" min="-150" max="0" value="0" id="medium-adjust">
                    </div>
                    <div style="background:url('img/leak-bg.jpg');width:1149px; height:492px;">
                        <div id="input-medium" style="background:url('img/empty.png');background-size:100% auto; background-position: center;width:1149px; height:492px; background-repeat:no-repeat">
                            <div style="width:300px; float:right">
                                <img class="logothumbnail" src="logo/nologo.png" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="bg-light text-black p-2 fixed-bottom fs-5">

            <div class="row">
                <div class="col">
                    <div style="margin-left:10px;">
                        <strong>Save as : </strong> <input type="text" class="" id="saveas" placeholder="nama_file_baru" value="nama_file_baru" required>
                        <button href="#filedownload" id="generate" type="button" class="btn btn-success">Generate File</button>
                    </div>
                </div>
                <div class="col text-end">
                    <span class="fs-6 text-black-50">
                        &copy2021 by <a href="https://www.linkedin.com/in/abirutama/">Abi Rahardian Utama</a>
                    </span>
                </div>
            </div>

            <div id="filedownload" class="p-2 visually-hidden">

                <div class="fs-5 mt-2 mb-2">

                    <strong><span id="namafiledownload" class="text-danger">Nama File</span></strong> in <strong><span id="formatfiledownload" class="text-danger">JPEG</span></strong> is ready. <span class="fs-6"><em>(Generated at <span id="time">hh:mm</span> WIB)</em></span>
                </div>
                <div id="download-all" class="btn btn-primary">Download All</div>
                <!-- Button trigger modal -->
                <button id="btnModalPreview" type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#previewModasl">
                    Preview
                </button> |
                <div class="btn-group" role="group" aria-label="Basic example">

                    <a id="dportrait" class="btn btn-outline-primary" download="_p">Portrait</a>
                    <a id="dlandscape" class="btn btn-outline-primary" download="_l">Landscape</a>
                    <a id="dmedium" class="btn btn-outline-primary" download="_m">Medium</a>
                    <a id="dsquare" class="btn btn-outline-primary" download="_s">Portrait</a>
                </div>
            </div>
        </div>
        <input id="imagehere" type="file" style="opacity:0;">


        <!-- Modal -->
        <div class="modal" id="previewModasl" tabindex="-1" aria-labelledby="previewModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Preview</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div style="height:auto; overflow:hidden;">
                            <div id="hasil-portrait" style="">
                            </div>
                            <div id="hasil-square" style="">
                            </div>
                            <div id="hasil-landscape" style="">
                            </div>
                            <div id="hasil-medium" style="">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>


<script>
    $(document).ready(function() {
        var format = 'image/jpeg';
        var format_label = 'JPEG';

        //load Select2 plugin
        $('.js-example-basic-single').select2({
            theme: 'bootstrap-5'
        });

        //event mengganti logo program sesuai opsi dropdown
        $('#logoprogram').change(function() {
            $('.logothumbnail').attr('src', 'logo/' + $(this).val());
        });

        $('#format').change(function() {
            format = 'image/' + $(this).val();
            format_label = $(this).val().toUpperCase();
            $('#filedownload').addClass('visually-hidden');
            $('#formatfiledownload').text(format_label);
        });


        //fungsi cek nama program berdasar nama file image yg didrop
        function cek_nama(program) {
            var a = 0;
            var input = program;
            const namaprogram = ["seleb_on_news", "barista", "silet", "obsesi", "gospot", "tukang_ojek_pengkolan", "anugerah_terindah", "kuraih_bintang", "anak_jalanan", "putri_untuk_pangeran", "dunia_terbalik", "ikatan_cinta", "ipa_ips", "amanah_wali_5", "cinta_anak_sholeh", "rt_kampung"];
            const logoprogram = ["logo_son.png", "logo_barista.png", "logo_silet.png", "logo_obsesi.png", "logo_gospot.png", "logo_top.png", "logo_anugerahterindah.png", "logo_kuraihbintang.png", "logo_anakjalanannb.png", "logo_pupa.png", "logo_duniaterbalik.png", "logo_ic.png", "logo_ipa.png", "logo_aw5.png", "logo_cintaanaksholeh.png", "logo_rtkampungambyar.png"];
            namaprogram.forEach(function(listprogram, i) {

                if (input.includes(listprogram)) {

                    $('#logoprogram').val(logoprogram[i]);
                    $('#logoprogram').change();
                    console.log(listprogram);
                    console.log(logoprogram[i]);
                    //alert('ada');
                    a = 1;
                }
            });
            if (a == 0) {
                if (!input.includes(namaprogram)) {
                    $('#logoprogram').val('nologo.png');
                    $('#logoprogram').change();
                    //alert('gada');
                }
            }

        }

        //fungsi ketika image di drop
        /*
        $('#imagehere').change(function() {
            var gambar = URL.createObjectURL(this.files[0]);
            //alert(gambar);
            $('#input-portrait').css('background-image', 'url("' + gambar + '")');
            $('#input-landscape').css('background-image', 'url("' + gambar + '")');
            $('#input-medium').css('background-image', 'url("' + gambar + '")');
            $('#input-square').css('background-image', 'url("' + gambar + '")');

            var namagambar = this.files[0].name.split('.')[0].toLowerCase().replace(/ /g, "_");
            namagambar = namagambar.replace('-', '_');
            $('#saveas').val(namagambar);

            cek_nama(namagambar);
            
        });*/

        function changeImage(blob, name) {
            var gambar = blob;
            //alert(gambar);
            $('#input-portrait').css('background-image', 'url("' + gambar + '")');
            $('#input-landscape').css('background-image', 'url("' + gambar + '")');
            $('#input-medium').css('background-image', 'url("' + gambar + '")');
            $('#input-square').css('background-image', 'url("' + gambar + '")');

            var namagambar = name.split('.')[0].toLowerCase().replace(/ /g, "_");
            namagambar = namagambar.replace('-', '_');
            $('#saveas').val(namagambar);
            $('#filedownload').addClass('visually-hidden');
            cek_nama(namagambar);
            delete a;
        }


        function chamgeImageDrop() {
            var dt = event.dataTransfer;
            var files = dt.files;

            var count = files.length;

            for (var i = 0; i < files.length; i++) {
                changeImage(URL.createObjectURL(files[i]), files[i].name);
            }
        }

        // Completely based on this answer:
        // http://stackoverflow.com/a/33917000
        // … and the according JSfiddle:
        // https://jsfiddle.net/oL2akhtz/
        // 
        // Enhanced for my own purposes

        var dropZone = document.getElementById('dropzone');

        function showDropZone() {
            dropZone.style.display = "block";
        }

        function hideDropZone() {
            dropZone.style.display = "none";
        }

        function allowDrag(e) {
            if (true) { // Test that the item being dragged is a valid one
                e.dataTransfer.dropEffect = 'copy';
                e.preventDefault();
            }
        }

        function handleDrop(e) {
            e.preventDefault();
            hideDropZone();

            //alert('Drop!');
            chamgeImageDrop();
        }

        // 1
        window.addEventListener('dragenter', function(e) {
            showDropZone();
        });

        // 2
        dropZone.addEventListener('dragenter', allowDrag);
        dropZone.addEventListener('dragover', allowDrag);

        // 3
        dropZone.addEventListener('dragleave', function(e) {
            console.log('dragleave');
            hideDropZone();
        });

        // 4
        dropZone.addEventListener('drop', handleDrop);

        //fungsi adjustment slider thumbnail
        $('#portrait-adjust').on("input change", function() {
            var vportrait;
            vportrait = $(this).val();
            $('#input-portrait').css("background-position", "center left " + vportrait + "px");
        });
        $('#square-adjust').on("input change", function() {
            var vsquare;
            vsquare = $(this).val();
            $('#input-square').css("background-position", "center left " + vsquare + "px");
        });
        $('#medium-adjust').on("input change", function() {
            var vmedium;
            vmedium = $(this).val();
            $('#input-medium').css("background-position", "center bottom " + vmedium + "px");
        });

        //fungsi mengenerate image ke canvas
        function generateFile() {



            var portrait_download;
            var landscape_download;
            var medium_download;
            var square_download;

            html2canvas(document.getElementById('input-portrait'), {
                width: 384,
                height: 576,
                scale: 2
            }).then(function(canvas1) {
                document.getElementById('hasil-portrait').appendChild(canvas1);
                portrait_download = canvas1.toDataURL(format, 0.8);
                $('#dportrait').attr('href', portrait_download);
            });

            html2canvas(document.getElementById('input-landscape'), {
                width: 1000,
                height: 562.5,
                scale: 2
            }).then(function(canvas2) {
                document.getElementById('hasil-landscape').appendChild(canvas2);
                landscape_download = canvas2.toDataURL(format, 0.8);
                $('#dlandscape').attr('href', landscape_download);
            });
            html2canvas(document.getElementById('input-medium'), {
                width: 1149,
                height: 492,
                scale: 2
            }).then(function(canvas3) {
                document.getElementById('hasil-medium').appendChild(canvas3);
                medium_download = canvas3.toDataURL(format, 0.8);
                $('#dmedium').attr('href', medium_download);
            });
            html2canvas(document.getElementById('input-square'), {
                width: 384,
                height: 384,
                scale: 2
            }).then(function(canvas4) {
                document.getElementById('hasil-square').appendChild(canvas4);
                square_download = canvas4.toDataURL(format, 0.8);
                $('#dsquare').attr('href', square_download);
            });

            var namafile = $('#saveas').val().toLowerCase();

            $('#namafiledownload').html(namafile);

            $('#dportrait').attr('download', namafile + '_p');
            $('#dlandscape').attr('download', namafile + '_l');
            $('#dmedium').attr('download', namafile + '_m');
            $('#dsquare').attr('download', namafile + '_s');
        }

        //fungsi download all
        $("#download-all").on("click", function() {
            setTimeout(function() {
                $("#dportrait")[0].click();
            }, 500);
            setTimeout(function() {
                $("#dlandscape")[0].click();
            }, 1500);
            setTimeout(function() {
                $("#dmedium")[0].click();
            }, 2000);
            setTimeout(function() {
                $("#dsquare")[0].click();
            }, 2500);

        });


        //fungsi ketika tombol generate ditekan
        $('#generate').click(function() {
            const d = new Date();
            var hours = d.getHours();
            var minutes = d.getMinutes();
            $('#time').text(hours + ':' + minutes);
            //$('#generate').attr('disabled', true);
            $(this).text('Loading...');
            $('#filedownload').addClass('visually-hidden');
            document.getElementById('hasil-portrait').innerHTML = "";
            document.getElementById('hasil-landscape').innerHTML = "";
            document.getElementById('hasil-medium').innerHTML = "";
            document.getElementById('hasil-square').innerHTML = "";

            setTimeout(function() {
                generateFile();
                $('#generate').attr('disabled', true);
            }, 0);
            setTimeout(function() {
                $('#filedownload').removeClass('visually-hidden');
                $('#generate').text('Generate File');
                $('#generate').attr('disabled', false);
            }, 1000);
        });
    });
</script>