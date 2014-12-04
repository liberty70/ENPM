<?php

class SinavController extends BaseController {


	public function getIndex()
	{
		return View::make('frontend.sinav.index');
	}

	public function getEkleme()
	{
		return View::make('frontend.sinav.ekleme');
	}

	public function getIndirme()
	{
		return View::make('frontend.sinav.indirme');
	}


}
