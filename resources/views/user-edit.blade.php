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
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="row mx-2 mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text" placeholder="Username"
                                           name="username" value="{{$user->username}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text" placeholder="Email"
                                           name="email" value="{{$user->email}}">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mx-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="First Name" name="firstname" value="{{$user->first_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="Last Name" name="lastname" value="{{$user->last_name}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="Address Lane" name="address_lane" value="{{$user->address_lane}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="Address City" name="address_city" value="{{$user->address_city}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="Mobile Number" name="mbnum" value="{{$user->contact_info}}">
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
                            <button class="btn btn-success" type="submit" formaction="{{url('member')}}" formmethod="POST">Save</button>
                            <button class="btn btn-danger" type="button" formaction="{{url('member-del/'.$user->id)}}" formmethod="POST">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
