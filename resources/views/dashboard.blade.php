@if(session('first_name')==null)
<script> window.location= "{{url('/')}}";</script>
@endif

@extends('master.page')
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- WEATHER ICONS-->


    @section('content')
        
  <div class="content-wrapper">
  <div class="pull-right">
      <button type="button" class="edit_control btn btn-primary btn-sm">Edit</button>
      </div>
            <h3>Control panel
            </h3>

    <!-- START panel-->
            <div class="panel panel-default  modal_add_task">
               <div class="panel-heading">Form elements</div>
               <div class="panel-body">
               <form role="form" enctype="multipart/form-data" action="" id="upload_form" method="POST">
                
                <fieldset>
                     <legend>Edit </legend>
                     </fieldset>
                            @foreach($data as $temp)
                <fieldset>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">First name</label>
                           <div class="col-sm-10">
                              <input type="text" name="first_name" class="first_name form-control title_task" value="{{$temp->first_name}}">
                           </div>
                        </div>
                     </fieldset> 
                     
              
                      <fieldset>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Father name</label>
                           <div class="col-sm-10">
                              <input type="text" name="father_name" class=" father_name form-control description" value="{{$temp->father_name}}">
                           </div>
                        </div>
                     </fieldset>

                      <fieldset>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Last name</label>
                           <div class="col-sm-10">
                              <input type="text" name="Last_name" class=" form-control description Last_name" value="{{$temp->Last_name}}">
                           </div>
                        </div>
                     </fieldset>

                      <fieldset>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Email</label>
                           <div class="col-sm-10">
                              <input type="text" name="email" class="  email form-control description" value="{{$temp->email}}">
                           </div>
                        </div>
                     </fieldset>
                     

                      <fieldset>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Password</label>
                           <div class="col-sm-10">
                              <input type="text" name="Password" class="Password form-control description" value="{{$temp->Password}}">
                           </div>
                        </div>
                     </fieldset>

                       <fieldset>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Upload File</label>
                           <div class="col-sm-10">
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
                         <!-- rename it -->
                       <input type="file" name="id_image" id="id_image" class="id_image"/>

                    </div>
                </span>
            </div>
                           </div>
                        </div>
              </fieldset>

               
      
                      <fieldset>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Activity:</label>
                           <div class="col-sm-10">
                              <label class="radio-inline c-radio">
                               <input id="inlineradio20" type="radio" name="status" value="1" checked>
                                 <span class="fa fa-circle"></span>Active</label>
                              <label class="radio-inline c-radio">
                                 <input id="inlineradio20" type="radio" name="status" value="0" >
                                 <span class="fa fa-circle"></span>DeActive</label>
                            
                           </div>
                        </div>
                     </fieldset>
      @endforeach
                 
                        <div class="form-group ">
                           <div class="col-sm-3 col-sm-offset-2 pull-right">
                              <button type="button" class="btn" id="cancel_task_modal">Cancel</button>
                              <button type="button" class="btn btn-primary save_modal">Save changes</button> 
                             <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                           </div>
                        </div>            
                    
              
                  </form>
               </div>
            </div>
            <!-- END panel-->
          



<div class="display_my_data row">
  <!-- START widget-->
                  <div class="panel widget col-sm-4">
                     <div class="panel-body">
                        <div class="row row-table">
                        @foreach($data as $temp)
                           <div class="col-xs-6 text-center">
                              <img src="{{asset('uploads/').'/'.$temp->img_name}}" alt="Image" class="img-circle thumb96">


                           </div>
                              
                           <div class="col-xs-6">
                              <h3 class="mt0">{{$temp->first_name}}</h3>
                              <ul class="list-unstyled">
                                 <li class="mb-sm">
                                    <em class="fa fa-map-marker fa-fw"></em>ASD, Qwerty</li>
                                 <li class="mb-sm">
                                    <em class="fa fa-twitter fa-fw"></em>@asdasd</li>
                                 <li class="mb-sm">
                                    <em class="fa fa-envelope fa-fw"></em>{{$temp->email}}</li>
                              </ul>
                           </div>
                            @endforeach
                        </div>
                     </div>
                     <div class="panel-body bg-inverse">
                        <div class="row row-table text-center">
                           <div class="col-xs-4">
                              <p class="m0 h3">700</p>
                              <p class="m0 text-muted">Followers</p>
                           </div>
                           <div class="col-xs-4">
                              <p class="m0 h3">1500</p>
                              <p class="m0 text-muted">Following</p>
                           </div>
                           <div class="col-xs-4">
                              <p class="m0 h3">510</p>
                              <p class="m0 text-muted">Loved</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END widget-->

                  <div >
 <div class="col-sm-8">
                  <div class="panel panel-default">
                     <div class="panel-heading">Control Panel</div>
                     <div class="panel-body">
                        <div class="table-hover">
                           <table class=" table table-hover">
                              <thead>
                                 <tr>
                                    <th>#My information</th>
                                   
                                 </tr>
                              </thead>
                              <tbody>
                            @foreach($data as $temp)

                                 <tr >
                                    <td>First name:</td>
                                    <td>{{$temp->first_name}}</td>
                                 </tr>

                                 <tr >
                                    <td>Father name:</td>
                                    <td>{{$temp->father_name}}</td>
                                  
                                 </tr>

                                 <tr >
                                    <td>Last name :</td>
                                    <td>{{$temp->Last_name}}</td>
                                  
                                 </tr>

                                 <tr >
                                    <td>Role:</td>
                                    @if (($temp->role)===1)
    <td>Leader</td>

@else
   <td>Developer</td> 
@endif
          
                                  
                                 </tr>



                                 <tr >
                                    <td>Email:</td>
                                    <td>{{$temp->email}}</td>
                                  
                                 </tr>

                                 <tr>
                                    <td>status :</td>
                           
                                  

                                  @if (($temp->status)===1)
    <td>Active</td>

@else
   <td>Deactive</td> 
@endif
                                 </tr>
                                 <tr >
                                    <td>created at :</td>
                                    <td>{{$temp->created_at}}</td>
                                  
                                 </tr>    
                             
                              </tbody>
                              @endforeach
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            
                  </div>
</div>
            
   </div>
    @endsection  
      <!-- Page footer-->
     

     
@section('page_level_js')
 <script src="{{asset('assets/js/im_upload.js')}}"></script>
      <script>
$(document).ready(function(){

           $('.edit_control').on("click", function(){
                $('.modal_add_task').show();
                  $('.display_my_data').hide();         
                         
                       }); 
          $('#cancel_task_modal').on("click", function(){
                $('.modal_add_task').hide();
                  $('.display_my_data').show(); 

              });


             var save_edit= function(){
               $('.save_modal').on("click", function(){
              
                $.ajax({ 
                  method: "POST",
                  url: "{{url('update_my_account')}}",
                  data: new FormData($("#upload_form")[0]),
              
                  headers:{

                 'X-CSRF-TOKEN': $('input[name="_token"]').val() },
                 async: false,
      type: 'post',
      processData: false,
      contentType: false,

                  success:function(response){ 
      
                   $('.modal_add_task').hide();
                  $('.display_my_data').show(); 
                
                          }
                         
                       });  // ajax
                 
                        }); 


                           }
                            save_edit();

                 
                        }); 


     

   </script>
   
@endsection  


@section('page_level_css')
<link rel="stylesheet" href="{{asset('assets/vendor/weather-icons/css/weather-icons.min.css')}}">
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
.valierror{
color:red;

}

</style>

 <style type="text/css">
.edit_my_data  {display: none;}
.modal_add_task  {display: none;}
</style>

  @endsection