<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Budget;
use App\Userlogin;


class BudgetController extends Controller
{

    public function login()
    {
        return view ('/login');
    }


    public function user(Request $request)
    {
        $data=array(
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email_account' => $request->input('email_account'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            
        );

        Userlogin::create($data);
        return redirect('userlogins')->with('success');// 
          
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item=array(
            'budget_amount' => $request->input('budget_amount'),
            'items' => $request->input('items'),
            'price_amount' => $request->input('price_amount'),
        );

        Budget::create($item);
        return redirect('/budgets')->with('success', 'Items and price are successfully saved');
        
        
        
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
        
        return view('edit', compact('list'));//
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
            'budget_amount' => $request->input('budget_amount'),
            'items' => $request->input('items'),
            'price_amount' => $request->input('price_amount'),
        );

        Budget::whereId($id)->update($item);
        return redirect('/budgets')->with('success', 'Items and price are successfully updated');//
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
        
        return redirect('/budgets')->with('success', 'Data successfully deleted');
    }
}

