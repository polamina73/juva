@extends('layouts.master')
@section('title','Customers')
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">العملاء</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ العملاء</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <!-- Button For Model -->
                        <a class="btn ripple btn-info" data-target="#CreateCustomer" data-toggle="modal" href="">اضافة
                            عميل</a>
                        <!-- Large Modal -->
                        <div class="modal" id="CreateCustomer">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">اضف عميل</h6>
                                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                            <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form action="{{route('customers.store')}}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="customerName">اسم العميل</label>
                                                <input id="customerName" class="form-control @error('customerName') is-invalid @enderror" placeholder="الاسم"
                                                       type="text" name="customerName" >
                                                @error('customerName')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="customerMobile">رقم العميل</label>
                                                <input id="customerMobile" class="form-control @error('customerMobile') is-invalid @enderror"
                                                       placeholder="رقم الموبيل" type="text" name="customerMobile">
                                                @error('customerMobile')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="customerInvitedBy">مدعو من</label>
                                                <input id="customerInvitedBy" class="form-control @error('customerInvitedBy') is-invalid @enderror" placeholder="مدعو من"
                                                       type="text" name="customerInvitedBy">
                                                @error('customerInvitedBy')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn ripple btn-primary" type="submit">حفظ</button>
                                            <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">
                                                اغلاق
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--End Large Modal -->
                        <h4 class="card-title mg-b-0">العملاء</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">اسم العميل</th>
                                <th class="wd-15p border-bottom-0">رقم العميل</th>
                                <th class="wd-20p border-bottom-0">مدعو من</th>
                                <th class="wd-15p border-bottom-0">عدد زيارات العميل</th>
                                <th class="wd-10p border-bottom-0">اخر زيارة للعميل</th>
                                <th class="wd-25p border-bottom-0">تم الاضاف من</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{$customer->customerName}}</td>
                                    <td>{{$customer->customerMobile}}</td>
                                    <td>{{$customer->customerInvitedBy}}</td>
                                    <td>{{$customer->customerCount_Of_Visits}}</td>
                                    <td>{{$customer->customerLast_Visit}}</td>
                                    <td>{{$customer->customerAdded_by}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>

    <!-- main-content closed -->
@endsection
