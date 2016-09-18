<?php namespace Controller\belajar_js;

use \View;
use \Response;
use \Request;
use \Input;

use Model\JavaScript6;

Class Js7Controller Extends \BaseController
{
	public function Index()
	{
		$test_ajaxs = JavaScript6::all();
		$content['test_ajaxs'] = $test_ajaxs; 

		return View::make('web/java-script7')
					->with('content', $content);
	}

	public function update()
	{
		if(Request::ajax()){
			$response['status'] = 'That id not found at table java_script_6';
			$javascript6 = JavaScript6::find(Input::get('id_testajax'));

			if ($javascript6) {
				$response['status'] = 'OK';

				$javascript6->test_ajax = Input::get('content_testajax');
				$javascript6->update();

				$javascript6_now = JavaScript6::all();
				$content['test_ajaxs'] = $javascript6_now;

				$response['html'] = View::make('web/templates/javascript7')
									->with('content', $content)
									->render();
			}	
			return Response::json($response);
		}
		App::abort(404);
	}
}