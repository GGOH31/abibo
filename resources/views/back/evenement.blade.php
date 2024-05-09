@extends('layout/app_back')

@section('container')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">Reservation</h3>
                        </div>
                        <div class="portlet-body">
                          
                            <hr>
                            <table id="datatable-1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>description</th>
                                        <th>image</th>
                                        
                                        <th>Date de creation</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as  $event)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $event->name }}</td>
                                            <td>{{ $event->description }}</td>
                                            <td>
                                                <img class="beach-img" width="200" src="{{ $event->image }}" alt="" /></td>
                                          
                                            <td>{{ $event->created_at }}</td>
                                            {{-- <td>$320,800</td> --}}
                                        </tr>
                                    @endforeach
                                   
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection