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
                                        <th>Contact</th>
                                        <th>Date arrivée</th>
                                        <th>Date départ</th>
                                        <th>Chambre</th>
                                        <th>Date de creation</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as  $reservation)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $reservation->name }}</td>
                                            <td>{{ $reservation->tel }}</td>
                                            <td>{{ $reservation->date_debut }}</td>
                                            <td>{{ $reservation->date_fin }}</td>
                                            <td>61</td>
                                            <td>{{ $reservation->created_at }}</td>
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