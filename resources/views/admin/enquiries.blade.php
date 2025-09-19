@extends('admin.layout.index')
@section('content')
<div class="pagetitle">
      <h1>Enquiry List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
         <li class="breadcrumb-item active">Enquiry List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Enquiry List</h5>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th>Ext.</th>
                    <th>City</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                    <th>Completion</th>
                  </tr>
                </thead>
                <tbody>
                 
                  
                  <tr>
                    <td>Alisa Horn</td>
                    <td>9853</td>
                    <td>Ucluelet</td>
                    <td>2007/01/11</td>
                    <td>39%</td>
                  </tr>
                  <tr>
                    <td>Zelenia Roman</td>
                    <td>7516</td>
                    <td>Redwater</td>
                    <td>2012/03/03</td>
                    <td>31%</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
@endsection