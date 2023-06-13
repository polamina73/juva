<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('pages.Cusomters.index',compact('customers'));
    }

    public function store(CustomerRequest $request)
    {
        $customer = $request->validated();
        $customer['customerAdded_by'] = Auth::user()->id;
        Customer::create($customer);
        return redirect()->route('customers.index');
    }

    public function show(Customer $customer)
    {
        return $customer;
    }

    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());

        return $customer;
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return response()->json();
    }
}
