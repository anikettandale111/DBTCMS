<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;
use DataTables;
use DB;

class StudentController extends Controller
{
    
    public function index(Request $request){
        return view('students/student_registration');
    }

    public function studentsList(Request $request){
        $students_list = Student::get();
        //  print_r($students_list);
        return view('students/students_list',compact('students_list'));
        // return view('students/students_list');
    }
    
    public function store(Request $request){
        $data['academic_year'] = $request->academicYear;
        $data['school_name'] = $request->schoolName;
        $data['class'] = $request->studentClass;
        $data['grn_number'] = $request->grnNumber;
        $data['saral_id'] = $request->saralId;
        $data['aadhaar_number'] = $request->aadhaarNumber;
        $data['student_name_aadhaar'] = $request->studentNameAadhaar;
        // $data['student_type'] = $request->studentType;
        $data['student_type'] ='1';
        $data['student_name_school'] = $request->studentNameSchool;
        $data['father_name'] = $request->fatherName;
        $data['mother_name'] = $request->motherName;
        $data['contact_number'] = $request->contactNumber;
        $data['gender'] = $request->gender;
        $data['birthdate'] = $request->dateOfBirth;
        $data['caste'] = $request->caste;
        $data['sub_caste'] = $request->subCaste;
        
        $data['co'] = $request->co;
        $data['building_number'] = $request->buildingNumber;
        $data['building_name'] = $request->buildingName;
        $data['street_number'] = $request->streetNumber;
        $data['street_name'] = $request->streetName;
        $data['landmark'] = $request->atPost;
        $data['village_towncity'] = $request->village;
        $data['state'] = $request->state;
        $data['district'] = $request->district;
        $data['taluka'] = $request->taluka;
        $data['pincode'] = $request->pincode;
        $data['locality'] = $request->landmark;
        $data['district'] = $request->district;

        $data['permanent_co'] = $request->per_co;
        $data['permanent_building_number'] = $request->per_buildingNumber;
        $data['permanent_building_name'] = $request->per_buildingName;
        $data['permanent_street_number'] = $request->per_streetNumber;
        $data['permanent_street_name'] = $request->per_streetName;
        $data['permanent_landmark'] = $request->per_atPost;
        $data['permanent_village_towncity'] = $request->per_village;
        $data['permanent_state'] = $request->per_state;
        $data['permanent_district'] = $request->per_district;
        $data['permanent_taluka'] = $request->per_taluka;
        $data['permanent_pincode'] = $request->per_pincode;
        $data['permanent_locality'] = $request->per_landmark;
        $data['permanent_district'] = $request->per_district;

        $data['beneficiary_number'] = $request->beneficiaryName;
        $data['account_holder_name'] = $request->accountHolderName;
        $data['ifsc_code'] = $request->ifscCode;
        $data['micr_number'] = $request->micrNumber;
        $data['bank_name'] = $request->bankName;
        $data['branch_name'] = $request->branchName;
        $data['account_number'] = $request->accountNumber;

        $data['is_mobile_verified'] = 0;
        $data['is_aadhaar_verified'] = 0;
        $data['created_by'] = 0;
        $data['updated_by'] = 0;
        
        // if(isset($request->password_conf) && $request->password_conf !== ''){
        // $data['password'] = Hash::make($request->password_conf);
        // }
      
        if($request->user_id == 0){
            $checkDuplicate = Student::where('aadhaar_number',$request->aadhaarNumber)->count();
        }else{
            $checkDuplicate = Student::where('aadhaar_number',$request->aadhaarNumber)->where('id','!=',$request->user_id)->count();
        }
        if($checkDuplicate){
            return ['status'=>'Error','message'=>'Aadhaar Already Exits'];
        }

        if($request->user_id == 0){
            $resultId = Student::insertGetId($data);
            $message = 'Student Created Successfully';
        }else{
            $resultId = Student::where('id',$request->user_id)->update($data);
            $message = 'Student Updated Successfully';
        }


        // if($resultId){
        //     return ['status'=>'Success','message'=>$message];
        // }else{
        //     return ['status'=>'Success','message'=>$message];
        // }

        return redirect()->route('student_list');
    }

    public function show($id){
        return User::where('id',$id)->first();
    }
    
    public function destroy(Request $request){
        return User::where('id',$request->id)->update(['is_delete'=>0]);
    }

   

}
