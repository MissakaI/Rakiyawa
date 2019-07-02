@extends('app')


@section('title','User Profile')
@section('body-class','bg-gradient-cyan')

@section('main')
<section class="section">
    <div class="container">
        <div class="card mt-4 p-3">
        <form action='/insert' method="post" class="from-horizontal">

            <h3>Add Vacancy Form</h3>

            <div class = "form-group">
                <lable for="company_id" class="col-md-2 text-right">Company ID</lable>
                <div class="col-md-10">
                    <input type="text" name="company_id" class="form-control">
                    </div>
                    </div>

            <div class = "form-group">
                <lable for="job_title" class="col-md-2 text-right">Job Title</lable>
                <div class="col-md-10">
                    <input type="text" name="job_title" class="form-control">
                    </div>
                    </div>

            <div class = "form-group">
                <lable for="job_position" class="col-md-2 text-right">Job Position</lable>
                <div class="col-md-10">
                    <input type="text" name="job_position" class="form-control">
                    </div> 
                    </div>

            <div class = "form-group">
                <lable for="deadline" class="col-md-2 text-right">Deadline</lable>
                <div class="col-md-10">
                    <input type="text" name="deadline" class="form-control">
                    </div> 
                    </div>

            <div class = "form-group">
                <lable for="description" class="col-md-2 text-right">Description</lable>
                <div class="col-md-10">
                    <input type="text" name="description" class="form-control input-lg">
                    </div> 
                    </div>

            
            <div class = "form-group">
                <lable for="brochure" class="col-md-2 text-right">Brochure</lable>
                <div class="col-md-10">
                    <input type="text" name="brochure" class="form-control">
                    </div> 
                    </div>

            
            <div class = "form-group">
                <lable for="contact_info" class="col-md-2 text-right">Contact_info</lable>
                <div class="col-md-10">
                    <input type="text" name="contact_info" class="form-control">
                    </div> 
                    </div>

          <div class = "form-group">
                <lable for="location" class="col-md-2 text-right">Location</lable>
                <div class="col-md-10">
                    <input type="text" name="location" class="form-control">
                    </div> 
                    </div>

            <div class = "form-group">
                <lable class="col-md-2 text-right"></lable>
                <div class="col-md-10">
                    <input type="submit" name="btnSave" class="btn btn-primary" value="Save">
                    </div> 
                    </div>

            </form>
        </div>
    </div>
</section>

@endsection
