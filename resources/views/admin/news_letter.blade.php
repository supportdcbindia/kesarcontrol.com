@extends('admin.layout.index')
@section('content')
<div class="pagetitle">
      <h1>Subscribe List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
         <li class="breadcrumb-item active">Subscribe List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Subscribe List</h5>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Sr.No </th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($objNewsLetter as $key=> $letter)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$letter->email}}</td>
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