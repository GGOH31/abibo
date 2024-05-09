
    <!-- End Header -->
    @extends('layout/app')

    @section('container')

  
   
    <div class="site-main">
      <!-- Section Slider -->
      <div class="section">
          <div class="widget-slider">
              <div class="wrapper-full">
                  <!-- Slider Carousel -->
                  <div class="widget-carousel owl-carousel owl-theme">
                      <div class="slider-item" data-background="{{ $fronts[9]->value }}">
                          <div class="wrapper">
                              <div class="item-inner">
                                  <h5>{{ $fronts[0]->value }}</h5>
                                  <h1>{{ $fronts[2]->value }}</h1>
                                  <h2>{{ $fronts[1]->value }}</h2>
                              </div>
                          </div>
                      </div>
                      <div class="slider-item" data-background="{{ $fronts[10]->value }}">
                          <div class="wrapper">
                              <div class="item-inner">
                                  <h5>{{ $fronts[4]->value }}</h5>
                                  <h1>{{ $fronts[3]->value }}</h1>
                                  <h2>{{ $fronts[5]->value }}</h2>
                              </div>
                          </div>
                      </div>
                      <div class="slider-item" data-background="{{ $fronts[11]->value }}">
                          <div class="wrapper">
                              <div class="item-inner">
                                  <h5>{{ $fronts[8]->value }}</h5>
                                  <h1>{{ $fronts[7]->value }}</h1>
                                  <h2>{{ $fronts[6]->value }}</h2>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Slider Carousel End -->
                  <!-- Slider Booking -->
                  <div class="slider-booking">
                      <div class="wrapper">
                          <h5>Reserve ton séjour chez nous</h5>
                          <form id="reservationForm">
                              <ul>
                                  <li>
                                      <i class="fa fa-calendar-plus-o"></i>
                                      <input type="text" name="date_debut" placeholder="Arriver" class="datepicker" required="">
                                  </li>
                                  @csrf
                                  <li>
                                      <i class="fa fa-calendar-plus-o"></i>
                                      <input type="text" name="date_fin" placeholder="Départ" class="datepicker" required="">
                                  </li>
                               
                                  <li>
                                    <i class="fa fa-phone" ></i>
                                    <input type="text" name="contact"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" placeholder="Contact"  required="">
                                  </li>
                                  <li>
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="name" placeholder="Nom complet"  required="">
                                  </li>
                                  <li>
                                      <button type="submit" id="submit-reservat" class="btn">Reserver</button>
                                  </li>
                              </ul>
                          </form>
                      </div>
                  </div>
                  <!-- Slider Booking End -->
              </div>
          </div>
      </div>
      <!-- Section Slider End -->

      <!-- Section Rooms -->
      <div class="section" >
          <div class="widget-rooms-carousel top-over">
              <div class="wrapper-inner">
                  <!-- Rooms Title -->
                  <div class="widget-title">
                      <h5>OUR ROOMS</h5>
                      <h2>Experience The Freedom</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                  </div>
                  <!-- Rooms Title End -->
                  <!-- Rooms Carousel -->
                  <div class="widget-carousel owl-carousel owl-theme">
                    @foreach ($items as $item)
                        <div class="rooms-item">
                          <div class="item-inner">
                              <div class="item-photo">
                                  <a href="rooms-detail.html" data-background="{{ $item->image }}"></a>
                              </div>
                              <div class="item-desc">
                                  <h2><a href="rooms-detail.html">{{ $item->name }}</a></h2>
                                  <h3>{{ number_format($item->prix) }}</h3>
                                  <p>{{ $item->description }}</p>
                                  <i class="fa fa-star"></i>
                              </div>
                          </div>
                       </div>
                    @endforeach
                     
                     
                  </div>
                  <!-- Rooms Carousel End -->
              </div>
          </div>
      </div>
      <!-- Section Rooms End -->

      <!-- Section About Promo -->
      <div class="section" id="about">
          <div class="widget-about-promo" data-background="{{ $fronts[15]->value }}">
              <div class="wrapper-inner">
                  <div class="widget-inner">
                      <div class="row">
                          <div class="col-md-6">
                              {{-- <h5>ABOUT THE GRANDIUM</h5> --}}
                              <h2>{{ $fronts[12]->value }}</h2>
                              <p>{{ $fronts[13]->value }}</p>
                              <p>{{ $fronts[14]->value }}</p>
                              {{-- <a href="aboutus.html" class="btn">LEARN MORE</a> --}}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Section About Promo End -->

      <!-- Section Features -->
      <div class="section" id="even">
          <div class="widget-features-grid">
              <div class="wrapper-inner">
                  <!-- Features Title -->
                  <div class="widget-title">
                      {{-- <h5>OUR FACILITIES</h5> --}}
                      <h2>{{ $fronts[16]->value}}</h2>
                      <p>{{ $fronts[17]->value}}</p>
                  </div>
                  <!-- Features Title End -->
                  <!-- Features Content -->
                  <div class="widget-inner">
                      <div class="row">
                        @foreach ($enevs as $enev)
                            <div class="col-lg-4 col-sm-6">
                                <div class="features-item" data-background="{{ $enev->image }}">
                                    <a href="#">
                                        <h3>{{ $enev->name }}</h3>
                                        <p>{{ $enev->description }}</p>
                                    </a>
                                </div>
                            </div>
                      
                        @endforeach
                          
                      </div>
                  </div>
                  <!-- Features Content End -->
              </div>
          </div>
      </div>
      <!-- Section Features End -->

      <!-- Section Gallery -->
      <div class="section" id="galerie">
          <div class="widget-gallery-carousel ">
              <div class="wrapper-full-inner">
                  <!-- Gallery Title -->
                  <div class="widget-title">
                      {{-- <h5>GALLERY</h5> --}}
                      <h2>{{ $fronts[18]->value }}</h2>
                      <p>{{ $fronts[19]->value }}</p>
                  </div>
                  <!-- Gallery Title End -->
                  <!-- Gallery Carousel -->
                  <div class="widget-carousel owl-carousel owl-theme">
                    @foreach ($galeries as $galerie)
                        <div class="gallery-item">
                          <a href="{{ $galerie->image }}" data-background="{{ $galerie->image }}" title="{{ $galerie->name }}" class="popup-gallery">
                              <span class="item-text">{{ $galerie->name }}</span>
                          </a>
                        </div>
                    @endforeach
                     

                    
                  </div>
                  <!-- Gallery Carousel End -->
              </div>
          </div>
      </div>
      <!-- Section Gallery End -->

      <!-- Section Video -->
      {{-- <div class="section">
          <div class="widget-video-full" data-background="assets/img/thumb-video-full.jpg">
              <div class="wrapper-full-inner">
                  <!-- Video Title -->
                  <div class="widget-title">
                      <h5>OVERVIEW</h5>
                      <h2>Video Tour</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci. Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem.</p>
                  </div>
                  <!-- Video Title End -->
                  <!-- Video Content -->
                  <div class="widget-inner">
                      <a href="https://vimeo.com/39493181" class="video-play popup-video"><i class="fa fa-play"></i></a>
                  </div>
                  <!-- Video Content End -->
              </div>
          </div>
      </div> --}}
      <!-- Section Video End -->

 
      <!-- Section Testimonials End -->
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


  
