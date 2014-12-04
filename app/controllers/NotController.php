<?php

class NotController extends BaseController {


	public function getIndex()
	{
		return View::make('frontend.not.index');
	}

	public function getEkleme()
	{
		return View::make('frontend.not.ekleme');
	}

	public function getIndirme()
	{
		return View::make('frontend.not.indirme');
	}



}
