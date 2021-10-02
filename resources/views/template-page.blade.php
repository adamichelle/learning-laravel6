@extends ('layout1')

@section('content')

<div class="container">
        <section class="col-md-12 content" id="home">
           <div class="col-lg-6 col-md-6 content-item tm-black-translucent-bg tm-logo-box">
              <i class="fa fa-snowflake-o fa-4x tm-logo"></i>
              <h1 class="text-uppercase">Catalyst</h1>
               
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background tm-white-translucent-bg">
               <h2 class="main-title text-center dark-blue-text">.01 Welcome</h2>
               <p>Sed tempus, quam vitae lobortis vulputate, sapien nisi ultricies metus, in eleifend ipsum mauris eget magna. Nullam massa nisi, pellentesque eu pretium quis, pulvinar a nulla. Sed tempus finibus lacus, vestibulum condimentum nibh blandit vel.</p>               
           </div>
       </section>

       <section class="col-md-12 content padding tm-equal-col-container" id="services">
        <div class="col-lg-6 col-md-6 col-sm-12 content-item tm-black-translucent-bg tm-services-section-padding">
          <h2 class="main-title text-center dark-blue-text">.02 Mauris viverra</h2>
           <p>Morbi vestibulum convallis dui, in tristique neque malesuada eleifend. Sed tempus, quam vitae lobortis vulputate, sapien nisi ultricies metus, in eleifend ipsum mauris eget magna.</p>
           <p>In dapibus blandit congue. Sed quam nulla, pellentesque eget metus eu, sollicitudin sodales nisl. Integer tempus id lectus quis cursus.</p>
           <button type="button" class="btn btn-big pull-right tm-btn-primary">Read More</button>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-12 tm-white-translucent-bg tm-services-section-padding tm-box-center">

          <div class="tm-left-col">
            <div class="tm-border-box tm-gray-border-br tm-img-box-1">
              <img src="images/tm-img-1.jpg" alt="Image 1" class="tm-img tm-img-tl">  
             </div>  
             <div class="tm-border-box tm-pink-border-bl tm-img-box-2">
              <img src="images/tm-img-3.jpg" alt="Image 3" class="tm-img tm-img-bl">  
            </div> 
               
          </div>

          <div class="tm-right-col">
             <div class="tm-border-box tm-pink-border-tr tm-img-box-3">  
              <img src="images/tm-img-2.jpg" alt="Image 2" class="tm-img tm-img-tr">  
             </div>
            <div class="tm-border-box tm-gray-border-tl tm-img-box-4">
              <img src="images/tm-img-4.jpg" alt="Image 4" class="tm-img tm-img-br">  
            </div>  
          </div>
                      
       </div>

      </section>

      <section class="col-md-12 content padding tm-float-section tm-section-3">

      <div class="col-lg-6 col-md-6 content-item tm-black-translucent-bg"></div>
      <div class="col-lg-6 col-md-6 content-item tm-white-translucent-bg"></div>
      
      <div class="tm-float-section-header">
        <h2 class="text-center tm-white-text tm-section-3-header">.03 Morbi vehicula suscipit</h2>  
      </div>

      <div class="tm-float-section-body tm-white-bg">
        <div class="col-lg-12">
          <div class="col-md-4 col-lg-4">
            <i class="fa fa-commenting-o fa-4x tm-fa-icon"></i>
            <p>Curabitur ornare pulvinar sapien, accumsan malesuada mauris ultricies non. Sed id tempor arcu. Pellentesque tortor sapien, molestie at purus vitae, blandit pretium dolor.</p>
          </div>
          <div class="col-md-4 col-lg-4">
            <i class="fa fa-code fa-4x tm-fa-icon"></i>
            <p>Curabitur ornare pulvinar sapien, accumsan malesuada mauris ultricies non. Sed id tempor arcu. Pellentesque tortor sapien, molestie at purus vitae, blandit pretium dolor.</p>
          </div>
          <div class="col-md-4 col-lg-4">
            <i class="fa fa-inbox fa-4x tm-fa-icon"></i>
            <p>Curabitur ornare pulvinar sapien, accumsan malesuada mauris ultricies non. Sed id tempor arcu. Pellentesque tortor sapien, molestie at purus vitae, blandit pretium dolor.</p>
          </div>
        </div>
      </div>
        
      </section>

   <section class="col-md-12 content" id="contact">
       <div class="col-lg-6 col-md-6 content-item tm-content-box tm-black-translucent-bg">
           <h2 class="contact-title">.04 Contact Info</h2>
           <p>In dapibus blandit congue. Sed quam nulla, pellentesque eget metus eu, sollicitudin sodales nisl. Integer tempus id lectus quis cursus.</p>
           <p>
             Tel: 010-020-0120<br>
             Fax: 060-070-0670<br>
             Email: info@company.com
           </p>
       </div>
       <div class="col-lg-6 col-md-6 content-item tm-content-box tm-white-translucent-bg">
           
           <form action="#" method="post" name="contact-form" class="contact-form">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required></textarea>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group margin-b-0">
                    <button type="submit" id="form-submit" class="btn pull-right btn-contact tm-btn-primary">Submit</button>
                </div>    
            </div>
        </form>
        <!--</div> -->
        <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>

    </div>

</section>

</div>

@endsection