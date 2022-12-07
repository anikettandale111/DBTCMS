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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Form Validation</li>
                        </ol>
                    </div> -->
                    <h4 class="page-title">Students Renewal</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="tab-content">
                            <div class="tab-pane show active" id="custom-styles-preview">
                                <form class="needs-validation" action="{{url('student_insert')}}" method="POST" novalidate="">
                                     @csrf
                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#custom-styles-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                Student Details
                                            </a>
                                        </li>
                                    </ul> 
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label" for="saralId">Saral ID<span style="color:red">  *</span></label>
                                            <input type="text" class="form-control" id="saralId" name="saralId" placeholder="grn number" value="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a Saral ID.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="aadhaarNumber">UID (Aadhaar) Number<span style="color:red">  *</span></label>
                                            <input type="text" class="form-control" id="aadhaarNumber" name="aadhaarNumber" placeholder="UID (Aadhaar) Number" value="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a UID (Aadhaar) Number.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="studentClass">Class<span style="color:red">  *</span></label>
                                            <input type="text" class="form-control" id="studentClass" name="studentClass" placeholder="class" value="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a Class.
                                            </div>
                                        </div>

                                        

                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label" for="percentage">Percentage<span style="color:red">  *</span></label>
                                            <input type="text" class="form-control" id="percentage" name="percentage" placeholder="percentage" value="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a Percentage.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="grade">Grade<span style="color:red">  *</span></label>
                                            <input type="text" class="form-control" id="grade" name="grade" placeholder="grade" value="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a Grade.
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                   
                                   
                                    
                                     <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#custom-styles-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                A. Present Address
                                            </a>
                                        </li>
                                    </ul> 

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label" for="co">CO</label>
                                            <input type="text" class="form-control" id="co" name="co" placeholder="CO" value="">
                                            <div class="invalid-feedback">
                                                Please provide a CO.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="buildingNumber">Building Number</label>
                                            <input type="text" class="form-control" id="buildingNumber" name="buildingNumber" placeholder="Building Number" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Building Number.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="buildingName">Building Name</label>
                                            <input type="text" class="form-control" id="buildingName" name="buildingName" placeholder="Building Name" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Building Name.
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label" for="streetNumber">Street Number</label>
                                            <input type="text" class="form-control" id="streetNumber" name="streetNumber" placeholder="Street Number" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Stret Number.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="streetName">Street Name</label>
                                            <input type="text" class="form-control" id="streetName" name="streetName" placeholder="Street Name" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Street Name.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="atPost">Landmark / At-Post</label>
                                            <input type="text" class="form-control" id="atPost" name="atPost" placeholder="Landmark / At-Post" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Landmark / At-Post.
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label" for="village">Village/Town/City</label>
                                            <input type="text" class="form-control" id="village" name="village" placeholder="Village/Town/City" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Village/Town/City.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="state">State</label>
                                            <input type="text" class="form-control" id="state" name="state" placeholder="State" value="">
                                            <div class="invalid-feedback">
                                                Please provide a State.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="district">District</label>
                                            <input type="text" class="form-control" id="district" name="district" placeholder="District" value="">
                                            <div class="invalid-feedback">
                                                Please provide a District.
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                     <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label" for="taluka">Taluka</label>
                                            <input type="text" class="form-control" id="taluka" name="taluka" placeholder="Taluka" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Taluka.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="pincode">Pincode</label>
                                            <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Pincode.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="landmark">Locality/Landmark</label>
                                            <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Locality/Landmark" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Locality/Landmark.
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#custom-styles-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                B. Permanent Address
                                            </a>
                                        </li>
                                    </ul> 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="homepostalcheck">
                                                <label class="form-check-label" for="homepostalcheck">Same as Above</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label" for="per_co">CO</label>
                                            <input type="text" class="form-control" id="per_co" name="per_co" placeholder="CO" value="">
                                            <div class="invalid-feedback">
                                                Please provide a CO.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="per_buildingNumber">Building Number</label>
                                            <input type="text" class="form-control" id="per_buildingNumber" name="per_buildingNumber" placeholder="Building Number" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Building Number.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="per_buildingName">Building Name</label>
                                            <input type="text" class="form-control" id="per_buildingName" name="per_buildingName" placeholder="Building Name" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Building Name.
                                            </div>
                                        </div>
                                    </div>
                                    <br>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label" for="per_streetNumber">Street Number</label>
                                            <input type="text" class="form-control" id="per_streetNumber" name="per_streetNumber" placeholder="Street Number" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Stret Number.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="per_streetName">Street Name</label>
                                            <input type="text" class="form-control" id="per_streetName" name="per_streetName" placeholder="Street Name" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Street Name.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="per_atPost">Landmark / At-Post</label>
                                            <input type="text" class="form-control" id="per_atPost" name="per_atPost" placeholder="Landmark / At-Post" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Landmark / At-Post.
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label" for="per_village">Village/Town/City</label>
                                            <input type="text" class="form-control" id="per_village" name="per_village" placeholder="Village/Town/City" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Village/Town/City.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="per_state">State</label>
                                            <input type="text" class="form-control" id="per_state" name="per_state" placeholder="State" value="">
                                            <div class="invalid-feedback">
                                                Please provide a State.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="per_district">District</label>
                                            <input type="text" class="form-control" id="per_district" name="per_district" placeholder="District" value="">
                                            <div class="invalid-feedback">
                                                Please provide a District.
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                     <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label" for="per_taluka">Taluka</label>
                                            <input type="text" class="form-control" id="per_taluka" name="per_taluka" placeholder="Taluka" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Taluka.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="per_pincode">Pincode</label>
                                            <input type="text" class="form-control" id="per_pincode" name="per_pincode" placeholder="Pincode" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Pincode.
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="per_landmark">Locality/Landmark</label>
                                            <input type="text" class="form-control" id="per_landmark" name="per_landmark" placeholder="Locality/Landmark" value="">
                                            <div class="invalid-feedback">
                                                Please provide a Locality/Landmark.
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    

                                    <div class="row">
                                        <div class="col-md-4">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

        </div>
        <!-- end row -->

    </div> <!-- container -->
@include('layouts.footer')

<script>
    function setBillingAddress(){
        if ($("#homepostalcheck").is(":checked")) {
            $('#per_co').val($('#co').val());
            $('#per_buildingNumber').val($('#buildingNumber').val());
            $('#per_buildingName').val($('#buildingName').val());
            $('#per_streetNumber').val($('#streetNumber').val());
            $('#per_streetName').val($('#streetName').val());
            $('#per_atPost').val($('#atPost').val());
            $('#per_village').val($('#village').val());
            $('#per_state').val($('#state').val());
            $('#per_district').val($('#district').val());
            $('#per_taluka').val($('#taluka').val());
            $('#per_pincode').val($('#pincode').val());
            $('#per_landmark').val($('#landmark').val());
        } else {
            $('#per_co').val('');
            $('#per_buildingNumber').val('');
            $('#per_buildingName').val('');
            $('#per_streetNumber').val('');
            $('#per_streetName').val('');
            $('#per_atPost').val('');
            $('#per_village').val('');
            $('#per_state').val('');
            $('#per_district').val('');
            $('#per_taluka').val('');
            $('#per_pincode').val('');
            $('#per_landmark').val('');
        }
    }

    $('#homepostalcheck').click(function(){
        setBillingAddress();
    })
</script>


