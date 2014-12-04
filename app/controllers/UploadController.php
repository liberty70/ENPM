<?php

class UploadController extends BaseController {


	public function postDropNotlar()
	{

		$file = Input::file('file');
		
		$destinationPath = 'uploads/'.Auth::user()->username.'/notlar/'.date('Y-m-d');
		$extension = File::extension($file->getClientOriginalName());
		$filename =  time().str_random(12).'.'.$extension;

		//var_dump($filename);
		// foreach ($filename as $fn) {
		// 	echo $fn.'\n';
		// }
		

		$upload_success = Input::file('file')->move($destinationPath, $filename);


		if( $upload_success ) {

			 $not = new Not;
			// $not->not_id = '10302154887';
			// $not->not_description = '10302154887';
			// $not->department_id = '10302154887';
			// $not->faculty_id = '10302154887';
			// $not->user_id = '10302154887';
			// $not->lecturer_id = '10302154887';
			// $not->not_name  = $destinationPath;
			 $not->save();


			// $test = Not::create(array(
			// 		// $not = new Not;
			// 		'not_id' => '10302154887',
			// 		'not_description' => '10302154887',
			// 		'department_id' => '10302154887',
			// 		'faculty_id' => '10302154887',
			// 		'user_id' => '10302154887',
			// 		'lecturer_id' => '10302154887',
			// 		'not_name'  => $destinationPath
			// ));

			// if($test){

			// }
			// 	else{
			// 		Session::flash('uploaded', 'Successfully uploaded.');

			// return Response::json(array('success' => true, 'uploaded' => 'Successfully uploaded file.'), 200);
			// 	}

			$data = $destinationPath;
			Session::flash('uploaded', $data);
			//Session::flash('uploaded', 'Successfully uploaded.');

			return Response::json(array('success' => true, 'uploaded' => 'Successfully uploaded file.'), 200);

		} else {

			return Response::make(array('success' => false, 'uploaded' => 'Error while uploading file.'), 400);
		    //return Response::json('error', 400);
		}

	}

	public function postDropSinavlar()
	{
		$file = Input::file('file');
		
		$destinationPath = 'uploads/'.Auth::user()->username.'/sinavlar/'.date('Y-m-d');
		// If fail try doing public_path().'/uploads' 
		$extension = File::extension($file->getClientOriginalName());
		$filename =  time().str_random(12).'.'.$extension;

		$upload_success = Input::file('file')->move($destinationPath, $filename);

		dd(Input::all());
		if( $upload_success ) {
		   return Response::json('success', 200);
		} else {
		   return Response::json('error', 400);
		}

	}



	public function postNotProcess()
	{
		$input = Input::all();

		//return Redirect::to()
		dd($input);

	}

	public function postSinavProcess()
	{
		$input = Input::all();
		dd($input);

	}




}
