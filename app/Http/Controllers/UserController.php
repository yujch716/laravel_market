<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function redirect;
use function request;
use function view;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    //이메일 중복체크
    public function email_multiple(Request $request)
    {
        request()->validate([
            'user_email' => 'required|email|min:1|max:20'
        ]);

        $email = User::where('user_email',request('user_email'))->exists();

        if($email == 1){
            return redirect()->back()->with('alert','중복된 이메일 입니다');
        } else{
            return redirect('/join');
        }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //회원가입
    public function join_ok(Request $request)
    {
        request()->validate([
            'user_email' => 'required|email|min:1|max:20',
            'user_pw' => 'required|min:8|max:30',
            'user_pw_ok' => 'required|min:8|max:30',
            'user_name' => 'required|min:1|max:20',
            'user_tel' => 'required|min:1|max:13',
            'user_addr' => 'required|min:1'
        ]);

        $now = date("Y-m-d h:i:s");

        //$email = User::select('user_email',request('user_email'))->first();

        if(request('user_pw') != request('user_pw_ok')){
            Alert::error('Error Title','Error Message');
            return redirect()->back()->with('alert','비밀번호가 일치하지 않습니다.');
        }else{
            User::create([
                'user_email' => request('user_email'),
                'user_pw' => request('user_pw'),
                'user_name' => request('user_name'),
                'user_tel' => request('user_tel'),
                'user_addr' => request('user_addr'),
                'user_created' => $now
            ]);

            return view('index');
        }

    }

    public function login_ok(Request $request)
    {
        request() -> validate([
            'user_email' => 'required|email|min:1|max:20',
            'user_pw' => 'required|min:8|max:30'
        ]);

        $email = User::where('user_email', request('user_email'))->exists();

        if($email == 0){
            echo "<script>alert('존재하지 않는 이메일입니다.');</script>";
            return view('login');

        } else{
            $pw = User::where('user_pw', request('user_pw'))->exists();

            if($pw == 0){\
                echo "<script>alert('아이디나 비밀번호를 다시 확인해주세요');</script>";
                return view('login');
            }else{
                $name = User::where('user_email', request('user_email'))->value('user_name');

                $user_name = session('$name');
                $request->session()->put('key',$name);
                return view('index');
            }
        }

    }


    public function logout(Request $request)
    {
        $request->session()->forget('key');
        return view('index');
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
