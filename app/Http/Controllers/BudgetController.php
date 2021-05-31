<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Budget;
use App\Userlogin;


class BudgetController extends Controller
{

    public function login(Request $request)
    {
        return view('/login');
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/add');
        }else {
            return redirect('/login')->with('Wrong credentials!');
        }
    }

   
    public function signup()
    {
        return view ('/signup');
    }

    /** Store a newly created resource in table userlogins.**/
    public function user(Request $request)
    {
        
            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');
            $firstname = $request->input('firstname');
            $email_account = $request->input('email_account');
            $username = $request->input('username');
            $password = $request->input('password');

        $data=array('firstname'=>$firstname,'lastname'=>$lastname, 'email_account'=>$email_account,'username'=>$username,'password'=>$password);
        DB::table('userlogins')->insert($data);
        return redirect('/')->with('success', 'Your data successfully saved!');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Budget::all();
        return view('/saved', compact('list'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/add');
       
    }

    /**
     * Store a newly created resource in table budgets.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item=array(
            'quantity' => $request->input('quantity'),
            'items' => $request->input('items'),
            'price_amount' => $request->input('price_amount'),
            'sub_total' =>  $request->input('price_amount') * $request->input('quantity'),
        );   
        Budget::create($item);
        return redirect('/budgets')->with('success', 'Items successfully added to list!'); 

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
        $list = Budget::findOrFail($id);
        
        return view('edit', compact('list'));
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
        $item=array(
            'quantity' => $request->input('quantity'),
            'items' => $request->input('items'),
            'price_amount' => $request->input('price_amount'),
            'sub_total' =>  $request->input('price_amount') * $request->input('quantity'),
        );

        Budget::whereId($id)->update($item);
        return redirect('/budgets')->with('success', 'Record successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = Budget::findOrFail($id);
        $list->delete();
        
        return redirect('/budgets')->with('success', 'Record successfully deleted!');
    }
}

