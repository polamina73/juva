<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest()->paginate(25);
        return view('pages.customers.index',compact('customers'));
    }

    public function store(CustomerRequest $request)
    {
        $customer = $request->validated();
        $customer['user_id'] = Auth::user()->id;
        Customer::create($customer);
        return redirect()->route('customers.index')->with(['success' => 'تم إضافة العميل بنجاح']);
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
