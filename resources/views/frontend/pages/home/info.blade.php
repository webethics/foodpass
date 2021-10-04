@extends('frontend.creaters.landing.landing')
@section('pageTitle','Info')
@section('content')

         <div class="container innercontainer">
            <div class="row">
               <div class="col leftsidebarsec profileftsidebar mobsidebar">
                  <div class="sidebar_cont profilesidebar">
                     <div class="userinfo">
                        <div class="userimage">
							@if($user->profile_photo==NULL)
							  <img src="{{asset('frontend/images/userimage.png')}}">
							@else
								
							@php
								$photo =  profile_photo($user->id);
							@endphp
								<img src="{{timthumb($photo,80,80)}}">
							@endif
                           
                        </div>
                        <h4>{{ $user->restaurant_name }}</h4>
                        <a href="{{ $user->website }}">{{ $user->website }}</a>
                        <a href="tel:{{ $user->mobile_number }}">{{ $user->mobile_number }}</a>
                     </div>
                     <ul class="accordion profilelist" id="accordion">
                        <li class="nav-link dropdown-toggle couponlink">
                           <a href="/coupons/{{$user->id}}">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                    <defs>
                                       <style>.a{fill:none;}.b{fill:#0f0f0f;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H22V22H0Z"/>
                                    <path class="b" d="M2,8.778V3.889A.894.894,0,0,1,2.9,3H19.1a.894.894,0,0,1,.9.889V8.778a2.222,2.222,0,1,0,0,4.444v4.889a.894.894,0,0,1-.9.889H2.9a.894.894,0,0,1-.9-.889V13.222A2.222,2.222,0,1,0,2,8.778ZM3.8,7.416a3.978,3.978,0,0,1,0,7.168v2.638H18.2V14.584a3.978,3.978,0,0,1,0-7.168V4.778H3.8Zm4.5.917h5.4v1.778H8.3Zm0,3.556h5.4v1.778H8.3Z" transform="translate(0)"/>
                                 </svg>
                                 Coupons
                              </div>
                           </a>
                        </li>
                        <li class="nav-link dropdown-toggle menukartlink">
                           <a href="/menukaart/{{$user->id}}">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                       <style>.a{fill:none;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H24V24H0Z"/>
                                    <path d="M3,4H21V6H3Zm0,7H21v2H3Zm0,7H21v2H3Z"/>
                                 </svg>
                                 MenuKaart
                              </div>
                           </a>
                        </li>
                        <li class="nav-link dropdown-toggle reviewlink">
                           <a href="#">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                       <style>.a{fill:none;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H24V24H0Z"/>
                                    <path d="M12,18.26,4.947,22.208,6.522,14.28.587,8.792,8.614,7.84,12,.5l3.386,7.34,8.027.952L17.478,14.28l1.575,7.928Zm0-2.292,4.247,2.377L15.3,13.572l3.573-3.305-4.833-.573L12,5.275,9.962,9.695l-4.833.572L8.7,13.572l-.949,4.773Z"/>
                                 </svg>
                                 Reviews
                              </div>
                           </a>
                        </li>
                        <li class="nav-link dropdown-toggle infolink active">
                           <a href="/info/{{$user->id}}">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                       <style>.a{fill:none;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H24V24H0Z"/>
                                    <path d="M12,22A10,10,0,1,1,22,12,10,10,0,0,1,12,22Zm0-2a8,8,0,1,0-8-8A8,8,0,0,0,12,20ZM11,7h2V9H11Zm0,4h2v6H11Z"/>
                                 </svg>
                                 Info
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col rightcontentsec">
                  <section class="storesection innersection profilearea infocontsection">
                     <h2>Info</h2>
                     <div class="row">
                        <div class="col-md-9 infosection_div">
                           <div class="profilerow pt-2">
                              <div class="profileinfo infosection">
                                 <div class="infocont_sec">
                                    <div class="infohdr">
                                       <h3>{{ $user->restaurant_name }}</h3>
                                       <a href="tel:{{ $user->mobile_number }}">{{ $user->mobile_number }}</a>
                                       <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                    </div>
                                    <div class="profilecont infocont">
                                       <div class="row">
                                          <div class="col-md-6 prof_info">
                                             <span>Address</span>
                                             <p>{{ $user->address }}</p>
                                          </div>
                                          <div class="col-md-3 prof_info">
                                             <span>Post Code</span>
                                             <p>{{ $user->post_code }}</p>
                                          </div>
                                          <div class="col-md-3 prof_info">
                                             <span>City</span>
                                             <p>{{ $user->city }}</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="infocont_sec infosocial_links">
                                    <h4>Social Links</h4>
                                    <div class="profilecont infocont">
                                       <div class="row">
                                          <div class="col-md-6 prof_info social_info">
                                             <img src="{{asset('frontend/images/socialicon1.svg')}}" />
                                             <p><span>Website </span><a href="{{ $user->website }}">{{ $user->website }}</a></p>
                                          </div>
                                          <div class="col-md-6 prof_info social_info">
                                             <img src="{{asset('frontend/images/socialicon3.svg')}}" />
                                             <p><span>Instagram </span><a href="{{ $user->instagram }}">{{ $user->instagram }}</a></p>
                                          </div>
                                          <div class="col-md-6 prof_info social_info">
                                             <img src="{{asset('frontend/images/socialicon2.svg')}}" />
                                             <p><span>Facebook </span><a href="{{ $user->facebook }}">{{ $user->facebook }}</a></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                              <!--div class="tablerow" style="margin: 6% 0;">
                                    <div class="tablediv">
                                       <table>
                                          <thead>
                                             <tr>
                                                <th>Range</th>
                                                <th>Delivery Costs</th>
                                                <th>Minimum order amount</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                 <?php //echo "<pre>";print_r($user->storepostcodes);die("here13"); ?>
                                 @if(isset($user->storepostcodes) && !empty($user->storepostcodes) && count($user->storepostcodes) > 0)
                                    
                                    @foreach($user->storepostcodes as $postval)
                                    <tr>
                                                <td>> {{$postval->delivery_range}} km</td>
                                                <td>${{$postval->delivery_cost}}</td>
                                                <td>${{$postval->order_amount}}</td>
                                    </tr>
                                    @endforeach
                                 @else
                                    <tr><td>No Results</td></tr>
                                 @endif
                                          </tbody>
                                       </table>
                                    </div>
                                 </div-->
                                 <div class="tablerow mt-5">
                                    <div class="tablediv">
                                       <table>
                                          <thead>
                                             <tr>
                                                <th width="33%">Range</th>
                                                <th  width="33%">Delivery Costs</th>
                                                <th width="33%" >Minimum order amount</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                 
                                    @if(isset($user->storepostcodes) && !empty($user->storepostcodes) && count($user->storepostcodes) > 0)
                                    @foreach($user->storepostcodes as $postval) 
                                    <tr>
                                                <td>> {{$postval->delivery_range}} km</td>
                                                <td>${{$postval->delivery_cost}}</td>
                                                <td>${{$postval->order_amount}}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr><td>No Results</td></tr>
                                    @endif
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                           </div>
                               
                        </div>
                             
                        <div class="col infosection_div storetiming_sec storetimingcol">
                           <ul class="timingsec" style="height:unset;">
                              <h3>Open/Close times</h3>
							  @if(isset($user->storetimings) && !empty($user->storetimings))
								  <li class="timings opentime"><span class="weakday">Monday</span><span class="weaktimings">{{ $user->storetimings['mon_start'] }} - {{ $user->storetimings['mon_end'] }}</span></li>
								  <li class="timings opentime"><span class="weakday">Tuesday</span><span class="weaktimings">{{ $user->storetimings['tue_start'] }} - {{ $user->storetimings['tue_end'] }}</span></li>
								  <li class="timings opentime"><span class="weakday">Wednesday</span><span class="weaktimings">{{ $user->storetimings['wed_start'] }} - {{ $user->storetimings['wed_end'] }}</span></li>
								  <li class="timings opentime"><span class="weakday">Thursday</span><span class="weaktimings">{{ $user->storetimings['thu_start'] }} - {{ $user->storetimings['thu_end'] }}</span></li>
								  <li class="timings opentime"><span class="weakday">Friday</span><span class="weaktimings">{{ $user->storetimings['fri_start'] }} - {{ $user->storetimings['fri_end'] }}</span></li>
								  <li class="timings opentime"><span class="weakday">Saturday</span><span class="weaktimings">{{ $user->storetimings['sat_start'] }} - {{ $user->storetimings['sat_end'] }}</span></li>
								  <li class="timings closetime"><span class="weakday">Sunday</span><span class="weaktimings">{{ $user->storetimings['sun_start'] }} - {{ $user->storetimings['sun_end'] }}</span></li>
							  @else
								<li class="timings opentime"><span class="weakday">Monday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings opentime"><span class="weakday">Tuesday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings opentime"><span class="weakday">Wednesday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings opentime"><span class="weakday">Thursday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings opentime"><span class="weakday">Friday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings opentime"><span class="weakday">Saturday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings closetime"><span class="weakday">Sunday</span><span class="weaktimings">Closed</span></li>

							  @endif
                              
                           </ul>
                        </div>
                     </div>
               </div>
               </section>
            </div>
         </div>
         </div>
 <script type="text/javascript">
         $(document).on('ready', function() {
         $('.center').slick({
         centerMode: true,
         centerPadding: '0px',
         slidesToShow: 7,
         autoplay: true,
         arrows: true,
         autoplaySpeed: 2000,
         responsive: [
         {
           breakpoint: 1441,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 6
           }
         },
         
         {
           breakpoint: 1281,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 5
           }
         },
         {
           breakpoint: 991,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 4
           }
         },
         
         {
           breakpoint: 575,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 2
           }
         },
            {
           breakpoint: 414,
           settings: {
             arrows: true,
             centerMode: true,
             centerPadding: '0px',
             slidesToShow: 1
           }
         }
         
         ]
         });
         
         });
      </script>
      <script>
         // Selectable
         
         const list1 = document.getElementById("switch1");
         
         const selectable1 = new Selectable({
         filter: list1.children,
         appendTo: list1
         });
         
         const list2 = document.getElementById("switch2");
         
         const selectable2 = new Selectable({
         filter: list2.children,
         appendTo: list2
         });
         
      </script>
      <script>
         $(function() {
         	var Accordion = function(el, multiple) {
         		this.el = el || {};
         		this.multiple = multiple || false;
         
         		// Variables privadas
         		var links = this.el.find('.link');
         		// Evento
         		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
         	}
         
         	Accordion.prototype.dropdown = function(e) {
         		var $el = e.data.el;
         			$this = $(this),
         			$next = $this.next();
         
         		$next.slideToggle();
         		$this.parent().toggleClass('open');
         
         
         	}	
         
         	var accordion = new Accordion($('#accordion'), false);
         });
      </script>
@endsection