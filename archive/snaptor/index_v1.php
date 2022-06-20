<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="html2canvas.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title>R+ Thumbnail Generator</title>
</head>

<body>
    <div class="bg-primary text-white p-3 fixed-top fs-3">
        <label for=""><strong>STEP 1.) Drop Image Here : </strong></label>
        <input id="imagehere" type="file">
    </div>
    <div class="p-5 pt-4" style="margin-top:80px; margin-bottom:280px">
        <label class="fs-3 mb-4"><strong>STEP 2.) Adjustment : </strong></label>
        <div class="fs-5 mb-2">
            <label for=""><strong>Logo Program</strong></label>
        </div>
        <select id="logoprogram" class="form-select js-example-basic-single" aria-label="Default select example" style="max-width:800px">
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
            <hr class="mt-4 mb-4">
            <div class="fs-5 mb-2">
                <label for=""><strong>Preview</strong> : </label>
            </div>
            <div style="margin-bottom:120px; height:auto; overflow:hidden;">
                <div id="hasil-portrait" style="">
                </div>
                <div id="hasil-landscape" style="">
                </div>
                <div id="hasil-medium" style="">
                </div>
                <div id="hasil-square" style="">
                </div>
            </div>

        </div>
        <div class="bg-light text-black p-3 fixed-bottom fs-3">

            <strong>STEP 3.) Save as : </strong> <input type="text" id="saveas" placeholder="nama_file_baru" value="nama_file_baru" required>
            <button href="#filedownload" id="generate" type="button" class="btn btn-primary btn-lg">Generate File</button><br>
            <div id="filedownload" class="p-2 visually-hidden">
                <a class="btn btn-primary" id="dportrait" href="" download="_p">Download Portrait</a><br>
                <a class="btn btn-primary" id="dlandscape" href="" download="_l">Download Landscape</a><br>
                <a class="btn btn-primary" id="dmedium" href="" download="_m">Download Medium</a><br>
                <a class="btn btn-primary" id="dsquare" href="" download="_s">Download Square</a>
            </div>
        </div>
</body>

</html>
<script>
    $(document).ready(function() {
        //load Select2 plugin
        $('.js-example-basic-single').select2();

        //event mengganti logo program sesuai opsi dropdown
        $('#logoprogram').change(function() {
            $('.logothumbnail').attr('src', 'logo/' + $(this).val());
        });


        //fungsi cek nama program berdasar nama file image yg didrop
        function cek_nama(program) {
            var input = program;
            //var cek = "obsesi";
            const namaprogram = ["seleb_on_news", "barista", "silet", "obsesi", "gospot", "tukang_ojek_pengkolan", "anugerah_terindah", "kuraih_bintang", "anak_jalanan", "putri_untuk_pangeran", "dunia_terbalik", "ikatan_cinta", "ipa_ips", "amanah_wali_5", "cinta_anak_sholeh", "rt_kampung"];
            const logoprogram = ["logo_son.png", "logo_barista.png", "logo_silet.png", "logo_obsesi.png", "logo_gospot.png", "logo_top.png", "logo_anugerahterindah.png", "logo_kuraihbintang.png", "logo_anakjalanannb.png", "logo_pupa.png", "logo_duniaterbalik.png", "logo_ic.png", "logo_ipa.png", "logo_aw5.png", "logo_cintaanaksholeh.png", "logo_rtkampungambyar.png"];
            namaprogram.forEach(function(logo, i) {
                if (input.includes(logo)) {
                    $('#logoprogram').val(logoprogram[i]);
                    $('#logoprogram').change();
                    console.log(logo);
                    console.log(logoprogram[i]);
                }
            })
        }

        //fungsi ketika image di drop
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
        });

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
                portrait_download = canvas1.toDataURL('image/jpeg', 0.8);
                $('#dportrait').attr('href', portrait_download);
            });

            html2canvas(document.getElementById('input-landscape'), {
                width: 1000,
                height: 562.5,
                scale: 2
            }).then(function(canvas2) {
                document.getElementById('hasil-landscape').appendChild(canvas2);
                landscape_download = canvas2.toDataURL('image/jpeg', 0.8);
                $('#dlandscape').attr('href', landscape_download);
            });
            html2canvas(document.getElementById('input-medium'), {
                width: 1149,
                height: 492,
                scale: 2
            }).then(function(canvas3) {
                document.getElementById('hasil-medium').appendChild(canvas3);
                medium_download = canvas3.toDataURL('image/jpeg', 0.8);
                $('#dmedium').attr('href', medium_download);
            });
            html2canvas(document.getElementById('input-square'), {
                width: 384,
                height: 384,
                scale: 2
            }).then(function(canvas4) {
                document.getElementById('hasil-square').appendChild(canvas4);
                square_download = canvas4.toDataURL('image/jpeg', 0.8);
                $('#dsquare').attr('href', square_download);
            });

            var namafile = $('#saveas').val().toLowerCase();

            $('#dportrait').html('Download ' + namafile + '_p');
            $('#dlandscape').html('Download ' + namafile + '_l');
            $('#dmedium').html('Download ' + namafile + '_m');
            $('#dsquare').html('Download ' + namafile + '_s');

            $('#dportrait').attr('download', namafile + '_p');
            $('#dlandscape').attr('download', namafile + '_l');
            $('#dmedium').attr('download', namafile + '_m');
            $('#dsquare').attr('download', namafile + '_s');
        }

        //fungsi ketika tombol generate ditekan
        $('#generate').click(function() {
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