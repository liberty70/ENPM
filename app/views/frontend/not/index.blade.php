@extends('frontend.layouts.master')

@section('content')

        <div class="row">

        	<div class="col-md-8">
				<div class="search-bar">
				    <form class="main-search" action="">
				      <div class="input-group">
				        <input type="text" class="form-control" placeholder="Bulmak istedigin notu yaz ...">
				        <span class="input-group-btn">
					    <button class="btn btn-primary" type="button">Ara</button>
						</span> 
				      </div>
				    </form><!-- /.main-search -->
				</div><!-- /.search-bar -->
        	</div>

        	<div class="col-md-4">
        		<a href="{{{ URL::route('not-ekleme') }}}" class=" pull-right btn btn-success">NOTLAR EKLE</a>
        	</div>

        </div>
        <br>


        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Fakulteler</a>
                    <a href="#" class="list-group-item">BİLGİSAYAR MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">BİYOMEDİKAL MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">ÇEVRE MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">ELEKTRİK-ELEKTRONİK MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">ENDÜSTRİ MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">ENDÜSTRİYEL TASARIM MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">ENERJİ SİSTEMLERİ MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">GIDA MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">HARİTA MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">İNŞAAT MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">MAKİNE MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">MALZEME BİLİMİ VE MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">MEKATRONİK MÜHENDİSLİĞİ</a>
                    <a href="#" class="list-group-item">TEKSTİL MÜHENDİSLİĞİ</a>
                </div>
            </div>

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Solda secilen notlar buraya yuklenecek</h4>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <div class="col-sm-9">
                                    <h4 class="list-group-item-heading"> Mikro Hafta 1 </h4>
                                    <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris.
                                    </p>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <button type="button" class="btn btn-default btn-lg btn-block"> Indir </button>
                                </div>
                                <div class="clearfix"></div>
                            </a>

                            <a href="#" class="list-group-item">
                                <div class="col-sm-9">
                                    <h4 class="list-group-item-heading"> Mikro Hafta 1 </h4>
                                    <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris.
                                    </p>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <button type="button" class="btn btn-default btn-lg btn-block"> Indir </button>
                                </div>
                                <div class="clearfix"></div>
                            </a>


                           <a href="#" class="list-group-item">
                                <div class="col-sm-9">
                                    <h4 class="list-group-item-heading"> Graphic Hafta 3 </h4>
                                    <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris.
                                    </p>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <button type="button" class="btn btn-default btn-lg btn-block"> Indir </button>
                                </div>
                                <div class="clearfix"></div>
                            </a>

                           <a href="#" class="list-group-item">
                                <div class="col-sm-9">
                                    <h4 class="list-group-item-heading"> yazilim Hafta 2 </h4>
                                    <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris.
                                    </p>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <button type="button" class="btn btn-default btn-lg btn-block"> Indir </button>
                                </div>
                                <div class="clearfix"></div>
                            </a>

                            <a href="#" class="list-group-item">
                                <div class="col-sm-9">
                                    <h4 class="list-group-item-heading"> yazilim Hafta 2 </h4>
                                    <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris.
                                    </p>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <button type="button" class="btn btn-default btn-lg btn-block"> Indir </button>
                                </div>
                                <div class="clearfix"></div>
                            </a>

                            <a href="#" class="list-group-item">
                                <div class="col-sm-9">
                                    <h4 class="list-group-item-heading"> yazilim Hafta 2 </h4>
                                    <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris.
                                    </p>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <button type="button" class="btn btn-default btn-lg btn-block"> Indir </button>
                                </div>
                                <div class="clearfix"></div>
                            </a>

                            <a href="#" class="list-group-item">
                                <div class="col-sm-9">
                                    <h4 class="list-group-item-heading"> yazilim Hafta 2 </h4>
                                    <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris.
                                    </p>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <button type="button" class="btn btn-default btn-lg btn-block"> Indir </button>
                                </div>
                                <div class="clearfix"></div>
                            </a>

                            <ul class="pagination pull-right">
                              <li><a href="#">&laquo;</a></li>
                              <li><a href="#">1</a></li>
                              <li class="active"><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end top fields col-8 -->
        </div>
        <!-- /.row -->
@stop