@extends('layout.app')


@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

          
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add RoomTypes</h6>
                            <a href="{{ url('admin/customer') }}" class="btn btn-primary btn-sm float-right">View All Customers</a>
                        </div>
                        <div class="card-body">
                        
                        @if ($errors->any())
                            @foreach ($errors->all() as $error )
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                        @endif
                        
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                            <div class="table-responsive">
                            <form action="{{ route('store.customer') }}" method="post">
                                @csrf
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Full Name <span class="text-danger">*</span> </th> 
                                        <td><input type="text" name="full_name" class="form-control"></td>
                                        
                                    </tr>
                                        
                                        
                                    <tr>
                                        <th>Email <span class="text-danger">*</span> </th> 
                                        <td><input type="text" name="email" class="form-control"></td>
                                        
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th>Mobile <span class="text-danger">*</span> </th> 
                                        <td><input type="text" name="mobile" class="form-control"></td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th>Password <span class="text-danger">*</span> </th> 
                                        <td><input type="password" name="password" class="form-control"></td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th>Photo </th> 
                                        <td><input name="photo" multiple type="file" class="form-control" ></td>
                                        
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td><textarea type="text" name="address" class="form-control" ></textarea></td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" class="btn btn-success btn-sm">
                                        </td>
                                    </tr>
                                    
                                </table>
                            </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection
