@extends('app')


@section('title','User Profile')
@section('body-class','bg-gradient-cyan')

@section('main')
<section class="section">

    <table class="table table-bordered table-responsive">
        <div style="background-color:lightblue">

            <thead>
                <tr bgcolor="#9cbbed">
                    <td>Company_ID</td>
                    <td>Job_Title</td>
                    <td>Job_position</td>
                    <td>Deadline</td>
                    <td>Description</td>
                    <td>Contact-Info</td>
                    <td>Location</td>
                    <td>Action</td>
                </tr>

            <tbody>
                @foreach($table as $row)
                <tr>
                    <td><?php echo $row->company_id ?></td>
                    <td><?php echo $row->job_title ?></td>
                    <td><?php echo $row->job_position ?></td>
                    <td><?php echo $row->deadline ?></td>
                    <td><?php echo $row->description ?></td>
                    <td><?php echo $row->contact_info ?></td>
                    <td><?php echo $row->location ?></td>

                    <td>
                        <a href="/edit/{{$row->id}}" class="btn btn-info">Edit</a>
                        <a href="/delete/{{$row->id}}" class="btn btn-danger">Delete</a>
                    </td>
                    @endforeach

                </tr>
            </tbody>
            </thead>
    </table>
    <div class="text-center">
        <a href="/vacancy" class="btn btn-primary my-4">Add</a>
    </div>

</section>


@endsection
