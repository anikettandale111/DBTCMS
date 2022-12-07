
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

<script>
    $(document).on("click", ".get-aadhaar-data", function() {
        $(this).find('form').trigger('reset');

        var id=$(this).attr('data-id');
        var name=$(this).attr('data-name');
        var aadhaar=$(this).attr('data-aadhaar');

        $('#updStudentName').val(name);
        $('#updAadhaarNumber').val(aadhaar);
        $('#updStudentId').val(id);
    });
</script>

<script>
    $(document).on("click", ".auth-aadhaar-data", function() {
        $(this).find('form').trigger('reset');

        var id=$(this).attr('data-id');
        var name=$(this).attr('data-name');
        var aadhaar=$(this).attr('data-aadhaar');
        var aadhaarStatus=$(this).attr('data-aadhaarStatus');

        if(aadhaarStatus=="0"){
            $('#updAuthAadhaarStatus').val('NO');
        }else{
            $('#updAuthAadhaarStatus').val('YES');
        }

        $('#updAuthStudentName').val(name);
        $('#updAuthAadhaarNumber').val(aadhaar);
        $('#updAuthStudentId').val(id);
    });
</script>

<script>
    $(document).on("change", "#addr-district", function() {
        var districtName= $('#addr-district').val();
        $.ajax({
            type:'post',
            url:"{{ route('show-all-city') }}",
            data:{
                "_token": "{{ csrf_token() }}",
                districtName: districtName
            },
            success:function(data){
                // alert(data);
                // $('#taluka').html('');
                // $('#taluka').html(data);
            },
            error: function(jqXHR, exception) {
                alert("Something Went Wrong, Please Try Again...!");
            }    
        });
    });
</script>