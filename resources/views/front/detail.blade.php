
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
                    <h1>{{ $item->name }}</h1>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices. Nunc et magna velit.</p> --}}
                    <!-- Title End -->
                    <!-- Breadcrumb -->
                    {{-- <div class="widget-breadcrumb">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">PAGES</a></li>
                            <li><a href="#">ROOMS</a></li>
                            <li>SINGLE ROOM</li>
                        </ul>
                    </div> --}}
                    <!-- Breadcrumb End -->
                </div>
            </div>
        </div>
        <!-- Section Page Title End -->
    
        <!-- Section Rooms Detail -->
        <div class="section">
            <div class="wrapper-inner">
                <div class="widget-rooms-detail">
                    <div class="widget-inner">
                        <div class="row">
                            <div class="col-md-8">
                                <!-- Room Slider -->
                                <div class="room-slider">
                                    <div class="room-price">{{ number_format($item->prix).('FCFA') }}<small>PAR NUITÉE</small></div>
                                    <div class="owl-carousel owl-theme owl-type1">

                                        <a href="{{ $item->image }}" data-background="{{ $item->image }}" title="Single Room" class="popup-gallery"></a>
                                            @foreach ($item->imag as $detail )
                                             <a href="{{ $detail->image }}" data-background="{{ $detail->image }}" title="Single Room" class="popup-gallery"></a>
                                                
                                            @endforeach
                             
                                    </div>
                                </div>
                                <!-- Room Slider End -->
                                <!-- Room Thumbnails -->
                                <div class="room-thumbnails">
                                    <div class="owl-carousel">
                                        <a href="{{ $item->image }}" data-background="{{ $item->image }}" title="Single Room"></a>
                                        @foreach ($item->imag as $detail )
                                        <a href="{{ $detail->image }}" data-background="{{ $detail->image }}" title="Single Room"></a>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Room Thumbnails End -->
                                <!-- Room Description -->
                                <div class="room-desc">
                                    <h5> DESCRIPTION</h5>
                                    <p>{{ $item->description }}</p>
                                    {{-- <p>Vivamus pharetra tortor et congue gravida. Cras erat libero, malesuada in lorem vel, fringilla finibus diam. Morbi sollicitudin placerat placerat. Nullam euismod cursus mattis. Donec sit amet imperdiet sem, vel molestie purus. Duis blandit pharetra ligula ac sodales. Quisque velit massa, congue quis dignissim id, ornare sed arcu.Phasellus id velit iaculis, vulputate magna in, feugiat felis. Nulla eu ligula quis ante venenatis dapibus. Nulla ut congue est. Maecenas diam felis, volutpat vel orci quis, sodales malesuada lectus. Sed id feugiat turpis. Quisque ac turpis id nibh varius pellentesque vitae vitae lacus.</p> --}}
                                </div>
                                <!-- Room Description End -->
                            </div>
                            <div class="col-md-4">
                                <!-- Room Booking -->
                                <div class="room-booking">
                                    {{-- <h5>BOOKING</h5> --}}
                                    <h2>{{ $item->name }}</h2>
                                    <div class="data-form">
                                        <form id="reservationForm">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <i class="fa fa-calendar-plus-o"></i>
                                                    <input type="text" name="date_debut" placeholder="ARRIVÉ" class="datepicker" required="">
                                                </div>
                                            </div>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <i class="fa fa-calendar-plus-o"></i>
                                                    <input type="text" name="date_fin" placeholder="DÉPART" class="datepicker" required="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <i class="fa fa-user"></i>
                                                    <input type="text" name="name" placeholder="Nom complet"  required="">
                                                    <input type="text" name="item_id" hidden value="{{ $item->id }}" placeholder="Nom complet"  required="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <i class="fa fa-phone" ></i>
                                                    <input type="text" name="contact"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" placeholder="Contact"  required="">
                                             
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <i class="fa fa-fw fa-at" ></i>
                                                    <input type="text" name="email"  placeholder="EMAIL"  required="">
                                             
                                                </div>
                                            </div>
                                           
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit"id="submit-reservat" class="btn">RESERVER</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Room Booking End -->
                                <!-- Room Features -->
                                <div class="room-features">
                                    {{-- <h5>FEATURES</h5> --}}
                                    <h2>Commodités</h2>
                                    <ul>
                                        @foreach ($item->getComd as $commode)
                                        <li><i class="fa fa-check"></i> {{ $commode->commod->value }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Room Features End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section Rooms Detail End -->
    </div>
    @endsection

    <script src="{{ asset("assets/js/jquery.min.js") }}"></script>

    <script>
        $(document).ready(function(){



    

    
        $('#submit-reservat').click(function (e) {
                //  alert($('#contrat').prop('files'));
                e.preventDefault()
              
    
    
    
                let formData = new FormData($('#reservationForm')[0]);
               
    
               
                var div = document.createElement('div');
                var img = document.createElement('img');
                img.src = '{{url('/assets/img/loading.gif')}}';
                img.style.cssText='width:100px;heigth:100px';
                div.innerHTML = "Patientez svp...<br />";
                div.style.cssText = 'position: fixed; padding-top: 300px; top: 0; z-index: 5000; width: 100%; height:100%; text-align: center; background: rgba(255,255,255,0.8);';
                // div.id='loader';
                // $('#loader').html('<lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl"></lord-icon>');
                // div.appendChild(' ');
                 div.appendChild(img);
                document.body.appendChild(div);
                $(this).prop('readonly', true)
    
                let base = "{{\Illuminate\Support\Facades\URL::to('/').'/'}}"
                let url = 'accueil';
                setTimeout($.ajax(
                    {
                        url: "{{url('reserver')}}",
                        method: 'POST',
                        processData: false,
                        contentType: false,
                        data: formData,
                        success: function (rep) {
                        console.log(rep);
    
                        document.body.removeChild(div)
                            if(rep.statut === "200" || rep.statut === 200){
                                // document.body.removeChild(div)
                              
                                $('#carteForm').trigger("reset");
                               
                                Swal.fire(
                                'Good!',
                                rep.message,
                                'success'
                                ).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    } 
                                    })
                                
                            }else{
                                // document.body.removeChild(div)
                                Swal.fire(
                                    'Erreur!!!',
                                    rep.message,
                                    'error'
                                    )
                                }
                        },
                        statusCode: {
                            500: function() {
                                document.body.removeChild(div)
                            }
                        },
                        error: function (rep) {
                            // consolo.log(rep)
                            document.body.removeChild(div)
                        }
                    }
                ), 10000);
            });






        });
  </script>


  
