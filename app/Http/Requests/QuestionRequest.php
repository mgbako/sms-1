<?php namespace Scholr\Http\Requests;

use Scholr\Http\Requests\Request;

class QuestionRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = [
			
			'question'=>'required',
			'answer'=>'required',
			'option1'=>'required',
			'option2'=>'required',
			'option3'=>'required'
		];

		if(Request::isMethod('post'))
	        {
	        	$rules['subject_id'] = 'required|';
	        	$rules['classe_id'] = 'required';
	            $rules['term'] = 'required';
	        }

		return $rules;

	}

}
