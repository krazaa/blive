<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Member;
use App\modules\Package;

class MembersController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function MembersList()
    {
        $data = Member::isMember()->groupby('created_at')->count();
        //dd($data);
        return view('backend.members.members', compact('data'));   
    }

    public function index()
    {
        $data = Member::isMember()->get();
        return view('backend.members.index', compact('data'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::all();
        return view('backend.members.create',compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
 
                'name' => 'required',
                'email' => 'required|unique:users',
                'mobile' => 'required',
                'rp' => 'required'
         ]);

        $data = new User();
        $data->name = request('name');
        $data->email = request('email');
        $data->mobile = request('mobile');
        $data->password = request('password');
        $data->rp = request('rp');
        

        if($data->save()){

            // $to = $request->mobile;
            // $apisr = env('LRTSMSU');
            // $apikey = env('LRTSMSP');
            // $mask = env('LRTSMS_snd');
            // $lang = 'English';
            // $url = "https://sms.lrt.com.pk/api/sms-single-or-bulk-api.php?username=".$apisr."&password=" .$apikey. "&sender=".$mask.
            // "&phone=" .$to. "&type=".$lang."&message=" .urlencode("Username: " .$request->email. "<br>". "Password: " .$request->password)."";

            
            // //Curl Start
            // $ch = curl_init();
            // $timeout = 30;
            // curl_setopt ($ch,CURLOPT_URL, $url) ;
            // curl_setopt ($ch,CURLOPT_RETURNTRANSFER, 1);
            // curl_setopt ($ch,CURLOPT_CONNECTTIMEOUT, $timeout) ;
            // $response = curl_exec($ch) ;
            // curl_close($ch) ; 

            return redirect()->route('members.index');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
