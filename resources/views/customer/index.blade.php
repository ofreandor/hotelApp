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
                        
                            @if(Session::has('success'))
                             <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fullname</th>
                                            <th>Email </th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                          
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                    
                                    @if($customer)
                                        
                                        @foreach ($customer as $customer )
                                            
                                            <tr>
                                                <td>{{ $customer->id }}</td>
                                                <td>{{ $customer->full_name }}</td>
                                                <td>{{ $customer->email }}</td>
                                                <td>{{ $customer->mobile }}</td>
                                                <td>
                                                  <a href="{{ route('show.customer', $customer->id) }}"><i class="fa fa-eye mx-3 text-success"></i></a>
                                                  
                                                  <a href="{{ route('edit.customer', $customer->id) }}"><i class="fa fa-edit mx-3 text-primary"></i></a>
                                                  
                                                  <a onclick="confirm('Are you sure you want to perform this action?')" href="{{ route('delete.customer', $customer->id) }}"><i class="fa fa-trash mx-3 text-danger"></i></a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    
            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
