@extends('admin.layouts.master')

@section('head-tag')
    <title>ادمین | برند</title>
@endsection

@section('content')

    <nav class="font-size-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item"> <a href="">بخش فروش</a></li>
            <li class="breadcrumb-item active"> برند </li>
        </ol>
    </nav>

     <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        برند
                    </h5>
                </section>


                <section class="d-flex justify-content-between align-items-center py-4 border-bottom">
                    <a class="btn btn-info btn-sm" href="{{route('admin.market.brand.create')}}">ایجاد برند</a>
                    <div class="max-width-16-rem">
                        <input class="form-control form-control-sm" type="text" placeholder="جستجو">
                    </div>
                </section>
                
                <section class="table-response">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام برند</th>
                                <th>لوگو</th>
                                <th class="max-width-16-rem text-center px-5"> تنظیمات <i class="fa fa-cogs"></i></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>مانیتور</td>
                                <td><img class="width-2-rem rounded" src="{{asset('assets/images/avatar-2.jpg')}}" alt=""></td>
                                <td class="width-16-rem">
                                    <section class="d-flex justify-content-end">        
                                        <a class="btn-primary btn-sm" href=""><i class="fa fa-edit"></i> ویرایش </a>
                                        <form action="" method="post">
                                            <button class="btn btn-danger btn-sm mx-1" type="submit"><i class="fa fa-trash-alt"></i> حذف </button>
                                        </form>
                                    </section>
                                </td>
                            </tr>

                             <tr>
                                <th>1</th>
                                <td>مانیتور</td>
                                <td><img class="width-2-rem rounded" src="{{asset('assets/images/avatar-2.jpg')}}" alt=""></td>
                                <td class="width-16-rem">
                                    <section class="d-flex justify-content-end">        
                                        <a class="btn-primary btn-sm" href=""><i class="fa fa-edit"></i> ویرایش </a>
                                        <form action="" method="post">
                                            <button class="btn btn-danger btn-sm mx-1" type="submit"><i class="fa fa-trash-alt"></i> حذف </button>
                                        </form>
                                    </section>
                                </td>
                            </tr>

                             <tr>
                                <th>1</th>
                                <td>مانیتور</td>
                                <td><img class="width-2-rem rounded" src="{{asset('assets/images/avatar-2.jpg')}}" alt=""></td>
                                <td class="width-16-rem">
                                    <section class="d-flex justify-content-end">        
                                        <a class="btn-primary btn-sm" href=""><i class="fa fa-edit"></i> ویرایش </a>
                                        <form action="" method="post">
                                            <button class="btn btn-danger btn-sm mx-1" type="submit"><i class="fa fa-trash-alt"></i> حذف </button>
                                        </form>
                                    </section>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>


            </section>
        </section>
    </section>

@endsection
