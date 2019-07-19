
@extends('master.page2')

@section('title_page')
Login 
@endsection

@section('title_form')
SIGNIN TO GET INSTANT ACCESS.
@endsection


@section('form_section')

   <div class="panel-body">
               
               <form role="form" enctype="multipart/form-data" data-parsley-validate="" novalidate="" class="mb-lg" action="" id="upload_form" method="POST">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">  

                  
                <div class="form-group has-feedback">
                     <input id="email" type="email" placeholder="Enter email" autocomplete="off" required class="form-control">
                     <span class="fa fa-envelope form-control-feedback text-muted"></span>
                  </div>
                  
  <div class="form-group has-feedback">
                     <input id="password" type="password" placeholder="Password"
                      required class="form-control">
                     <span class="fa fa-lock form-control-feedback text-muted"></span>
                  </div>
                  
                 <div class="clearfix">
                     <div class="checkbox c-checkbox pull-left mt0">
                        <label>
                           <input type="checkbox" value="" name="remember">
                           <span class="fa fa-check"></span>Remember Me</label>
                     </div>
                     <div class="pull-right"><a  href="{{url('/forgetpass')}}" class="text-muted">Forgot your password?</a>
                     </div>
                  </div>
                  <button type="button" class="login_btn  btn  btn-block btn-primary mt-lg">Login</button>

               </form>
                <p class="pt-lg text-center">Need to Signup?</p>
                  <button type="button" class="btn btn-register btn-block btn-default">Register Now</button>
            </div>


              
@endsection




@section('additional_script')

    <script>
 $(document).ready(function(){
         var login_process= function(){
            $('.login_btn').on("click", function(){
              $.ajax({ 
                  method: "POST",
                  url: "{{url('check_login')}}",
                  data: {

                  email: $("#email").val(), password: $("#password").val() },

                  headers:{ 'X-CSRF-TOKEN': $('input[name="_token"]').val() },

                  success:function(response){ 

                    var obj =$.parseJSON(response);

                    if(obj.message=="success"){
                        window.location= "{{url('dash')}}";
                    } else {

                      alert(response);
                    }
                     }

                       });  // ajax

                 
                        }); // on click 
  
                                      } // for function login_process
                         login_process();


// btn-register
$('.btn-register').click(function(){
     window.location= "{{url('register')}}";
}); // btn-register

          
}); // ready


   </script>


   @endsection