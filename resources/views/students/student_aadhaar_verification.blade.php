@include('layouts.clerk_header')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Verification Adhaar </h4>
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
                                                </form>                            
                                            </div>
                                        </div>
                
                                        <div class="table-responsive">
                                             <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>GRN</th>
                                                            <th>Name</th>
                                                            <th>Aadhaar No</th>
                                                            <th>Aadhaar Authentication Status</th>
                                                            <th>Update Aadhaar</th>
                                                            <th>Authenticate Aadhaar</th>
                                                            <!-- <th style="width: 125px;">Renew</th> -->
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                        @if(count($students_list))
                                                    @foreach($students_list AS $key => $studs)
                                                    <tr>
                                                        
                                                        <td>
                                                            {{$key+1}}
                                                        </td>
                                                        <td><a href="javascript:void(0);" class="text-body fw-bold">{{$studs->grn_number}}</a> </td>
                                                        
                                                        <td>
                                                            <span class="text-uppercase">{{$studs->student_name_school}}</span> 
                                                            <!-- <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5> -->
                                                        </td>
                                                        <td>
                                                            {{$studs->aadhaar_number}}
                                                        </td>
                                                        <td>
                                                        @if($studs->is_aadhaar_verified==0)
                                                            <h5><span class="badge badge-danger-lighten text-center"> NO</span></h5>
                                                        @elseif($studs->is_aadhaar_verified==1)
                                                            <h5><span class="badge badge-success-lighten text-center"> YES</span></h5>
                                                        @endif
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm get-aadhaar-data" data-id="{{$studs->id}}" data-name="{{$studs->student_name_school}}" data-aadhaar="{{$studs->aadhaar_number}}" data-bs-toggle="modal" data-bs-target="#updateAadhaarModal">
                                                                Update
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm auth-aadhaar-data" data-id="{{$studs->id}}" data-name="{{$studs->student_name_school}}" data-aadhaarStatus="{{$studs->is_aadhaar_verified}}" data-aadhaar="{{$studs->aadhaar_number}}" data-bs-toggle="modal" data-bs-target="#selfAuthenticateModel">
                                                                Self Authenticate
                                                            </button>
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

                    <div class="modal fade" id="updateAadhaarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form class="needs-validation" action="{{url('update-student-aadhaar')}}" method="POST" novalidate="">
                            @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Aadhaar Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                    </div> 
                                    <div class="modal-body">
                                        <input type="hidden" class="form-control" id="updStudentId" name="updStudentId" placeholder="studentId" readonly="" value="" required="">
                                                
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="updStudentName">Student Name(As per school records)<span style="color:red">  *</span></label>
                                                <input type="text" class="form-control" id="updStudentName" name="updStudentName" placeholder="studentName" readonly="" value="" required="">
                                                <div class="invalid-feedback">
                                                    Please provide a Student Name(As per school records)
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="updAadhaarNumber">Aadhaar Number</label>
                                                <input type="text" class="form-control" id="updAadhaarNumber" name="updAadhaarNumber" readonly="" placeholder="aadhaar number" value="">
                                                <div class="invalid-feedback">
                                                   Please provide a Aadhaar Number
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="updNewAadhaarNumber">New Aadhaar Number</label>
                                                <input type="text" class="form-control" id="updNewAadhaarNumber" name="updNewAadhaarNumber" placeholder="new aadhaar number" value="" required="">
                                                <div class="invalid-feedback">
                                                   Please provide a Aadhaar Number
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div> 
                                </div> 
                            </form>
                        </div> 
                    </div>

                    <div class="modal fade" id="selfAuthenticateModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form class="needs-validation" action="{{url('update-aadhaar-authentication')}}" method="POST" novalidate="">
                            @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Aadhaar Authentication Status Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                    </div> 
                                    <div class="modal-body">
                                        <input type="hidden" class="form-control" id="updAuthStudentId" name="updAuthStudentId" placeholder="studentId" readonly="" value="" required="">
                                                
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="updAuthStudentName">Student Name(As per school records)</label>
                                                <input type="text" class="form-control" id="updAuthStudentName" name="updAuthStudentName" placeholder="studentName" readonly="" value="" required="">
                                                <div class="invalid-feedback">
                                                    Please provide a Student Name(As per school records)
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="updAuthAadhaarNumber">Aadhaar Number</label>
                                                <input type="text" class="form-control" id="updAuthAadhaarNumber" name="updAuthAadhaarNumber" readonly="" placeholder="aadhaar number" value="">
                                                <div class="invalid-feedback">
                                                   Please provide a Aadhaar Number
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="updAuthAadhaarStatus">Aadhaar Authentication Status</label>
                                                <input type="text" class="form-control" id="updAuthAadhaarStatus" name="updAuthAadhaarStatus" readonly="" placeholder="status" value="">
                                                <div class="invalid-feedback">
                                                   Please provide a Authentication Status
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-label" for="updAuthAadhaarNumber">Do you want to authenticate this Aadhaar ?.<span style="color:red">  *</span></label>
                                                <br><input type="checkbox" id="newAuthStatus" name="newAuthStatus" data-switch="success" required=""/>
                                                <label for="newAuthStatus" data-on-label="Yes" data-off-label="No"></label>
                                                <div class="invalid-feedback">
                                                   Please provide a Status
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div> 
                                </div> 
                            </form>
                        </div> 
                    </div>


       

           @include('layouts.footer')    

        