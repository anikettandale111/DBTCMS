@include('layouts.clerk_header')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <!-- <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                            <li class="breadcrumb-item active">Orders</li>
                                        </ol>
                                    </div> -->
                                    <h4 class="page-title">Students </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-xl-8">
                                                <form class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                                    <div class="col-auto">
                                                        <label for="inputPassword2" class="visually-hidden">Search</label>
                                                        <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                                    </div>
                                                    <!-- <div class="col-auto">
                                                        <div class="d-flex align-items-center">
                                                            <label for="status-select" class="me-2">Status</label>
                                                            <select class="form-select" id="status-select">
                                                                <option selected="">Choose...</option>
                                                                <option value="1">Paid</option>
                                                                <option value="2">Awaiting Authorization</option>
                                                                <option value="3">Payment failed</option>
                                                                <option value="4">Cash On Delivery</option>
                                                                <option value="5">Fulfilled</option>
                                                                <option value="6">Unfulfilled</option>
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                </form>                            
                                            </div>
                                            <!-- <div class="col-xl-4">
                                                <div class="text-xl-end mt-xl-0 mt-2">
                                                    <button type="button" class="btn btn-primary mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add New Student</button>
                                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div>
                                            </div> -->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                        <th>#</th>
                                                        <th>GRN</th>
                                                        <th>Class</th>
                                                        <th>Gender</th>
                                                        <th>Name</th>
                                                        <th>Aadhaar No</th>
                                                        <th style="width: 125px;">Renew</th>
                                                        </tr>
                                                        
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                        @if(count($students_list))
                                                    @foreach($students_list AS $key => $studs)
                                                    <tr>
                                                        <!-- <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td> -->
                                                        <td>
                                                            {{$key+1}}
                                                        </td>
                                                        <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">{{$studs->grn_number}}</a> </td>
                                                        <td>
                                                            {{$studs->class}}
                                                        </td>
                                                       
                                                        <td>
                                                            <span class="text-uppercase">{{$studs->gender}}</span> 
                                                            <!-- <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5> -->
                                                        </td>
                                                        <td>
                                                           {{$studs->student_name_school}}
                                                        </td>
                                                        <td>
                                                            {{$studs->aadhaar_number}}
                                                        </td>
                                                        
                                                        <td>
                                                            <!-- <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a> -->
                                                            <a href="{{ route('student-renewal') }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <!-- <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a> -->
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                                    

                                                    
                                                    </tbody>
                                                </table>  
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row --> 
                        
                    </div> <!-- container -->

           @include('layouts.footer')    
