<?php
namespace App\Http\Requests;

use App\Models\kitchens;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CreateKitchenRequest extends FormRequest
{
   /*  public function authorize()
    {
        return \Gate::allows('user_create');
    }
 */
    public function rules(Request $request)
    {
		
        return [
            'name'     => [
                'required','name',
            ],
			
        ];
    }
}
