@extends('frontend.creaters.landing.landing')
@section('pageTitle','FAQ')
@section('content')

<main class="site-content">
         <section class="innerbannersection faqbannersection">
            <div class="container">
               <div class="innerbanner_cont">
                  <h2 class="wow fadeInUp" data-wow-duration="1500ms">FAQ</h2>
               </div>
            </div>
         </section>
         <section class="innercontent faqcont">
            <div class="container p-0 faqcontainer">
               <div class="row">
                  <div class="col-md-4 faqleftsec">
                     <img src="{{asset('frontend/images/faqimage.png')}}" class="img-fluid" />
                     <ul class="nav nav-tabs">
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#tab1">Coupons</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#tab2">Restaurants</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab" href="#tab3">Memberships</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#tab4">Coupons</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#tab5">Restaurants</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#tab6">Memberships</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-8 faqrightsec">
                     <!-- Tab panes -->
                     <div class="tab-content faq-content">
                        <div class="tab-pane container faq-tabcontent fade" id="tab1">
                           <div id="accordion">
                              <div class="card">
                                 <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#tab1collapseOne">
                                    What is Foodpass?
                                    </a>
                                 </div>
                                 <div id="tab1collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab1collapseTwo">
                                    How do I contact your Customer Support team?
                                    </a>
                                 </div>
                                 <div id="tab1collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab1collapseThree">
                                    Can I use coupons along with Cashback?
                                    </a>
                                 </div>
                                 <div id="tab1collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab1collapseFour">
                                    Payments of Rewards?
                                    </a>
                                 </div>
                                 <div id="tab1collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab1collapseFive">
                                    How long after my transaction will I actually get my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab1collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab1collapseSix">
                                    How do I request payment of my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab1collapseSix" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane container faq-tabcontent fade" id="tab2">
                           <div id="accordion1">
                              <div class="card">
                                 <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#tab2collapseOne">
                                    What is Foodpass?
                                    </a>
                                 </div>
                                 <div id="tab2collapseOne" class="collapse show" data-parent="#accordion1">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab2collapseTwo">
                                    How do I contact your Customer Support team?
                                    </a>
                                 </div>
                                 <div id="tab2collapseTwo" class="collapse" data-parent="#accordion1">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab2collapseThree">
                                    Can I use coupons along with Cashback?
                                    </a>
                                 </div>
                                 <div id="tab2collapseThree" class="collapse" data-parent="#accordion1">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab2collapseFour">
                                    Payments of Rewards?
                                    </a>
                                 </div>
                                 <div id="tab2collapseFour" class="collapse" data-parent="#accordion1">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab2collapseFive">
                                    How long after my transaction will I actually get my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab2collapseFive" class="collapse" data-parent="#accordion1">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab2collapseSix">
                                    How do I request payment of my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab2collapseSix" class="collapse" data-parent="#accordion1">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane container faq-tabcontent active" id="tab3">
                           <div id="accordion2">
                              <div class="card">
                                 <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#tab3collapseOne">
                                    What is Foodpass?
                                    </a>
                                 </div>
                                 <div id="tab3collapseOne" class="collapse show" data-parent="#accordion2">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab3collapseTwo">
                                    How do I contact your Customer Support team?
                                    </a>
                                 </div>
                                 <div id="tab3collapseTwo" class="collapse" data-parent="#accordion2">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab3collapseThree">
                                    Can I use coupons along with Cashback?
                                    </a>
                                 </div>
                                 <div id="tab3collapseThree" class="collapse" data-parent="#accordion2">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab3collapseFour">
                                    Payments of Rewards?
                                    </a>
                                 </div>
                                 <div id="tab3collapseFour" class="collapse" data-parent="#accordion2">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab3collapseFive">
                                    How long after my transaction will I actually get my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab3collapseFive" class="collapse" data-parent="#accordion2">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab3collapseSix">
                                    How do I request payment of my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab3collapseSix" class="collapse" data-parent="#accordion2">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane container faq-tabcontent fade" id="tab4">
                           <div id="accordion3">
                              <div class="card">
                                 <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#tab4collapseOne">
                                    What is Foodpass?
                                    </a>
                                 </div>
                                 <div id="tab4collapseOne" class="collapse show" data-parent="#accordion3">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab4collapseTwo">
                                    How do I contact your Customer Support team?
                                    </a>
                                 </div>
                                 <div id="tab4collapseTwo" class="collapse" data-parent="#accordion3">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab4collapseThree">
                                    Can I use coupons along with Cashback?
                                    </a>
                                 </div>
                                 <div id="tab4collapseThree" class="collapse" data-parent="#accordion3">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab4collapseFour">
                                    Payments of Rewards?
                                    </a>
                                 </div>
                                 <div id="tab4collapseFour" class="collapse" data-parent="#accordion3">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab4collapseFive">
                                    How long after my transaction will I actually get my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab4collapseFive" class="collapse" data-parent="#accordion3">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab4collapseSix">
                                    How do I request payment of my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab4collapseSix" class="collapse" data-parent="#accordion3">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane container faq-tabcontent fade" id="tab5">
                           <div id="accordion4">
                              <div class="card">
                                 <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#tab5collapseOne">
                                    What is Foodpass?
                                    </a>
                                 </div>
                                 <div id="tab5collapseOne" class="collapse show" data-parent="#accordion4">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab5collapseTwo">
                                    How do I contact your Customer Support team?
                                    </a>
                                 </div>
                                 <div id="tab5collapseTwo" class="collapse" data-parent="#accordion4">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab5collapseThree">
                                    Can I use coupons along with Cashback?
                                    </a>
                                 </div>
                                 <div id="tab5collapseThree" class="collapse" data-parent="#accordion4">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab5collapseFour">
                                    Payments of Rewards?
                                    </a>
                                 </div>
                                 <div id="tab5collapseFour" class="collapse" data-parent="#accordion4">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab5collapseFive">
                                    How long after my transaction will I actually get my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab5collapseFive" class="collapse" data-parent="#accordion4">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab5collapseSix">
                                    How do I request payment of my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab5collapseSix" class="collapse" data-parent="#accordion4">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane container faq-tabcontent fade" id="tab6">
                           <div id="accordion5">
                              <div class="card">
                                 <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#tab6collapseOne">
                                    What is Foodpass?
                                    </a>
                                 </div>
                                 <div id="tab6collapseOne" class="collapse show" data-parent="#accordion5">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab6collapseTwo">
                                    How do I contact your Customer Support team?
                                    </a>
                                 </div>
                                 <div id="tab6collapseTwo" class="collapse" data-parent="#accordion5">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab6collapseThree">
                                    Can I use coupons along with Cashback?
                                    </a>
                                 </div>
                                 <div id="tab6collapseThree" class="collapse" data-parent="#accordion5">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab6collapseFour">
                                    Payments of Rewards?
                                    </a>
                                 </div>
                                 <div id="tab6collapseFour" class="collapse" data-parent="#accordion5">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab6collapseFive">
                                    How long after my transaction will I actually get my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab6collapseFive" class="collapse" data-parent="#accordion5">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                              <div class="card">
                                 <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#tab6collapseSix">
                                    How do I request payment of my Cashback?
                                    </a>
                                 </div>
                                 <div id="tab6collapseSix" class="collapse" data-parent="#accordion5">
                                    <div class="card-body">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
@endsection