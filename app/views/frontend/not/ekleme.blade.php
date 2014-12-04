@extends('frontend.layouts.master')

@section('content')

        <style type="text/css">
        /*This hide col-lg-6 temporarily*/
          #next{
            display:none;
          }

          .sakla {
              display: none;
          }
        </style>




        <div class="row">
            <div class="col-md-6">
                <div class="well">

                      <!-- <h4>Buraya Tikla yada Drag and drop your file</h4> -->

                      <!--{{Form::open(array('url' => '/notlar/drop','role'=>'form-horizontal','files' => true,'enctype'=>'multipart/form-data','class'=>'dropzone','id'=>'my-awesome-dropzone'))}}

                      {{Form::close()}}-->


                      {{Form::open(array('url' => '/notlar/process','role'=>'form-horizontal','files' => true,'enctype'=>'multipart/form-data'))}}
                      <div class="form-group">                          
                      </div>

                      <div class="form-group">
                        <label>Fakulteyi Sec</label>              
                        <select id="fakulte-adi" class="col-sm-6 pull-right" name="bolum-adi">
                            <option value="" selected="selected">Choose Faculty</option>
                            <option value="bilgisayar">MÜHENDİSLİK FAKULTESI</option>                        
                          </select>               
                      </div>

                      <div class="form-group">
                        <label>Bolumu Sec</label>              
                        <select id="bolum-adi" class="col-xs-6 pull-right" name="bolum-adi">
                            <option value="" selected="selected">Choose Bolum</option>
                            <option value="bilgisayar">BİLGİSAYAR MÜHENDİSLİĞİ</option>
                            <option value="biyomedikal">BİYOMEDİKAL MÜHENDİSLİĞİ</option>
                            <option value="tekstil">TEKSTİL MÜHENDİSLİĞİ</option>
                            <option value="mekatronik">MEKATRONİK MÜHENDİSLİĞİ</option>
                            <option value="malzeme">MALZEME BİLİMİ VE MÜHENDİSLİĞİ</option>
                            <option value="makine">MAKİNE MÜHENDİSLİĞİ</option>
                            <option value="insaat">İNŞAAT MÜHENDİSLİĞİ</option>
                            <option value="harita">HARİTA MÜHENDİSLİĞİ</option>
                            <option value="gida" >GIDA MÜHENDİSLİĞİ</option>
                            <option value="enerji">ENERJİ SİSTEMLERİ MÜHENDİSLİĞİ</option>
                            <option value="endustriyel">ENDÜSTRİYEL TASARIM MÜHENDİSLİĞİ</option>
                            <option value="malzeme">MALZEME BİLİMİ VE MÜHENDİSLİĞİ</option>
                            <option value="elektrik">ELEKTRİK-ELEKTRONİK MÜHENDİSLİĞİ</option>
                            <option value="cevre">ÇEVRE MÜHENDİSLİĞİ</option>                           
                          </select>               
                      </div>

                      <div class="form-group">
                        <label>Dersin Adi</label>              
                        <select id="ders-adi" class="col-sm-6 pull-right" name="sinif-adi">
                            <option value="" selected="selected">Choose Ders</option>
                            <option value="AL">Once Bolum Sec</option>
                        </select>  


                        <select id="bilgisayar" class="sakla col-sm-6 pull-right" name="ders-adi">
                            <option value="" selected="selected">Choose Ders</option>
                            <option value="AL">Bilgisayar Mühendisliğine Giriş</option>
                            <option value="AL">Lineer Cebir</option>
                            <option value="AL">Fizik</option>
                            <option value="AL">Matematik</option>
                            <option value="AL">Bilgisayar Programlama</option>
                            <option value="AL">Atatürk İlkeleri ve İnkilap Tarihi</option>
                            <option value="AL">Türk Dili</option>
                            <option value="AL">Yabancı Dil</option>
                            <option value="AL">İletişim ve Sunum Teknikleri</option>
                            <option value="AL">Ayrık Matematik</option>
                            <option value="AL">Elektrik Devreler</option>
                            <option value="AL">Veri Yapıları ve Algoritmalar</option>
                            <option value="AL">Mühendislik Matematiği</option>
                            <option value="AL">Nesne Yönelimli Programlama</option>
                            <option value="AL">Diferansiyel Denklemler</option>
                            <option value="AL">Sayısal Yöntemler</option>
                            <option value="AL">Olasılık Teorisi ve İstatistik</option>
                            <option value="AL">Lojik Devreler ve Tasarımı</option>
                            <option value="AL">Elektrik ve Elektronik Devre Laboratuarı</option>
                            <option value="AL">Görsel Programlama</option>
                            <option value="AL">Dosya Organizasyon Teknikleri</option>
                            <option value="AL">Mikroişlemciler</option>
                            <option value="AL">Sayısal Sistemler Laboratuarı</option>
                            <option value="AL">İşletim Sistemleri</option>
                            <option value="AL">Yazılım Mühendisliği</option>
                            <option value="AL">Sistem Programlama</option>
                            <option value="AL">Sistem Analizi</option>
                            <option value="AL">Veritabanı Yönetim Sistemleri</option>
                            <option value="AL">Gömülü Sistemler</option>
                            <option value="AL">Biçimsel Diller ve Otomata Teorisi</option>
                            <option value="AL">Bilgisayar Mimarisi</option>
                            <option value="AL">Bilgisayar Grafik</option>
                            <option value="AL">Bilgisayar Tasarımı ve Uygulama</option>
                            <option value="AL">Bilgisayar Ağları ve Laboratuvarı</option>
                            <option value="AL">Optimizasyon Algoritmaları </option>
                            <option value="AL">Bitirme Ödevi</option>
                            <option value="AL">İnternet Tabanlı Teknolojiler</option>
                            <option value="AL">İş Hukuku</option>
                            <option value="AL">Biyomedikal Mühendisliği Temelleri</option>
                            <option value="AL">Robot Teknolojisi</option>
                            <option value="AL">Veritabanı Programlama</option>
                            <option value="AL">Bilimsel Programlama</option>
                            <option value="AL">Yönetim Bilişim Sistemleri</option>
                            <option value="AL">Fiber Optik</option>
                            <option value="AL">Donanım Tanımlama Dilleri</option>
                            <option value="AL">Bilgi ve Teknoloji Transferi</option>
                            <option value="AL">Paralel Bilgisayar Mimarisi</option>
                            <option value="AL">Ekonomi</option>
                            <option value="AL">Derleyici Tasarımı</option>
                            <option value="AL">Biyometrik Sistemlere Giriş </option>
                            <option value="AL">Sayısal İşaret İşleme</option>
                            <option value="AL">Görüntü İşleme</option>
                            <option value="AL">Yapay Zeka Teknikleri</option>
                          </select>

                          <select id="biyomedikal" class="sakla col-sm-6 pull-right" name="ders-adi">
                              <option value="" selected="selected">Choose Ders</option>
                              <option value="AL">Biyomedikal Mühendisliğine Giriş</option>
                              <option value="AL">Kimya</option>
                              <option value="AL">Fizik</option>
                              <option value="AL">Genel Matematik</option> 
                              <option value="AL">Bilgisayar Programlama</option>
                              <option value="AL">Atatürk İlkeleri ve İnkilap Tarihi</option>
                              <option value="AL">Türk Dili</option>
                              <option value="AL">Yabancı Dil</option>
                              <option value="AL">Temel Bilgi Teknolojisi Kullanımı</option>
                              <option value="AL">Teknik Resim</option>
                              <option value="AL">Tıbbi Biyoloji</option>
                              <option value="AL">Lineer Cebir</option>
                              <option value="AL">İnsan Anatomisi</option>
                              <option value="AL">Devre Teorisi</option>
                              <option value="AL"> Elektronik</option>
                              <option value="AL"> Diferansiyel Denklemler</option>
                              <option value="AL">Devre Laboratuarı</option>
                              <option value="AL">Elektronik Laboratuarı</option>
                              <option value="AL">Biyomalzemeler ve Uygulamaları</option>
                              <option value="AL">İnsan Fizyolojisi</option>
                              <option value="AL">Tıp ve Biyolojide Nümerik Analiz</option>
                              <option value="AL">Olasılık Teorisi</option>
                              <option value="AL">Lojik Devreler</option>
                              <option value="AL">Mühendislik Matematiği </option>
                              <option value="AL">Lojik Laboratuarı</option>
                              <option value="AL">Radyasyon Fiziği</option>
                              <option value="AL">Klinik Mühendisliği</option>
                              <option value="AL">Sinyaller ve Sistemler</option>
                              <option value="AL">Biyomedikal Enstrümantasyon</option>
                              <option value="AL">Biyomekanik</option>
                              <option value="AL">Elektromanyetik Alanlar Teorisi</option>
                              <option value="AL">Biyomedikal Enstrümantasyon Lab.</option>
                              <option value="AL">Mikrodenetleyiciler  ve Uygulamaları</option>
                              <option value="AL">Optimizasyon Teknikleri</option>
                              <option value="AL">Veritabanı Yönetim Sistemleri </option>
                              <option value="AL">Genetik</option>
                              <option value="AL">Tıbbi Cihaz Teknolojisi  </option>
                              <option value="AL">Fizyolojik Kontrol Sistemleri ve Modelleme</option>
                              <option value="AL">Tıbbi Görüntüleme Sistemleri</option>
                              <option value="AL">Biyouyumluluk</option>
                              <option value="AL">Enstrümantal Yöntemler</option>
                              <option value="AL">Biyomedikal Mühendisliğinde Bilgisayar Uygulamaları</option>
                              <option value="AL">Biyomedikal Bakım-Onarım ve Kalibrasyon Lab.</option>
                              <option value="AL">Görsel Programlama</option>
                              <option value="AL">Biyoelektromanyetizma</option>
                              <option value="AL">Doku Mühendisliği</option>
                              <option value="AL">Biyoakışkanlar Dinamiği</option>
                              <option value="AL">Sağlık Teknolojileri Ve Mühendislik</option>
                              <option value="AL">Biyomedikal Mühendisliğinde Yapay Zeka Teknikleri</option>
                              <option value="AL">Biyomedikal Optik</option>
                              <option value="AL">Pazarlama İlkeleri</option>
                            </select> 

                            <select id="tekstil" class="sakla col-sm-6 pull-right" name="sinif-adi">
                              <option value="" selected="selected">Choose Ders</option>
                              <option value="AL">Matematik I</option>
                              <option value="AL">Genel Kimya – Moleküler Bilimi</option>
                              <option value="AL">Genel Kimya Lab</option>
                              <option value="AL">Tekstil Mühendisliğine Giriş</option>
                              <option value="AL">Teknik Resim I</option>
                              <option value="AL">İngilizce I</option>
                              <option value="AL">Türk Dili I</option>
                              <option value="AL">Atatürk İlkeleri ve İnkilap Tarihi I</option>
                              <option value="AL">Bilgisayara Giriş</option>
                              <option value="AL">Matematik II</option>
                              <option value="AL">Fizik I</option>
                              <option value="AL">Statik</option>
                              <option value="AL">Teknik Resim II</option>
                              <option value="AL">Lif Bilgisi</option>
                              <option value="AL">İngilizce II</option>
                              <option value="AL">Türk Dili II</option>
                              <option value="AL">Atatürk İlkeleri ve İnkilap Tarihi II</option>
                              <option value="AL">Matematik III</option>
                              <option value="AL">Fizik II</option>
                              <option value="AL">Bilgisayar Programlama</option>
                              <option value="AL">Mukavemet</option>
                              <option value="AL">Mikro Ekonominin Prensipleri</option>
                              <option value="AL">İplik Teknolojisi</option>
                              <option value="AL">Yabancı Dilde Okuma ve Konuşma</option>
                              <option value="AL">Dokuma Kumaş Teknolojisi</option>
                              <option value="AL">Örme Kumaş Teknolojisi</option>
                              <option value="AL">Polimer Kimyasına Giriş</option>
                              <option value="AL">Makro Ekonominin Prensipleri</option>
                              <option value="AL">İstatistik</option>
                              <option value="AL">Finans Yönetimi</option>
                              <option value="AL">Mesleki Yabancı Dil-I</option>
                              <option value="AL">Malzeme</option>
                              <option value="AL">Tekstüre İplik Teknolojisi</option>
                              <option value="AL">Yeni İplikçilik Teknolojileri</option>
                              <option value="AL">Uzun Lif İplikçilik Teknolojileri</option>
                              <option value="AL">Tekstil ve Konfeksiyon Sistemlerinde Yönetim ve Kontrol</option>
                              <option value="AL">Tekstil Pazarlama</option>
                              <option value="AL">Kimyasal Tekstil Muayeneleri</option>
                              <option value="AL">Doğal ve Rejenere Liflerin Terbiyesi ve Boyanması</option>
                              <option value="AL">Tekstil ve Konfeksiyonda Uluslararası Üretim ve Ticaret</option>
                              <option value="AL">Tekstil ve Konfeksiyon Endüstrisinde İthalat-İhracat Stratejileri</option>
                              <option value="AL">Tekstilde Yaş İşlem Teknolojileri I</option>
                              <option value="AL">Tekstil Tasarımı</option>
                              <option value="AL">Termodinamik</option>
                              <option value="AL">Akışkanlar Mekaniği</option>
                              <option value="AL">Konfeksiyon Teknolojisi I</option>
                              <option value="AL">Makine Elemanları</option>
                              <option value="AL">Mesleki Yabancı Dil II</option>
                              <option value="AL">Tekstil Ürünleri Testi</option>
                              <option value="AL">Tekstil Ürünleri Testi</option>
                              <option value="AL">Tekstil ve Konfeksiyon Üretiminde Kalite Yönetimi ve Kontrolü</option>
                              <option value="AL">Konfeksiyon Teknolojisi II</option>
                              <option value="AL">Boyarmadde Kimyası</option>
                              <option value="AL">İş Hayatı İçin Yabancı Dil</option>
                              <option value="AL">Production Cost at Textile and Apparel</option>
                              <option value="AL">Dokusuz Yüzey Teknolojileri</option>
                              <option value="AL">Tekstilde İş ve Zaman Etüdü</option>
                              <option value="AL">Tekstil Operasyonlarında Ürün Yönetimi ve Organizasyonu</option>
                              <option value="AL">Bitirme Ödevi</option>
                              <option value="AL">Carpet Technology</option>
                              <option value="AL">İş Hukuku</option>
                              <option value="AL">Renk Bilgisi ve Ölçümü</option>
                              <option value="AL">Technical Textiles</option>
                              <option value="AL">Saç Örgü Teknolojileri</option>
                              <option value="AL">Dokuma Kumaş Tasarımı</option>
                              <option value="AL">Örme Kumaş Tasarımı</option>
                              <option value="AL">Tekstilde Mekatronik</option>
                              <option value="AL">Isı Transferi</option>
                              <option value="AL">Çözgülü Örme Teknolojisi</option>
                              <option value="AL">Sentetik Liflerin Terbiyesi ve Boyanması</option>
                              <option value="AL">Bilgisayar Destekli Kalıp Tasarımı</option>
                              <option value="AL">Bilgisayar Destekli Tekstil Tasarımı</option>
                              <option value="AL">Fantezi İplik Teknolojisi</option>
                              <option value="AL">Çok Katlı Dokuma Teknolojileri</option>
                              <option value="AL">Ev Tekstilleri</option>
                              <option value="AL">Jakar Teknolojisi</option>
                              <option value="AL">Tekstil Terbiyesinde Üretim ve Maliyet Hesapları</option>
                              <option value="AL">Kesik Elyaf İplikçilikte Kalite Kontrol</option>
                              <option value="AL">Çorap ve Dikişsiz Örme Teknolojisi</option>
                              <option value="AL">Çevre Dostu Üretim</option>
                              <option value="AL">Tekstil Endüstrisinde Nanobilim ve Nanoteknoloji</option>
                              <option value="AL"></option>

                            </select> 
                      </div>

                      <div class="form-group">
                        <label>Sinif</label>              
                        <select id="sinif-adi" class="col-sm-6 pull-right" name="sinif-adi">
                            <option value="" selected="selected">Choose Class</option>
                            <option value="bir">1</option>
                            <option value="iki">2</option>
                            <option value="uc">3</option>
                            <option value="dort">4</option>
                            <option value="tum">Tum siniflar icin</option>
                          </select>               
                      </div>
                      <div class="form-group">
                        <label>Hocanin Adi (varsa)</label> 
                        <input type="text" name="hoca-adi" class="form-control" id="hoca-adi" required>                        
                      </div>

                      <div class="form-group">
                        <label>Not Basligi</label> 
                        <input type="text" name="hoca-adi" class="form-control" id="hoca-adi" required>                        
                      </div>

                      <div class="form-group">
                        <label>Not'la ilgili Aciklama Varsa</label>
                        <textarea rows="5" cols="100" class="form-control" id="not-aciklama" name="not-aciklama"maxlength="999" style="resize:none"></textarea>

                      </div>

                      <div class="form-group">              
                          <a id="devam"  href="#" class="btn btn-lg btn-warning" style="width:100%">Devam Et &rarr;</a>                
                      </div> 
                </div> <!-- end well -->
            </div> <!-- end col-md-6 -->

 

            <div class="col-md-6" id="next">


                <div class="well">

                      <div class="pull-right" id="adshowblock"></div>  

                      <!-- <div class="form-group">
                        <label>Ogrenci Numaran</label> 
                        <input type="text" class="form-control" id="ogrno" name="ogrno" value="{{Auth::user()->username}}" disabled>                        
                      </div> -->

                      <div class="form-group">
                        <label>Okul Emailin</label> 
                        <input type="text" class="form-control" id="okul-email" name="okul-email" value="{{Auth::user()->username.'@erciyes.edu.tr'}}" disabled>                        
                      </div>


                      

                      <!-- <div class="form-group">
                        <label>Not Basligi</label> 
                        <input type="text" name="hoca-adi" class="form-control" id="hoca-adi" required>                        
                      </div>

                      <div class="form-group">
                        <label>Not'la ilgili Aciklama Varsa</label>
						            <textarea rows="5" cols="100" class="form-control" id="not-aciklama" name="not-aciklama"maxlength="999" style="resize:none"></textarea>

                      </div> -->

                      <!-- <div class="form-group">              
                          <input type="submit" class="btn btn-lg btn-success" style="width:100%" value="Dosyalari Yukle" >
                      </div> -->
                    {{Form::close()}}

                    <h4>Asaga Tikla yada Drag and drop your file</h4>
                    {{Form::open(array('url' => '/notlar/drop','role'=>'form-horizontal','files' => true,'enctype'=>'multipart/form-data','class'=>'dropzone','id'=>'my-awesome-dropzone'))}}

                    {{Form::close()}}  

                    <!-- <div class="form-group">              
                        <input type="submit" class="btn btn-lg btn-success" style="width:100%" value="Dosyalari Yukle" >
                    </div> -->

                     <!-- <div class="notice-box"><strong>{{Session::get('uploaded')}}</strong></div> -->



                    @if(Session::has('uploaded'))
                    <div id="uploaded" class="notice-box"><strong>{{Session::get('uploaded')}}</strong></div>
                    @endif
                </div> <!-- end well -->
            </div> <!-- end col-md-6 -->


        </div> <!-- end row -->

        <div id="showdata" class="row"></div>
@stop





@section('script')


        <script type="text/javascript">
      
          $.ajax({
               type: "GET",
               url: 'notlar/drop',
               async: false,
               beforeSend: function(x) {
                if(x &amp;&amp; x.overrideMimeType) {
                 x.overrideMimeType("application/j-son;charset=UTF-8");
                }
           },
           dataType: "json",
           success: function(data){
            alert();
              //do your stuff with the JSON data
           }
          });

        </script>

        <script type="text/javascript">
      
            $('#devam').bind('click',function(){

              $('#next').css('display','block');

            });

        </script>



        <script type="text/javascript">

        $(document).ready(function() {
            $('#bolum-adi').change(function() {
                var val = $('#bolum-adi').val();
                $('.sakla').hide();
                if(val) {
                  $('#ders-adi').hide();
                  $("#"+val).show();
                }
                else{
                 console.log('something went wrong');
                }
            });
        });

        </script>



        <script type="text/javascript">

          // var $loadContainer = $("#adshowblock"); 
          // var $preloadHTML = $('<div class="loader"><img src="http://carestream.com/images/ajax-loader.gif"></div>');  

          // $("#devam").bind('click',function(){
          //     $('#next').css('display','block');
          //     if (true) {
          //         $loadContainer.html($preloadHTML).load('test', function() {
          //             $preloadHTML.remove();
          //             // console.log($(this).value);
          //             // $("#"+loadFile).show();
          //             //alert(loadFile+" was succesfully loaded!!");
          //         });
          //     }
          //     else {
          //      return false;              
          //     }             
          // });
        </script>

        <script type="text/javascript">

        //   var $loadContainer = $("#adshowblock"); 
        //   var $preloadHTML = $('<div class="loader"><img src="http://carestream.com/images/ajax-loader.gif"></div>');  

        //   $("#sinif-adi").change(function(){
        //       var loadFile = $(this).val();
        //       if (!!loadFile) {
        //           $loadContainer.html($preloadHTML).load('test', function() {
        //               $preloadHTML.remove();
        //               console.log($(this).value);
        //               $("#"+loadFile).show();
        //               //alert(loadFile+" was succesfully loaded!!");
        //           });
        //       }
        //       else {
        //        return false;              
        //       }             
        //   });
        </script>

@stop