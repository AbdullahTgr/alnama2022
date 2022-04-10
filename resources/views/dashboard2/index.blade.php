@php
$nav = '';    
@endphp
@extends('layouts.app')
@section('content')


 

    <!-- Custom fonts for this template-->
    <link href="{{asset('css/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

 

    <!-- Page Wrapper -->
    <div id="wrapper">

                    <!-- Sidebar -->
                        @include('dashboard.left-nav')
                    <!-- End of Sidebar -->

         <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                     @include('dashboard.top-bar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">لوحة التحكم</h1>
 
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 col-md-12 mb-12">
                              <div class="row">
                                  <div class="col-md-6">
                                    <form style=" margin-top: 6%; " enctype="multipart/form-data" id="formCover" action="{{route('admin.update_cover')}}" method="post">
                                        @csrf
                                        <input type="file" name="cover" id="cover" style="display: none;">
                                        <label for="cover" class="btn btn-primary" href="#">صورة الموقع الرئيسية<i class="fa fa-image"></i></label>
                                      </form>
                                  </div>
                                  <div class="col-md-6">
                                      <img style="width: 128px" class="img-fluid" src="{{asset( str_replace('public' , 'storage' ,$cover->cover))}}" alt="" srcset="">
                                  </div>
                              </div>
                            <hr>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            اجمالي المنتجات</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$products}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-shapes fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            اجمالي الاقسام</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$cats}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tags fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

  

  

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                              
                            <div class="row">
                                <h4>اخر الاقسام</h4>

                                <div class="card shadow mb-4">
     

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                  <div class="col-sm-12">
                                                  <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">الاسم العربي</th>
                                                         <th rowspan="1" colspan="1">الاسم الانجليزي</th>
                                                         <th rowspan="1" colspan="1">تحكم</th>
                                                     </tr>
                                                </thead>
                                                <tbody>
                                                             
                                                    @forelse ($last_cats as $cat)
                                                    <tr class="odd">
                                                        <td class="sorting_1">{{$cat->ar_name}}</td>
                                                         <td>{{$cat->ar_description}}</td>
                                                         <td>
                                                             <a href="{{route('admin.cats')}}" class="btn btn-primary btn-sm"><i class="fa fa-tags"></i> ادارة</a>                                
                                                        </td>
                                                     </tr>
                                                    @empty
                                                        {{'No data to show.'}}
                                                    @endforelse
                                                    
                              
                                                  </tbody>
                                            </table>
                                        </div>
                                    </div>
                                     </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <div class="row">
                                <h4>أخر المنتجات</h4>

                                <div class="card shadow mb-4">
     

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                  <div class="col-sm-12">
                                                  <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">#</th>
                                                        <th rowspan="1" colspan="1">الاسم العربي</th>
                                                         <th rowspan="1" colspan="1">الاسم الانجليزي</th>
                                                         <th rowspan="1" colspan="1">تحكم</th>
                                                     </tr>
                                                </thead>
                                                <tbody>
                                                             
                                                    @forelse ($last_products as $product)
                                                    <tr class="odd">
                                                        <td class="sorting_1"><img style=" max-width: 45px; " src="{{asset( str_replace('public' , 'storage' ,$product->photo))}}" class="img-fluid" srcset=""></td>
                                                        <td class="sorting_1">{{$product->ar_name}}</td>
                                                         <td>{{$product->ar_description}}</td>
                                                         <td>
                                                             <a href="{{route('admin.products')}}" class="btn btn-primary btn-sm"><i class="fa fa-shapes"></i> ادارة</a>                                
                                                        </td>
                                                     </tr>
                                                    @empty
                                                        {{'No data to show.'}}
                                                    @endforelse
                                                    
                              
                                                  </tbody>
                                            </table>
                                        </div>
                                    </div>
                                     </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>








@endsection



@section('scripts')
        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('js/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('css/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="{{asset('js/jquery-easing/jquery.easing.min.js')}}"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    
        <!-- Page level plugins -->
        <script src="{{asset('js/chart.js/Chart.min.js')}}"></script>
    
        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>


        <script>
   document.getElementById('cover').onchange = function(){
           document.getElementById('formCover').submit();
    };

        </script>
     
@endsection
