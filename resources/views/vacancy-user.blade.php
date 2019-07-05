@extends('app')

@section('title','User Profile')
@section('main-class','profile-page')

@section('main')
<section class="section-profile-cover section-shaped my-0">
    <!-- Circles background -->
    <div class="shape shape-style-1 shape-primary alpha-4">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- SVG separator -->
    <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="card card-profile shadow mt--300">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="img/theme/vivoxa.jfif" class="rounded">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 order-lg-1">
                        <div class="card-profile-stats d-flex justify-content-center">
{{--                            <div>--}}
{{--                                <span class="heading">30</span>--}}
{{--                                <span class="description">Applicants</span>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <span class="heading">{{$companyData->employee_count}}</span>--}}
{{--                                <span class="description">Employees</span>--}}
{{--                            </div>--}}
                            {{-- <div>--}}
                            {{-- <span class="heading">89</span>--}}
                            {{-- <span class="description">Comments</span>--}}
                            {{-- </div>--}}
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                        <div class="card-profile-actions py-4 mt-lg-0">
                            <a href="#" class="btn btn-sm btn-info mr-4">Apply</a>
{{--                            <a href="#" class="btn btn-sm btn-default float-right ">Message</a>--}}
{{--                            <a href="#" class="btn btn-sm btn-warning float-right mr-4" data-toggle="modal" data-target="#modal-form">Edit</a>--}}
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <h3>{{$vacancy->job_title}}</h3>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{$vacancy->location}}</div>
                    <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>{{$vacancy->job_position}}</div>
                     <div><i class="ni education_hat mr-2"></i>{{$company->name}}</div>
                </div>
                <div class="mt-5 py-5 border-top text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <p>{{$companyData->description}}</p>
{{--                            <a href="#">Show more</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal starts here --}}
        <div class="row" style="z-index:2000">
            <div>
                <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal-modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">

                            <div class="modal-body p-0">
                                <!--

                                <div class="card bg-secondary shadow border-0">
                                    <div class="card-header bg-white pb-5">
                                        <div class="text-muted text-center mb-3"><small>Sign in with</small></div>
                                        <div class="btn-wrapper text-center">
                                            <a href="#" class="btn btn-neutral btn-icon">
                                                <span class="btn-inner--icon"><img src="../../assets/img/icons/common/github.svg"></span>
                                                <span class="btn-inner--text">Github</span>
                                            </a>
                                            <a href="#" class="btn btn-neutral btn-icon">
                                                <span class="btn-inner--icon"><img src="../../assets/img/icons/common/google.svg"></span>
                                                <span class="btn-inner--text">Google</span>
                                            </a>
                                        </div>
                                    </div> -->
                                <div class="card-body px-lg-5 py-lg-5">
                                    <!-- <div class="text-center text-muted mb-4">
                                            <small>Or sign in with credentials</small>
                                        </div> -->
                                    <form role="form" method="POST" action="{{ url('company/update/'.$companyData->id)}}">
                                        {{csrf_field()}}
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Company Name" name="name" type="text" value="{{$companyData->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Website" type="text" name="web-site" value="{{$companyData->website}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Address" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Founded Year" type="text" name="year" value="{{$companyData->foundation_year}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Employee Count" type="text" name="count" value="{{$companyData->employee_count}}">
                                            </div>
                                        </div>
                                        <div class=" form-group">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <textarea class="form-control" style="height:200px;" name="company-name" placeholder="About">"{{$companyData->about}}"</textarea>
                                            </div>
                                        </div>
                                        <!-- <div class="custom-control custom-control-alternative custom-checkbox">
                                                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                                <label class="custom-control-label" for=" customCheckLogin"><span>Remember me</span></label>
                                            </div> -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary my-4">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal ends here --}}
    </div>
</section>
@endsection
