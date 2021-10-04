<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\CreateKitchenRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Requests\UpdateUserPassword;
use App\Http\Requests\sendEmailNotification;
use App\Http\Requests\ResetPassword;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Kitchens;
use App\Models\EmailTemplate;
use League\Csv\Writer;	
use Illuminate\Support\Facades\Validator;
use Auth;
use Config;
use Response;
use Session;
use Hash;
use DB;
use DateTime;
use Carbon\Carbon;

class KitchensController extends Controller
{
	protected $per_page;
	public function __construct()
    {
	    
        $this->per_page = Config::get('constant.per_page');
    }

    public function index(Request $request)
    {
		
        $customers_data = $this->kitchens_search($request,$pagination=true);
		if($customers_data['success']){
			$kitchens = $customers_data['kitchens'];
			$page_number =  $customers_data['current_page'];
			$roles = Role::all();
			if(empty($page_number))
				$page_number = 1;
			if(!is_object($kitchens)) return $kitchens;
			if ($request->ajax()) {
				return view('admin.kitchens.kitchenspagination', compact('kitchens','page_number'));
			}
			return view('admin.kitchens.kitchens',compact('kitchens','page_number','roles'));	
		}else{
			return $customers_data['message'];
		}
	}
	
	public function kitchens_search($request,$pagination)
	{
		
		$page_number = $request->page;
		$number_of_records =$this->per_page;
		
		
		$result = Kitchens::where(`1`, '=', `1`);
		if($pagination == true){
			$kitchens = $result->orderBy('created_at', 'desc')->paginate($number_of_records);
		}else{
			$kitchens = $result->orderBy('created_at', 'desc')->get();
		}
		
		// echo "<pre>";print_r($coupons->toArray());die;
		$data = array();
		$data['success'] = true;
		$data['kitchens'] = $kitchens;
		$data['current_page'] = $page_number;
		return $data;
	}


	public function kitchens_create_new(request $request){
		$response = [];
    	$response['success'] = false;
    	$response['message'] = 'Invalid Request';
		if($request->ajax()){
			$validator =  Validator::make($request->all(), [
			   'name'   => 'required|string|unique:kitchens',
			   'status' => 'required',
			]);

			if ($validator->fails())
			{
			    $messages = $validator->messages();
			    return Response::json($messages, 422);
			}

			$data =array();
			$data['name']	= $request->name;
			$data['status']	= $request->status;
			$dat = Kitchens::create($data);

			$response['success'] = true;
			$response['message'] = 'New Kitchen added Successfully';
			
		}
		return Response::json($response, 200);
	}

	public function kitchens_create()
    {
		access_denied_user('customer_create');
		//$roles = Role::WhereNotIn('id',[1,3])->get();
		$roles = Role::get();
		//pr($roles);
		$view = view("modal.kitchenCreate")->render();
		$success = true;

        return Response::json(array(
		  'success'=>$success,
		  'data'=>$view
		 ), 200);
    }


    public function kitchen_edit($user_id)
    {
		access_denied_user('customer_edit');
        $user = Kitchens::where('id',$user_id)->get();
		if(count($user)>0){
			$user = $user[0];
			$view = view("modal.kitchenEdit",compact('user'))->render();
			$success = true;
		}else{
			$view = '';
			$success = false;
		}
		
        //abort_unless(\Gate::allows('request_edit'), 403);
		
		return Response::json(array(
		  'success'=>$success,
		  'data'=>$view
		 ), 200);
    }


    public function updatekitchen(request $request,$Kitchen_id)
    {
		$response = [];
    	$response['success'] = false;
    	$response['message'] = 'Invalid Request';
		if($request->ajax()){
			$validator =  Validator::make($request->all(), [
			   'name'   => 'required|string|unique:kitchens,name,'.$Kitchen_id,
			]);

			if ($validator->fails())
			{
			    $messages = $validator->messages();
			    return Response::json($messages, 422);
			}

			$data =array();
			$data['name']	= $request->name;
			$data['status']	= $request->status;
			$dat = Kitchens::where('id',$Kitchen_id)->update($data);

			$response['success'] = true;
			$response['message'] = 'Kitchen update Successfully';
			
		}
		return Response::json($response, 200);
    }
}
?>