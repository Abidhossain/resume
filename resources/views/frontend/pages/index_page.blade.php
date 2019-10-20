@extends('frontend.front-master')
@section('title','Portflio')
@section('custom_css')
<style type="text/css">
  .mobile_image{
    height: 200px!important;
  }
</style>
@endsection
@section('about_section')

            <section class="pt-page pt-page-1" data-id="about_me">
              <div class="section-title-block">
                <h2 class="section-title">About Me</h2>
                <h5 class="section-description">Artist, Thinker, Creative Doer</h5>
              </div>

              <div class="row">
                <div class="col-sm-12 col-md-12 mobile-visible subpage-block">
                  <div class="my-photo-small">
                   @php  $image = DB::table('basic_infos')->select('user_photo')->first(); @endphp
                    <img class="mobile_image" src="{{$image->user_photo}}" alt="image">
                  </div>
                </div>
                <?php  
                   $about = DB::table('abouts')->first();
                ?>
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="general-info">
                    <h3>{{$about->about_title}}</h3>
                    <p class="text-justify">{{$about->about_description}}</p>
                  </div>
                </div> 
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Testimonials</h3>
                  </div>
                  <div class="testimonials owl-carousel">

                <?php  
                   $testimonials_info = DB::table('testimonials')->get();
                ?>
                @foreach($testimonials_info as $testimonials)
                    <!-- Testimonial 1 -->
                    <div class="testimonial-item">
                      <!-- Testimonial Content -->

                      <div class="testimonial-content">
                        <div class="testimonial-text">
                          <p>"{{$testimonials->testimonial_brief}}"</p>
                        </div>
                      </div>            
                      <!-- /Testimonial Content -->  
                      <!-- Testimonial Author -->
                      <div class="testimonial-credits">
                        <!-- Picture -->
                        <div class="testimonial-picture">
                          <img src="{{$testimonials->testimonial_photo}}" alt="">
                        </div>              
                        <!-- /Picture -->
                        <!-- Testimonial author information -->
                        <div class="testimonial-author-info">
                          <p class="testimonial-author">{{$testimonials->testimonial_name}}</p>
                          <p class="testimonial-firm">{{$testimonials->testimonial_occopation}}</p>
                        </div>
                      </div>
                      <!-- /Testimonial author information -->               
                    </div>
                    @endforeach
                    <!-- End of Testimonial 1 --> 
                  </div>
                </div>
              </div>

              <!-- Services block -->
              <div class="block-title">
                <h3>Services</h3>
              </div>

                <?php  
                   $services_info = DB::table('services')->get();
                ?>
              <div class="row">
                @foreach($services_info as $services)
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="{{$services->service_photo}}" alt="{{$services->service_title}}" title="{{$services->service_title}}">
                      <h4>{{$services->service_name}}</h4>
                      <p>{{$services->service_description}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
 
              </div>
              <!-- End of Services block -->

              <!-- Clients block -->
             
              <!-- End of Fun fucts block -->
            </section>
@endsection

@section('resume_section')
 <section class="pt-page pt-page-2" data-id="resume">
              <div class="section-title-block">
                <h2 class="section-title">Resume</h2>
                <h5 class="section-description">6 Years of Experience</h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Education</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2012</h5>
                      <h4 class="event-name">Junior School Certificate (J.S.C)</h4>
                      <span class="event-description">Mohim Institution Faridpur</span>
                      <p>I have completed my Junior School Certificate (J.S.C.)  from Mohim Institution and I got 4.17 out of 5.00</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2014</h5>
                      <h4 class="event-name">Secondery School Certificate (S.S.C.)</h4>
                      <span class="event-description">Mohim Institution Faridpur</span>
                      <p>I have completed my Secondery School Certificate (S.S.C.) from Mohim Institution and I got 4.31 out of 5.00</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2018</h5>
                      <h4 class="event-name">Diploma In Engineering</h4>
                      <span class="event-description">Faridpur Polytechnic Institute</span>
                      <p>I have completed my Diploma In Computer Science from Faridpur Polytechnic Institute and I got 3.36 out of 4.00</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Experience</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Jan 2017 -Dec 2017 </h5>
                      <h4 class="event-name">Frontend-developer</h4>
                      <span class="event-description">Icon Bangla Training Center</span>
                      <p>I worked there as a web designer .</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Jan 2017 -Dec 2017 </h5>
                      <h4 class="event-name">Laravel Developer</h4>
                      <span class="event-description">Icon Bangla Finance</span>
                      <p>I worked there as a Laravel Developer and Web Designer.</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Jan 2018 - Current</h5>
                      <h4 class="event-name">Backend Developer</h4>
                      <span class="event-description">Smart Software Ltd.</span>
                      <p>I am now working as a Web Developer</p>
                    </div> 
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Design Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>Web Design</h4>                               
                    <div class="skill-container">
                      <div class="skill-percentage skill-1"></div>
                    </div> 
                    <h4>HTML5</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-4"></div>
                    </div> 
                    <h4>CSS3</h4>                               
                    <div class="skill-container">
                      <div class="skill-percentage skill-3"></div>
                    </div>
                  </div>

                  <div class="block-title">
                    <h3>Coding Skills</h3>
                  </div>
                  <div class="skills-info">

                    <h4>PHP</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-3"></div>
                    </div>

                    <h4>Laravel</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-6"></div>
                    </div>

                    <h4>jQuery</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-3"></div>
                    </div> 
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="download-cv-block">
                    <a class="button" target="_blank" href="{{url('resume/pdf')}}">Download CV</a> 
                  </div>
                </div>
              </div>
            </section>
@endsection
@section('portfolio_section')

            <section class="pt-page pt-page-3" data-id="portfolio">
              <div class="section-title-block">
                <h2 class="section-title">Portfolio</h2>
                <h5 class="section-description">My Best Works</h5>
              </div>

              <!-- Portfolio Content -->
              <div class="portfolio-content">
                            
                <!-- Portfolio filter -->
                <ul id="portfolio_filters" class="portfolio-filters">
                  <li class="active">
                    <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="media">Media</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="illustration">Illustration</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="video">Video</a>
                  </li>
                </ul>
                <!-- End of Portfolio filter -->

                <!-- Portfolio Grid -->
                <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                <?php  
                   $project_info = DB::table('projects')->get();
                ?>

                @foreach($project_info as $projects)
                  <!-- Portfolio Item 1 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a class="ajax-page-load" href="portfolio-1.html">
                      <img src="{{$projects->project_photo}}" alt="">
                      <div>
                        <h5 class="name">{{$projects->project_name}}</h5>
                        <small>{{$projects->technical_skills}}</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 1 -->
                  @endforeach
                
                </div>
                <!-- /Portfolio Grid -->

              </div>
              <!-- /Portfolio Content -->

            </section>
@endsection 
@section('contact_section')

            <section class="pt-page pt-page-5" data-id="contact">
              <div class="section-title-block">
                <h2 class="section-title">Contact</h2>
                <h5 class="section-description">Get in Touch</h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Get in Touch</h3>
                  </div>
                  <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.</p>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-map-marker"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Faridpur, Bangladesh </h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-mail"></i>
                    </div>
                    <div class="ci-text">
                      <h5>abidhossain835428@gmail.com</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-call"></i>
                    </div>
                    <div class="ci-text">
                      <h5>+01783859296</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-check"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Freelance Available</h5>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Contact Form</h3>
                  </div>
                  <form id="insert_form">
                    @csrf
                    <div class="messages"></div>

                    <div class="controls">
                      <div class="form-group">
                          <input id="name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-user"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <input id="email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-envelope"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <textarea id="message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-comment"></i>
                          <div class="help-block with-errors"></div>
                      </div>
                      
                      <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-callback="correctCaptcha"></div>

                      <input type="submit" class="button btn-send" value="Send message">
                    </div>
                  </form>
                </div>
              </div>
            </section>
@endsection
@section('custom_script')
<script>

   $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });
   
  /*====================Insert data by ajax=======================*/
   
   $('#insert_form').on('submit',function(e){
       e.preventDefault();
       var data = $(this).serialize();
       $.ajax({
           url : "{{url('contact-message')}}",
           method: 'post',
           data: data,
           dataTpye: 'json',
           success:function(data){  
             Swal.fire({
               position: 'top-end',
               type: 'success',
               title: 'Successfully Subscribed !!',
               showConfirmButton: false,
               timer: 1500
             });
             $('#name').val("");
             $('#email').val("");  
             $('#message').val("");   
           },error:function (response) { 
            console.log(response);
             swal('Error','Opps Something Wrong !!','error');
           }
       })
   });  
   
</script>
@endsection