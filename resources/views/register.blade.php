@extends('master.page2')


@section('title_page')
Register
@endsection

@section('title_form')
 SIGNUP TO GET INSTANT ACCESS.
@endsection

@section('alert')
 
    <div class="row error_t">
    
 <div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> <span id="error_text"></span>
  </div>
</div>


@endsection
     
                   @section('form_section')




               <form role="form" data-parsley-validate="" novalidate="" class="mb-lg" id="upload_form" method="POST" >


                <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                
   <ul class="nav nav-tabs nav-justified">
  
    <li class="active">
    
    <a data-toggle="tab" id="develop" href="#home">Developer</a>
    </li>

      <li> 
      <a id="lead" data-toggle="tab" href="#home">Leader</a></li>
    
  </ul>
<br> 
     

    <div id="home" class="tab-pane fade in active">
    <div class="form-group has-feedback code">
                     <input id="code" value="{{$code}}" type="text" name="code" placeholder="Project code" autocomplete="off" required class="form-control">
                     <span class="fa fa-lock form-control-feedback text-muted "></span>
                       <span class="error code_error"></span>
              
                  </div>
</div>
      <div class="form-group has-feedback">
        <input name="first_name" type="text" placeholder="First name" autocomplete="off" required class=" first_name form-control">
          <span class=" fa fa-user form-control-feedback text-muted "></span>
              <span class=" error first_name"></span>
         

        </div>
      
                  <div class="form-group has-feedback">
                     <input name="father_name" type="text" placeholder="Father name" autocomplete="off" required class="form-control">
                     <span class=" fa fa-user form-control-feedback text-muted "></span>
                       <span class="  error father_name"></span>
                    
                  </div>
                  <div class="form-group has-feedback">
                     <input name="Last_name" type="text" placeholder="Last name" autocomplete="off" required class="form-control">
                     <span class="fa fa-user form-control-feedback text-muted "></span>
                     <span class="error Last_name"></span>
                    
              
                  </div>
                  
   <div class="form-group has-feedback">
                     <input name="email" value="{{$email}}" type="email" placeholder="Enter email" autocomplete="off" required class="form-control">
                     <span class="fa fa-envelope form-control-feedback text-muted "></span>
                      <span class="error email"></span>
                    
                  </div>
                  <div class="form-group has-feedback">
                     <input id="password" name="password" type="password" placeholder="Password" autocomplete="off" required class="form-control">
                     <span class="fa fa-lock form-control-feedback text-muted "></span>
                      <span class="error password"></span>
                    
                  </div>
                  <div class="form-group has-feedback">
                     <input id="password_confirmation"  name="password_confirmation" type="password" placeholder="Retype Password" autocomplete="off" 
           required data-parsley-equalto="#email" class="form-control">
                     <span class="fa fa-lock form-control-feedback text-muted "></span>
                      <span class="error password_confirmation"></span>
                   
                  </div>


 <div class="form-group has-feedback">
                   <label class="radio-inline c-radio ">
                               <input id="role" type="radio" class="role" name="role" value="0" checked>
                                 <span class="fa fa-circle"></span>Deveoper</label>
                    <label class="radio-inline c-radio ">
                               <input id="role" type="radio" class="role" name="role" value="1">
                                 <span class="fa fa-circle"></span>Leader</label>
                   
                  </div>

                              
                  


                 <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                     
                        <input type="file" name="id_image" id="id_image" class="id_image"/><!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 

           

                  <button type="button" class="btn btn-block btn-primary mt-lg  btn-register">Create account</button>
               </form>

                <p class="text-center">Have an account?</p> <button type="button" class="btn btn-default btn-block"><a  href="{{url('/')}}">  SIGN IN </a> </button>
               @endsection
         
         <!-- END panel-->
           
     


@section('page_level_js')


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="{{asset('assets/js/im_upload.js')}}"></script>
    <script>


      
 $(document).ready(function(){


var code_valid="1";
  $('#develop').on("click", function(){
            code_valid="0";
                 $('.code').show(1000);
                
    });
var timer = null;
$('#code').keydown(function(){
       clearTimeout(timer); 
       timer = setTimeout(doStuff, 1000)
});

function doStuff() {
   
        $.ajax({
      url: "{{url('get_code')}}",
      method: "POST",
                  url: "{{url('get_code')}}",
                  data: new FormData($("#upload_form")[0]),
                  async: false,
                  type: 'post',
                  processData: false,
                  contentType: false,
                  headers:{ 'X-CSRF-TOKEN': $('input[name="_token"]').val() },
     
      success: function (response) {
                     var obj=$.parseJSON(response);
                    
                     if (obj.code=="nullData") {
               code_valid="0";
                       $('#code').css({'border-color' : '#e60000'});

                     }   else if(obj.code=="haveData"){
               code_valid="1";
                        $('#code').css({'border-color' : '#00cc66'});


                      }                
            }
                       }); 
}



$('#lead').on("click", function(){

                 $('.code').hide(1000);                 
                        });


         var add_new_account= function(){
            $('.btn-register').on("click", function(){
               if( !(code_valid=="0"))  {
              $.ajax({ 
                  method: "POST",
                  url: "{{url('add_new_accounts')}}",
                  data: new FormData($("#upload_form")[0]),
                  async: false,
                  type: 'post',
                  processData: false,
                  contentType: false,
                  headers:{ 'X-CSRF-TOKEN': $('input[name="_token"]').val() },
                  success:function(response){ 

                    var obj2=$.parseJSON(response);
                     if (obj2.message=='success') {
                   window.location= "{{url('/')}}";  }           
      
                        else if (obj2.message=='fail') {

                        alert( "this fail");}

                        else if (obj2.message=='email_red') {
                             $('.error_t').show(1000);   
                       
                        $('#email').text(" This email is already in use. Want to log in?");

                      }

                        else if (obj2.message=='unknown_error') {
                        alert( "unknown_error");}

                        
                        else if (obj2.message=='validiation') {
                     $.each(obj2.errors, function( key, value ) {
                      
                         $('.'+key).text(value );

                        $('.'+key).prev().prev().css({'border-color' : '#e60000'});

                              });


                      }
                        
                       }
                       });  // ajax
                 }
                 else {

                    $('.code_error').text("Please , enter correct values ");   
                    $('#code').css({'border-color' : '#e60000'});
                 }
                        }); // on click 
  
                       } // for function login_process
                         add_new_account();
          
}); // ready


   </script>


   @endsection

   @section('page_level_css')


<style type="text/css">
  .image-preview-input {
    position: relative;
  overflow: hidden;
  margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}


</style>

 <style type="text/css">

.error_t  {display: none;}
.error {color:#e60000;}
</style>

.
 @endsection
  


