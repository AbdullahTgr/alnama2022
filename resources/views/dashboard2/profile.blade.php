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




                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Update Profile!</h1>
                                </div>
                                <form method="POST" action="{{route('admin.update_profile')}}" class="user">
                                    @csrf
                                     <div class="form-group">
                                        <input type="text" value="{{$user->name}}" name="name"class="form-control form-control-user" id="exampleFirstName" placeholder="First Name"> 
                                    </div>
                                    <div class="form-group">
                                        <input value="{{$user->email}}" name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                         <input autocomplete="newPassword"   name="newPassword" type="password" class="form-control form-control-user" placeholder="New Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Update
                                    </button>
                               
                                </form>
                                
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
     
@endsection
