
    <!-- End Header -->
    @extends('layout/app')

    @section('container')

    <div class="site-main">
        <!-- Section Page Title -->
        <div class="section">
            <div class="widget-page-title">
                <div class="widget-background" data-background="assets/img/photo-title.jpg"></div>
                <div class="wrapper-inner">
                    <!-- Title -->
                    {{-- <h5>EXPERIENCE THE FREEDOM</h5> --}}
                    <h1>{{ $fronts[20]->value }}</h1>
                    <p>{{ $fronts[21]->value }}</p>
                    <!-- Title End -->
                    <!-- Breadcrumb -->
                    {{-- <div class="widget-breadcrumb">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">PAGES</a></li>
                            <li>ROOMS PAGE</li>
                        </ul>
                    </div> --}}
                    <!-- Breadcrumb End -->
                </div>
            </div>
        </div>
        <!-- Section Page Title End -->
    
        <!-- Section Rooms -->
        <div class="section">
            <div class="wrapper-inner">
                <!-- Rooms List -->
                <div class="widget-rooms-list">
                    @foreach ($items as $item)
                        <div class="rooms-item">
                            <div class="item-photo">
                                <a href="{{ url('/detail/'.$item->name) }}" data-background="{{ $item->image }}"></a>
                            </div>
                            <div class="item-desc">
                                <h2><a href="{{ url('/detail/'.$item->name) }}">{{ $item->name }}</a></h2>
                                <p>{{ $item->description }}</p>
                                <div class="desc-features">
                                    <ul>
                                        @foreach ($item->getComd as $commode)
                                        <li><i class="fa fa-check"></i> {{ $commode->commod->value }}</li>
                                        @endforeach
                                       
                                        {{-- <li><i class="fa fa-check"></i> WI-FI</li>
                                        <li><i class="fa fa-check"></i> HAIR DRYER</li>
                                        <li><i class="fa fa-check"></i> LCD TV</li>
                                        <li><i class="fa fa-check"></i> SHOWER AND TAB</li>
                                        <li><i class="fa fa-check"></i> SECURITY SYSTEM</li>
                                        <li><i class="fa fa-check"></i> AIR CONDITIONING</li>
                                        <li><i class="fa fa-check"></i> MINI BAR</li>
                                        <li><i class="fa fa-check"></i> TEA AND COFFEE SET</li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="item-price">
                                <div class="price-inner">
                                    <i class="fa fa-star"></i>
                                    <h3>{{ number_format($item->prix)." FCFA" }}</h3>
                                    <h4>{{ number_format($item->old_prix)." FCFA"  }}</h4>
                                    <h5>PAR NUITÉE</h5>
                                    <a href="" class="btn">RESERVER</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
                 
                </div>
                <!-- Rooms List End -->
                <!-- Pager -->
                <div class="widget-pager">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                    </ul>
                </div>
                <!-- Pager End -->
            </div>
        </div>
        <!-- Section Rooms End -->
    </div>

    @endsection


  
