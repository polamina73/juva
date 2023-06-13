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
                                                <label for="name">اسم العميل</label>
                                                <input id="name" class="form-control @error('name') is-invalid @enderror" placeholder="الاسم"
                                                       type="text" name="name" >
                                                @error('name')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="mobile">رقم العميل</label>
                                                <input id="mobile" class="form-control @error('mobile') is-invalid @enderror"
                                                       placeholder="رقم الموبيل" type="text" name="mobile">
                                                @error('mobile')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="source">مدعو من</label>
                                                <input id="source" class="form-control @error('source') is-invalid @enderror" placeholder="مدعو من"
                                                       type="text" name="source">
                                                @error('source')
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
                        <table class="table text-md-nowrap" id="">
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
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->mobile}}</td>
                                    <td>{{$customer->source}}</td>
                                    <td>{{$customer->count_of_visits}}</td>
                                    <td>{{$customer->last_visit}}</td>
                                    <td>{{$customer->added_by->name}}</td>
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
