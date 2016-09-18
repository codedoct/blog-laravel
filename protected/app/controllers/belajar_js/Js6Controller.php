<?php namespace Controller\belajar_js;

use \View;
use \Response;
use \Request;

use Model\JavaScript6;

Class Js6Controller Extends \BaseController
{
	public function Index()
	{
		$test_ajaxs = JavaScript6::all();
		$content['test_ajaxs'] = $test_ajaxs; 

		return View::make('web/java-script6')
					->with('content', $content);
	}

	public function addTestAjax()
	{
		if(Request::ajax()){
			$response['status'] = 'Table java_script_6 not found';
			$javascript6 = JavaScript6::all();

			if ($javascript6) {
				$response['status'] = 'OK';
				$addtext            = new JavaScript6;
				$addtext->test_ajax = \Input::get('test_ajax');
				
				$addtext->save();

				$test_ajaxs = JavaScript6::all();
				$content['test_ajaxs'] = $test_ajaxs; 

				$response['html'] = View::make('web/templates/javascript6')
										->with('content', $content)
										->render();
			}	
			return Response::json($response);
		}
		App::abort(404);
	}
}