@extends('frontend.layouts.master')

@section('content')

        <style type="text/css">
        /*This hide col-lg-6 temporarily*/
          #next{
            display:none;
          }
        </style>

        <div class="row">
            <div class="col-md-6">
                <div class="well">
                      <h4>Buraya Tikla yada Drag and drop your file</h4>

                      {{Form::open(array('url' => '/sinavlar/drop','role'=>'form-horizontal','files' => true,'enctype'=>'multipart/form-data','class'=>'dropzone','id'=>'my-awesome-dropzone'))}}

                      {{Form::close()}}


                      {{Form::open(array('url' => '/sinavlar/process','role'=>'form-horizontal','files' => true,'enctype'=>'multipart/form-data'))}}
                      <div class="form-group">                          
                      </div>

                      <div class="form-group">
                        <label>Fakulteyi sec</label>              
                        <select id="fakulteAdi" class="col-md-6 pull-right" name="fakulteAdi">
                            <option value="" selected="selected">Select Faculty</option>
                            <option value="AL">Muhendislik</option>
                            <option value="AL">Tip</option>
                            <option value="AL">Fen Edebiyat</option>
                            <option value="AL">Iktisad</option>
                            <option value="AL">Eczacilik</option>
                            <option value="AL">Ilahiyat</option>
                          </select>               
                      </div>

                      <div class="form-group">
                        <label>Bolumu sec</label>              
                        <select id="fakulteAdi" class="col-md-6 pull-right" name="fakulteAdi">
                            <option value="" selected="selected">Select Department</option>
                            <option value="AL">Insaat</option>
                            <option value="AL">Bilgisayar</option>
                            <option value="AL">Malzeme</option>
                            <option value="AL">Gida</option>
                            <option value="AL">Endustri</option>
                            <option value="AL">Mekatronik</option>
                          </select>               
                      </div>

                      <div class="form-group">
                        <label>Ders Adi</label>              
                        <select id="fakulteAdi" class="col-md-6 pull-right" name="fakulteAdi">
                            <option value="" selected="selected">Select Course</option>
                            <option value="AL">Matematik</option>
                            <option value="AL">Kimya</option>
                            <option value="AL">Tarih</option>
                            <option value="AL">Fizik</option>
                            <option value="AL">Kimya</option>
                            <option value="AL">Biology</option>
                          </select>               
                      </div>
                      <div class="form-group">
                        <label>Hocanin Adi (varsa)</label> 
                        <input type="text" class="form-control" id="ogrno" required data-validation-required-message="Please enter your name.">                        
                      </div>


                      <div class="form-group">              
                          <a href="#" onclick="showNextStep()" class="btn btn-lg btn-warning" style="width:100%">Devam Et &rarr;</a>                  
                      </div>
                </div> <!-- end well -->
            </div> <!-- end col-md-6 -->


            <div class="col-md-6" id="next">
                <div class="well">
                  <!-- Quick search box -->
                    <form role="form-horizontal" action="">
                      <div class="form-group">
                        <label>Ogrenci Numaran</label> 
                        <input type="text" class="form-control" id="ogrno" name="ogrno" value="{{Auth::user()->username}}" disabled>                        
                      </div>

                      <div class="form-group">
                        <label>Okul Emailin</label> 
                        <input type="text" class="form-control" id="ogrno" name="ogrno" value="{{Auth::user()->username.'@erciyes.edu.tr'}}" disabled>                        
                      </div>

                      <div class="form-group">
                        <label>Yukledigin Sinav ile ilgili Aciklama Varsa</label>
						            <textarea rows="5" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>

                      </div>

                      <div class="form-group">              
                          <input type="submit" class="btn btn-lg btn-success" style="width:100%" value="Dosyalari Yukle" >
                      </div>
                    {{Form::close()}}

                    @if(Session::has('uploaded'))
                    <div class="notice-box"><strong>{{Session::get('uploadesd')}}</strong></div>
                    @endif
                </div> <!-- end well -->
            </div> <!-- end col-md-6 -->


        </div> <!-- end row -->

@stop

@section('script')

        <script type="text/javascript">
          function showNextStep(event){
            var next = document.getElementById('next');  
            next.style.display='block';     
          }
        </script>

@stop