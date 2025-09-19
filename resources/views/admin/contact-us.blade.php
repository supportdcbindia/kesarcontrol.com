@extends('admin.layout.index')
@section('content')
<div class="pagetitle">
      <h1>Contact List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
         <li class="breadcrumb-item active">Contact List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Contact List</h5>
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
                 
                      @foreach($contacts as $key=>$contact)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$contact->name}}</td>
                          <td>{{$contact->email}}</td>
                          <td>{{$contact->country}}</td>
                          <td>{{$contact->location}}</td>
                          <td>{{$contact->phone_number}}</td>
                          <td>{{$contact->requirement}}</td>
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