@extends('frontend.layouts.master')

@section('content')
        <div class="row">
            <div class="col-md-6">
                <div class="well">
                  <!-- Quick search box -->
                    <form role="form-horizontal" action="">
                      <div class="form-group">
                        <label>Ders Notu Ekle</label>
                        <input type="file" class="btn btn-default">                            
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
                          <a href="#" class="btn btn-lg btn-success" style="width:100%">Dosyalari Yukle</a>                  
                      </div>
                    </form>
                </div> <!-- end well -->
            </div> <!-- end col-md-6 -->


            <div class="col-md-6">
                <div class="well">
                  <!-- Quick search box -->
                    <form role="form-horizontal" action="">
                      <div class="form-group">
                        <label>Cikmis Sorulari Ekle</label>
                        <input type="file" class="btn btn-default">                            
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
                          <a href="#" class="btn btn-lg btn-success" style="width:100%">Dosyalari Yukle</a>                  
                      </div>
                    </form>
                </div> <!-- end well -->
            </div> <!-- end col-md-6 -->


        </div> <!-- end row -->

@stop