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
                                    <span>Vacancy Information</span>
                                </h2>
                                <img src="/img/theme/vivoxa.jfif" class="rounded-circle w-25">
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2 mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="Vacancy Title"
                                           name="vacancy-title">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2 mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative" type="text"
                                           placeholder="Job Position"
                                           name="job-position">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="">
                                    <input class="form-control form-control-alternative datepicker" type="text"
                                           placeholder="Deadline"
                                           name="vacancy-deadline">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="">
{{--                                    <label for="desc" class="text-light">Description</label>--}}
                                    <textarea class="form-control form-control-alternative" placeholder="Description"
                                              name="desc">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2 justify-content-end">
                        <button class="btn btn-success">Save</button>
                        <button class="btn btn-warning">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
