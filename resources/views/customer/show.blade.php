@extends('layout.app')


@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 py-4">Customers</h1>
          
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Customers</h6>
                            <a href="{{ route('create.customer') }}" class="btn btn-primary btn-sm float-right">Add New </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   
                                   <tr>
                                        <th>Fullname</th>
                                        <td>{{ $customer->full_name }}</td>
                                   </tr>
                                   
                                   <tr>
                                    <th>Email</th>
                                    <td>{{ $customer->email }}</td>
                                  </tr>
                               
                               <tr>
                                <th>Mobile</th>
                                <td>{{ $customer->mobile }}</td>
                           </tr>
                                   
                                   <tr>
                                    <th>Address</th>
                                    <td>{{ $customer->address }}</td>
                               </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
