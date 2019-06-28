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
                                <input class="form-control form-control-alternative" type="text" placeholder="First Name" name="first-name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="">
                                <input class="form-control form-control-alternative" type="text" placeholder="Last Name" name="last-name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="">
                                <input class="form-control form-control-alternative" type="text" placeholder="Username" name="first-name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="">
                                <input class="form-control form-control-alternative" type="text" placeholder="Email" name="last-name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="">
                                <input class="form-control form-control-alternative" type="text" placeholder="Address" name="last-name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="">
                                <input class="form-control form-control-alternative" type="text" placeholder="Contact Number" name="last-name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="">
                                <input class="form-control form-control-alternative" type="text" placeholder="NIC" name="last-name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="">
                                <input class="form-control form-control-alternative" type="text" placeholder="Experience" name="last-name">
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>

@endsection
