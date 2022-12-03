<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->longText('student_name_aadhaar');
            $table->longText('student_name_school');
            $table->string('father_name');
            $table->string('mother_name');
            $table->longText('school_name')->nullable();
            $table->string('class');
            $table->string('student_type');
            $table->string('academic_year');
            $table->string('grn_number');
            $table->string('saral_id');
            $table->string('aadhaar_number');
            $table->string('contact_number');
            $table->string('gender')->comment('male, female, other');
            $table->date('birthdate');
            $table->string('caste')->nullable();
            $table->string('sub_caste')->nullable();
            $table->longText('co')->nullable();
            $table->longText('building_number')->nullable();
            $table->longText('building_name')->nullable();
            $table->longText('street_number')->nullable();
            $table->longText('street_name')->nullable();
            $table->longText('landmark')->nullable();
            $table->string('village_towncity')->nullable();
            $table->string('state')->nullable();
            $table->string('district')->nullable();
            $table->string('taluka')->nullable();
            $table->string('pincode')->nullable();
            $table->string('locality')->nullable();
            $table->longText('permanent_co')->nullable();
            $table->longText('permanent_building_number')->nullable();
            $table->longText('permanent_building_name')->nullable();
            $table->longText('permanent_street_number')->nullable();
            $table->longText('permanent_street_name')->nullable();
            $table->longText('permanent_landmark')->nullable();
            $table->string('permanent_village_towncity')->nullable();
            $table->string('permanent_state')->nullable();
            $table->string('permanent_district')->nullable();
            $table->string('permanent_taluka')->nullable();
            $table->string('permanent_pincode')->nullable();
            $table->string('permanent_locality')->nullable();
            $table->longText('beneficiary_number')->nullable();
            $table->longText('account_holder_name')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('micr_number')->nullable();
            $table->longText('bank_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('account_number')->nullable();
            $table->tinyInteger('is_mobile_verified');
            $table->tinyInteger('is_aadhaar_verified');
            $table->tinyInteger('is_active')->default(0)->nullable()->comment('0: inactive, 1: active');
            $table->tinyInteger('is_deleted')->default(0)->nullable()->comment('0: deleted, 1: non_deleted');
            $table->tinyInteger('cleark_status')->default(0)->nullable()->comment('0: pending, 1: accepted, 2: rejected');
            $table->tinyInteger('principal_status')->default(0)->nullable()->comment('0: pending, 1: accepted, 2: rejected');
            $table->tinyInteger('po_status')->default(0)->nullable()->comment('0: pending, 1: accepted, 2: rejected');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
