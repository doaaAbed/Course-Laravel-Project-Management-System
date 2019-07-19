@extends('master.page2')

@section('title_page')
Forget Password
@endsection

@section('title_form')
Fill with your mail to receive instructions on how to reset your password.
@endsection
            @section('form_section')
               <form role="form">
                  <p class="text-center"></p>
                  <div class="form-group has-feedback">
                     <label for="resetInputEmail1" class="text-muted">Email address</label>
                     <input id="resetInputEmail1" type="email" placeholder="Enter email" autocomplete="off" class="form-control">
                     <span class="fa fa-envelope form-control-feedback text-muted"></span>
                  </div>
                  <button type="submit" class="btn btn-danger btn-block">Reset</button>
               </form>
   @endsection


     <script>


      
 $(document).ready(function(){

      
}); // ready


   </script>
