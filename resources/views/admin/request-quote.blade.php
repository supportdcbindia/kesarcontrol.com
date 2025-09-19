@extends('admin.layout.index')
@section('content')
<div class="pagetitle">
      <h1>Request Quote List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
         <li class="breadcrumb-item active">Request Quote List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Request Quote List</h5>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Sr.No.</th>
                    <th>Name </th>
                    <th>Email</th>
                    <th>Country</th>

                    <th>Location</th>
                    <th>Phone Number</th>
                    <th>Requirement</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($requestQuotes as $request)
                        <tr>
                          <th>{{$key+1}}</th>
                          <td>{{$request->name}}</td>
                          <td>{{$request->email}}</td>
                          <td>{{$request->country}}</td>
                          <td>{{$request->location}}</td>
                          <td>{{$request->phone_number}}</td>
                          <td>{{$request->requirement}}</td>
                        </tr>
                    @endforeach
                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
@endsection