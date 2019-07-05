@extends('app')


@section('title','User Profile')
@section('body-class','bg-gradient-cyan')

@section('main')
<section class="section">
    <div class="container">
        <div class="card mt-4 p-3">
        <form action='' method="POST" class="from-horizontal">
            {{csrf_field()}}
            <h3>Edit your Vacancy!</h3>
             
           <div class = "form-group">
                <lable for="company_id" class="col-md-2 text-right">Company ID</lable>
                <div class="col-md-10">
                    <input type="text"  name="company_id" value={{$table->company_id}} class="form-control">
                    </div>
                    </div>
        
            <div class = "form-group">
                <lable for="job_title" class="col-md-2 text-right">Job Title</lable>
                <div class="col-md-10">
                    <input type="text"  name="job_title" value={{$table->job_title}} class="form-control">
                    </div>
                    </div>

            <div class = "form-group">
                <lable for="job_position" class="col-md-2 text-right">Job Position</lable>
                <div class="col-md-10">
                    <input type="text"  name="job_position"  value={{$table->job_position}} class="form-control">
                    </div> 
                    </div>

            <div class = "form-group">
                <lable for="deadline" class="col-md-2 text-right">Deadline</lable>
                <div class="col-md-10">
                    <input type="date" name="deadline" value={{$table->deadline}} class="form-control">
                    </div> 
                    </div>

            <div class = "form-group">
                <lable for="description" class="col-md-2 text-right">Description</lable>
                <div class="col-md-10">
                    <input type="text"   name="description" value={{$table->description}} class="form-control input-lg">
                    </div> 
                    </div>

            
            <div class = "form-group">
                <lable for="brochure" class="col-md-2 text-right">Brochure</lable>
                <div class="col-md-10">
                    <input type="text"  name="brochure" value={{$table->brochure}}  class="form-control">
                    </div> 
                    </div>

            
            <div class = "form-group">
                <lable for="contact_info" class="col-md-2 text-right">Contact_info</lable>
                <div class="col-md-10">
                    <input type="text"  name="contact_info" value={{$table->contact_info}} class="form-control">
                    </div> 
                    </div>

          <div class = "form-group">
                <lable for="location" class="col-md-2 text-right">Location</lable>
                <div class="col-md-10">
                    <input type="text" name="location" value={{$table->location}} class="form-control">
                    </div> 
                    </div>

            <div class = "form-group">
                <lable class="col-md-2 text-right"></lable>
                <div class="col-md-10">
                    <input type="Submit" name="btnUpdate" class="btn btn-primary" value="Update">
                    </div> 
                    </div>

            </form>
        </div>
    </div>
</section>

@endsection
