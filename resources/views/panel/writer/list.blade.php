@extends('panel.layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Writer List</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">
        <div class="col lg-12">
          <a href="{{url('panel/writer/add')}}" class="btn btn-primary bx-pull-right mb-3">Add New Writer</a>
        </div>
      </div>
    <div class="row">
        <div class="col-lg-12">
            @include('_message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Writer List</h5>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        @if (count($getRecord) > 0)
                        <thead>
                            <tr>
                                <th scope="col">Serial</th>
                                <th scope="col">Writer Name</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i =1; @endphp
                            @foreach($getRecord as $value)
                            <tr>
                                <td>@php echo $i++; @endphp</td>
                                <td>{{$value->name}}</td>
                                <td>
                                    @if (!empty($value->photo))
                                    <img src="{{asset('assets/upload/writer/'.$value->photo)}}" alt="Profile" class="upload-img-size">
                                    @else
                                    <img src="{{asset('assets/upload/no_logo.jpg')}}" alt="Profile" class="upload-img-size">
                                    @endif
                                </td>
                                <td>{{$value->email}}</td>
                                <td>
                                    <a href="{{ url('panel/writer/details/'.$value->id) }}" class="btn btn-info btn-sm">Details</a>
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                        @else
                        <div class="no-data mt-5 mb-5">
                            <h2>No Writer available</h2>
                        </div>
                        @endif
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
    </div>
</section>
@endsection