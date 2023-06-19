<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customer = Customer::all();
        
        return view('customer.index', ['customer' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
           'full_name' => 'required', 
           'email' => 'required|email', 
           'password' => 'required', 
           'mobile' => 'required', 
        ]);
        
    //    if ($request->hasFile('photo')) {
    //         $imgPath = $request->file('photo')->store('public/customers');
    //    }else{
    //        $imgPath = null;
    //    }
       
       
        $data =  new Customer();
        $imgPath = $request->file('photo')->store('public/customers');
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->password = sha1($request->password);
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->photo = $imgPath;
        $data->save();
        
        $ref = $request->ref;
        if ($ref == 'front') {
           
            return redirect('register')->with('success', 'Data has been saved');
        }
        
        return redirect()->route('create.customer')->with('success', 'Data has been added.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $customer = Customer::findOrFail($id);    
        return view('customer.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
