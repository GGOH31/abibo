@extends('layout/app_back')

@section('container')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="portlet">
                        <div class="portlet-header portlet-header-bordered">
                            <h3 class="portlet-title">Front</h3>
                            {{-- <button class="btn btn-primary">Primary</button> --}}
                        </div>
                        <div class="portlet-body">
                          @include("layout.alert")
                            <hr>
                            <table id="datatable-1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>valeur</th>
                                        <th>statut</th>
                                      
                                        
                                        {{-- <th>Date de creation</th> --}}
                                        <th>Action</th>

                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fronts as  $front)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $front->name }}</td>
                                            <td>
                                                @if ($front->type==2 )
                                                <img class="beach-img" width="200" src="{{ $front->value }}" alt="" />
                                                @else
                                                {{ $front->value }}
                                                @endif
                                            </td>
                                            <td>{{ $front->statut }}</td>
                                          
                                         
                                         
                                            {{-- <td>{{ $front->created_at }}</td> --}}
                                            <td><button class="btn btn-primary btn-icon" data-toggle="modal" data-target="#modal{{ $front->id }}"><i class="fa fa-edit"></i></button></td>
                                        </tr>
                                        <div class="modal fade" id="modal{{ $front->id }}">
                                            <div class="modal-dialog">
                                                <form method="post" action="{{ url('/front-liste') }}"  enctype="multipart/form-data">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">{{ $front->name }}</h5><button type="button" class="btn btn-label-danger btn-icon" data-dismiss="modal"><i class="fa fa-times"></i></button></div>
                                                        <div class="modal-body">
                                                            <p class="mb-0"> @if ($front->type==2 )
                                                                <img class="beach-img" width="200" src="{{ $front->value }}" alt="" />
                                                                @else
                                                                {{ $front->value }}
                                                                @endif
                                                            </p>
                                                            @csrf
                                                            <div class="form-group"><label for="exampleFormControlInput1">Modifier</label> 
                                                                @if ($front->type==2 )
                                                                <input type="file" name="value"  class="form-control"  placeholder="">

                                                                @else
                                                                <input type="text" name="value" class="form-control"  placeholder="">

                                                                @endif
                                                                <input type="text" name="id" value="{{$front->id }}" hidden  class="form-control"  placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"><button type="submit" class="btn btn-primary mr-2">Modifier</button> <button class="btn btn-outline-danger">Annuler</button></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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