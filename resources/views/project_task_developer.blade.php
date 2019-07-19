@if(session('role')==1)
<script> 
alert("cann't access");
window.location= "{{url('dash')}}";</script>

@endif

@if(session('first_name')==null)
<script> window.location= "{{url('/')}}";</script>
@endif

@extends('master.page')


@section('content')
         <!-- Page content-->
   <div class="content-wrapper ">
            <div class="pull-right">

               <button type="button" class="btn_add_project btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModal">Create project</button>
               

            </div>
            <h3>Projects</h3>
           
                        <div class="row add_div">

                          @foreach($invite_data as $temp)   

               <div class="col-sm-4 ">
                  <div class="panel b">
                  <fieldset>
                     <div class="panel-heading pull-right">
                       <button type="button" class="btn btn-success Accept_inv"> Accept
                       </button>
                       <input type="hidden" class="project_id_fk2" value="{{$temp->get_project_details->project_id}}">
                        <button type="button" class="btn btn-danger delete_inv"> Cancle
                       </button>
                      
                     </div>
</fieldset>
                     <table class="table">
                    
                        <tbody class="t_title">
                        <tr class="tr_title">

                        <td>
                        <strong class="pro_na">Project name :</strong>
                        </td>
                        <td class="td_title">
                        <span class="projcts_title">
                        {{$temp->get_project_details->project_title}}</span>
                      
                         </td>
                      </tr>

                           <tr>
                              <td>
                                 <strong>Start date :</strong>
                              </td>
                              <td>{{$temp->get_project_details->created_at}}</td>
                           </tr>
                         
                               
                           
                        </tbody>
                     </table>

                     <div class="panel-footer text-center">
                        
      <button type="button" class="btn btn-primary Show_Details"> Show Details
                       </button>
                     </div>
                  </div>
               </div>
               @endforeach

                 @foreach($data as $temp)   

               <div class="col-sm-4 ">
                  <div class="panel b">
                  <fieldset>
                     <div class="panel-heading">
                      

                         <h4 class="m0">

                        <span class="proj_title" style="color:red;"> Project # </span>
                
                         </h4>

                     </div>
</fieldset>
                     <table class="table">
                    
                        <tbody class="t_title">
                        <tr class="tr_title">

                        <td>
                        <strong class="pro_na">Project name :</strong>
                        </td>
                        <td class="td_title">
                        <span class="projcts_title"> {{$temp->get_project_details->project_title}}</span>
                      
                         </td>
                      </tr>

                           <tr>
                              <td>
                                 <strong>Start date :</strong>
                              </td>
                              <td>{{$temp->get_project_details->created_at}}</td>
                           </tr>
                         
                               
                           <tr>
                              <td>
                                 <strong>Project description :</strong>
                              </td>
                              <td>
                             <span class="projectdesc text_desc_project">{{$temp->get_project_details->project_desc}}</span>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="panel-footer text-center">
                        
      <button type="button" class="btn btn-primary task_manage ">
<a  style="color:white;" href="{{url('task_management_developer/'.$temp->get_project_details->project_id)}}"> Task Management</a>
                       </button>
                     </div>
                  </div>
               </div>
               @endforeach
         </div>
  </div>  

      @endsection


@section('page_level_js')
<script type="text/javascript">
$(document).ready(function(){

          var acceptinv= function(){
            $('.Accept_inv').on("click", function(){
            var curent = $(this);
                  $.ajax({ 
                  method: "POST",
                  url: "{{url('Accept_inv')}}",
                  data:{project_id_fk2:curent.next().val()},
              
                  headers:{

                 'X-CSRF-TOKEN': $('input[name="_token"]').val() },

                  success:function(response){      
                     alert(response); 
         
     
                          }
                         
                       });  // ajax  
          });
          }
  acceptinv();

            var deleteinv= function(){
            $('.delete_inv').on("click", function(){
            var curent = $(this);
                  $.ajax({ 
                  method: "POST",
                  url: "{{url('delete_inv')}}",
                  data:{project_id_fk2:curent.prev().val()},
              
                  headers:{

                 'X-CSRF-TOKEN': $('input[name="_token"]').val() },

                  success:function(response){      
                     alert(response); 
         
     
                          }
                         
                       });  // ajax  
          });
          }
  deleteinv();
       
});                            
 </script>        


@endsection


