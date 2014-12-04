@extends('frontend.layouts.master')

@section('content')
        <div class="row">

            <div class="col-md-6">
                <strong>Indirmek Istedigin Notlar Filitre</strong> 
                <div class="well">
                  <!-- Quick search box -->
                    <form role="form-horizontal" action="">
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
                          <a href="#" class="btn btn-lg btn-success" style="width:100%">Sectiklerimden Goster</a>                  
                      </div>
                    </form>
                </div> <!-- end well -->
            </div> <!-- end col-md-6 -->


            <div class="col-md-6">
                <strong>Indirmek Istedigin Sorular Filitre</strong> 
                <div class="well">
                  <!-- Quick search box -->
                    <form role="form-horizontal" action="">
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
                          <a href="#" class="btn btn-lg btn-success" style="width:100%">Sectiklerimden Goster</a>                  
                      </div>
                    </form>
                </div> <!-- end well -->
            </div> <!-- end col-md-6 -->


        </div> <!-- end row -->


        <div class="row">
            <div class="col-lg-12 text-center">
                <strong>Not Adi : Mikro Islemci</strong> <br>
                <strong>Yukleyen : Ozlem Tasdemir</strong> <br>
                <strong>Boyut : 2 MB</strong> <br>
                <a href="" class="btn btn-success">Hemen Indir</a>
                
            </div>     
        </div>


        <!-- Service Tabs -->
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> Ozlemin Tum Notlari</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> Mikro ile ilgili Notlar</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Mikro ile ilgili sinavlar</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> Ozlemin Paylastigi Sinavlar</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>Notlar</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupidi in. At quia quaerat asperiores.</p>
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>Sinavlar</h4>
                        <p>Lorem ipsumiunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>benzer notlar</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupidipiores magni</p>
                    </div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>Benzer sinavlar</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                    </div>
                </div>

            </div>
        </div>
@stop