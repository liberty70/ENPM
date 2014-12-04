<?php

class HomeController extends BaseController {


	public function getIndex()
	{
		return View::make('frontend.home.index');
	}

	public function getAbout()
	{
		return View::make('frontend.home.about');
	}

	public function getContact()
	{
		return View::make('frontend.home.contact');
	}

	public function getfaq()
	{
		return View::make('frontend.home.faq');
	}

	public function getNotSinavEkleme(){

		return View::make('frontend.home.notsinavekle');
	}

	public function getNotSinavIndirme(){

		return View::make('frontend.home.notsinavindir');
	}




}
