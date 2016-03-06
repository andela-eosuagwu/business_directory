<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmAccount($id = null, $encypted = null){
        $user = $this->userRepository->getUserById($id);
        if(md5($user->email) == $encypted){
            if($user->confirmed == 0){
                User::where('id', $id)
                    ->update(['confirmed' => '1']);
                session()->flash('alert-success', 'Account confirmation successful, kindly login');

                if (Auth::loginUsingId($id))
                {
                    return redirect()->to('/dashboard');
                }else{
                    session()->flash('alert-danger', 'Login failed, kindly try to login');
                    return redirect()->to('/login');
                }

            }else{
                session()->flash('alert-success', 'This account has already been confirmed, kindly login');
            }
        }else{
            session()->flash('alert-success', 'Invalid Url');
        }
        return redirect()->to('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        if(Auth::check()){
            return redirect()->to('/dashboard');
        }else{
            return view('pages.index.index');
        }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
