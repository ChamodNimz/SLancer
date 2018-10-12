<?

namespace App\Http\Controllers;

/**
 * 
 */
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
	
	function __construct(argument)
	{
		# code...
	}

	public function postSignUp(Request $request){
		$email=$request['txtEmail'];
	}


	public function postSignIn(Request $request){

	}
}

 ?>