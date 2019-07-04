@extends('app')

@section('title','User Profile')
@section('body-class','bg-gradient-cyan')

@section('main')
    <section class="section">
        <div class="container">
            <div class="card mt-4 p-3">
                <form>
                    <div class="row mx-2">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h2 class="mb-3">
                                    <span>User Information</span>
                                </h2>
                                <img src="/img/theme/team-4-800x800.jpg" class="rounded-circle w-25">
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2 mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text" placeholder="NIC"
                                           name="NIC">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text" placeholder="Email"
                                           name="email">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mx-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="First Name" name="firstname">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="Last Name" name="lastname">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="Date of Birth" name="dob">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="Gender" name="gender">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="Mobile Number" name="mbnum">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mx-2">
                        <label class="col-md-12">Update Password</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="password"
                                           placeholder="Current Password" name="cur-pass">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="password"
                                           placeholder="New Password" name="new-pass">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mx-2 justify-content-end">
                            <button class="btn btn-success" type="submit">Save</button>
                            <button class="btn btn-danger" type="button">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
