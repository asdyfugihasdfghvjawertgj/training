@extends('template')
@section('content')

<style type="text/css">
  @font-face{
    src:url("{{asset('storage/fonts/os.ttf')}}");
    font-family: "aa";
  }

</style>

 <h1 class="text-center py-5" style="font-family:'aa';"><i class="fas fa-envelope-open-text"></i> &nbsp;&nbsp; Send us a Message &nbsp;&nbsp;<i class="fas fa-envelope-open-text"></i></h1>
<div>
  <div class="row no-gutters">
    <div class="col-md-8">
      <div>
          
        
        <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group">
                  <label>Your Name:</label>
                  <input type="name" class="form-control" placeholder="Enter Your Name" id="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group">
                  <label>Email Address:</label>
                  <input type="email" class="form-control" placeholder="Enter Your Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group">
                  <label>Phone Number:</label>
                  <input type="tel" class="form-control" placeholder="Enter Your Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group">
                  <label>Address:</label>
                  <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-12">
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group">
                  <label>Message:</label>
                    <textarea rows="5" class="form-control" placeholder="What will we dissicus?" id="message" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-12"></div>
          <input type="submit" name="Send" value="Send">
        </div>
      </div>
      </div>
    </div>
    <div class="col-md-3 mx-5" style="background-color:  #006691;">
      <h5 class="text-center mt-3" style="font-family:'aa';">Contact Information</h5>
      <ul class="list-unstyled mx-3 mt-3">
            <li><i class="fas fa-map-marker-alt"></i>&nbsp; Myaynigon/Yangon</li>
            <br>
            <li><i class="fas fa-phone-volume"></i> &nbsp; 09-400614312</li><br>
            <li><i class="fas fa-envelope"></i>&nbsp; info@semitc.org</li><br>
            <li><i class="fas fa-link"></i>&nbsp;http://www.semicolontc.com</a></li><br>
          </ul>
          <div class="" style="margin-left: 100px; margin-top: 50px;">
            <i class="fas fa-smile-wink fa-2x align-middle"></i>&nbsp; Thanks!
          </div>
    </div>
  </div>
</div>
@endsection



