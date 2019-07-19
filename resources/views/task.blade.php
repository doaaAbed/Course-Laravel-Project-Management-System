@if(session('role')==0)
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
             <?php  $a = 0; ?>
                 @foreach($data as $temp)   

               <div class="col-sm-4 ">
                  <div class="panel b">
                  <fieldset>
                     <div class="panel-heading">
                      

                         <h4 class="m0">

                        <span class="proj_title" style="color:red;"> Project # <?php echo $a++; ?></span>
                
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
                        <span class="projcts_title"> {{$temp->project_title}}</span>
                      
                         </td>
                      </tr>

                           <tr>
                              <td>
                                 <strong>Start date :</strong>
                              </td>
                              <td>{{$temp->created_at}}</td>
                           </tr>
                         
                                <tr>
                              <td>
                                 <strong>Members :</strong>
                              </td>
                              <td>

                              
                               <span text_desc_project>
                               @foreach($temp->get_developer as $temp2)
                        <a href="" data-toggle="tooltip" data-title="Team member">
                                   {{$temp2->get_account_details->first_name}} |
                                     
                                 </a> 
                                 @endforeach
                                 </span>
                                 <br>
                            
                          
                            </td>
                           
                           </tr>
                           <tr>
                              <td>
                                 <strong>Project description :</strong>
                              </td>
                              <td>
                             <span class="projectdesc text_desc_project">{{$temp->project_desc}}</span>
                              </td>
                           </tr>
                           <input type="hidden" value="{{$temp->project_id}}">
                        </tbody>
                     </table>
                     <div class="panel-footer text-center">
                        
      <button type="button" class="btn btn-primary task_manage ">
<a  style="color:white;" href="{{url('task_management/'.$temp->project_id)}}"> Task Management</a>
                       </button>
                     </div>
                  </div>
               </div>
               @endforeach
         </div>
  </div>  

      @endsection


