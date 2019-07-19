@if(session('role')==1)
<script> 
alert("cann't access");
window.location= "{{url('dash')}}";</script>

@endif

@if(session('first_name')==null)
<script> window.location= "{{url('/')}}";</script>
@endif


@extends('master.page')

@section('modal')
<!-- ////////////////////Show More //////////////////////////////-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Task Details</h4>
      </div>
      
      <div class="modal-body row" >
      <br>
        <form>
 <fieldset class="col-sm-6">
    <div class="form-group row ">
        <label for="recipient-name" class="fa fa-tasks  col-sm-6 label_modal control-label">   Task title:</label>
        <span for="recipient-name" class="col-sm-6 span_modal control-label t_title_m"></span>
     </div>
 </fieldset>


 <fieldset class="col-sm-6">
    <div class="form-group row">
        <label for="recipient-name" class="fa fa-tasks col-sm-6 label_modal control-label">    Task priority:</label>
        <span for="recipient-name" class="col-sm-6 span_modal control-label t_priority_m"></span>
     </div>
 </fieldset>
 

 <fieldset class="col-sm-6">
    <div class="form-group row">
        <label for="recipient-name" class="fa fa-tasks col-sm-6 label_modal control-label">    Task deadline:</label>
        <span for="recipient-name" class="col-sm-6 control-label span_modal t_deadline_m"></span>
     </div>
 </fieldset>


 <fieldset class="col-sm-6">
    <div class="form-group row">
        <label for="recipient-name" class="fa fa-tasks col-sm-6 label_modal control-label">  Leader :</label>
        <span for="recipient-name" class="col-sm-6 control-label span_modal t_Assigned_m"></span>
     </div>
 </fieldset>
      


<fieldset class="col-sm-12">
    <div class="form-group row">
        <label for="recipient-name" class="col-sm-3 fa fa-tasks label_modal control-label">   Task Description:</label>
        <span for="recipient-name" class=" col-sm-8 control-label span_modal t_desc_m" rows="5"></span>
     </div>
 </fieldset>

 <fieldset class="col-sm-12">
    <div class="form-group row">
        <label for="recipient-name" class="col-sm-3 fa fa-tasks label_modal control-label"> Note:</label>
        <span for="recipient-name" class=" col-sm-8 control-label span_modal tt_note_m" rows="5"></span>
     </div>
 </fieldset>


         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close_modal"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- //////////////////// Edit task status +note //////////////////////////////-->
<div class="modal fade" id="edit_task" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit task </h4>
      </div>
      
      <div class="modal-body row" >
      <br>
        <form role="form" id="upload_form" method="POST">

 <fieldset class="col-sm-6">
    <div class="form-group row ">
        <label for="recipient-name" class="fa fa-tasks  col-sm-6 label_modal control-label">   Task title:</label>
        <span for="recipient-name" class="col-sm-6 span_modal control-label t_title_m"></span>
     </div>
 </fieldset>


 <fieldset class="col-sm-6">
    <div class="form-group row">
        <label for="recipient-name" class="fa fa-tasks col-sm-6 label_modal control-label">    Task deadline:</label>
        <span for="recipient-name" class="col-sm-6 control-label span_modal t_deadline_m"></span>
     </div>
 </fieldset>



 <fieldset class="col-sm-12">
    <div class="form-group row ">
        <label for="recipient-name" class="col-sm-4 label_more control-label">Task Status :</label>
        <div class="col-sm-8">
<select id="aioConceptName">
  <option >New</option>
  <option >InProgress</option>
  <option >Complete</option>
  <option >Close</option>
</select>
     </div>
     </div>
 </fieldset>

 <fieldset class="col-sm-12">
    <div class="form-group row ">
        <label for="recipient-name" class="col-sm-4 label_more control-label">Note :</label>
        <div class="col-sm-8">
        <input type="text" class="form-control input_more t_note_m" name="t_note_m">
     </div>
     </div>
 </fieldset>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close_modal"  data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn_edit_table">Save</button>
      </div>
    </div>
  </div>
</div>


            @endsection
<!-- //////////////////// End Modal //////////////////////////////-->


@section('content')
 <div class="content-wrapper">
            <h3>Tasks of the project
               <small>Keep working ..</small>
            </h3>

            <div class="container-fluid">
<!-- ////////////////////Start DataTable //////////////////////////////-->

               <div class="row">
               <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                  <div class="col-lg-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">Task Management |
                           <small>task of project ...</small>
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive">
                              
                               <form >
                        <table id="datatable2" class="table table-striped table-hover datatable_task">
                                 <thead>
                                   
                                    <tr>
                                       <th>#</th>
                                       <th>Task title</th>
                                       <th>Task priority</th>                        
                                       <th>Task Deadline</th>
                                       <th>Task status</th>
                                       <th>Note</th>
                                       <th>More</th>
                                       <th>Edit</th>
                                       
                                    </tr>
                                 </thead>
                               <tbody class="append_task">
                                  <?php
                                  $counter=1;
                                  $index_to_update=1;?>
                                  @foreach($data as $temp)

                   <?php $index_to_update++; ?>
                    <tr style="font-size: 13px;" class="gradeX" id="<?php echo $index_to_update; ?>">

                        
                    <td><?php echo $counter++; ?></td>
                     <td id="taskid_e" value="{{$temp->task_ids}}"> {{$temp->task_title}}</td>

                     <td id="task_pro">  @if ($temp->task_pro === 3)
                    <p><font color="red">Important</font></p>
                            @elseif ($temp->task_pro===2)
                            <p><font color="blue">Intermediate</font></p>
                            @else <p><font color="green">Weak</font></p>

                            @endif</td>
                                     
                                       <td name="task_deadline" id="task_deadline"> {{$temp->task_deadline}}</td>

                                    <?php
                                    $d=$temp->get_status_task[0];
                                    $date_c=$d->created_at;
                                    $last_status=$d->status;
                                    foreach($temp->get_status_task as $temp2){
                                  
                                     if($date_c > $temp2->created_at){
                                            $date_c=$date_c;
                                            $last_status=$last_status; }
                                    else{
                                            $date_c=$temp2->created_at;
                                             $last_status=$temp2->status;
                                                                   }

                                    }
                                    ?>

                                  <td name="task_status" id="task_status"><span class="task_status">{{$last_status}}</span> </td>
                                   
                                     
                              
                                      

                                       <td name="task_note" id="task_note"><span class="task_note">{{$temp->task_note}}</span></td>

                                       <td  name="btn_e" id="btn_e"><button type="button" class="btn_more btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModal">more</button>
                                       <input type="hidden" value="{{$temp->task_ids}}">

                                       </td>

                                       <td  name="btn_e" id="btn_e"><button type="button" class="btn btn-default fa fa-edit btn_edit"
                                       data-toggle="modal" data-target="#edit_task"></button>
                                        <input type="hidden" value="{{$temp->task_ids}}">
                                       </td>
                                      
                                       </td>
                                    </tr>
                             @endforeach
                                 </tbody>
                                  </form>
                    
                              </table>
                           </div>
                       
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END DATATABLE 2-->
                 </div>
              </div>

@endsection

@section('page_level_js')
<script type="text/javascript">
$(document).ready(function(){
var task_id_edit;
var  task_note_edit;
var task_status_edit;


 var show_more= function(){
            $('.btn_more').on("click", function(){
             task_id=$(this).next().val();
              modal_task=$(this).parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent();

           
                  $.ajax({ 
                  method: "POST",
                  url: "{{url('get_task_status')}}",
                  data:
                  {task_id:task_id},
              
                  headers:{

                 'X-CSRF-TOKEN': $('input[name="_token"]').val() },

                  success:function(response){ 
                     var prio;
                     var obj =$.parseJSON(response); 
                     

                       if (obj[0].task_pro == 3)  prio="Important";
                       if (obj[0].task_pro == 2)  prio= "Weak"; 
                       if (obj[0].task_pro == 1)   prio="Intermediate";
                    modal_task.find('.t_title_m').text(obj[0].task_title);
                    modal_task.find('.t_Assigned_m').text(obj[0].get_task_assigned.first_name);
                    modal_task.find('.t_priority_m').text(prio);
                    modal_task.find('.t_deadline_m').text(obj[0].task_deadline);
                    modal_task.find('.t_desc_m').text(obj[0].task_desc);
                    modal_task.find('.t_status_m').text("doaa");
            

     
                          }
                         
                       });  // ajax
             
          });
          }
             show_more();
////////////////////////////////////////////////////////////////////////////////////

var edit_task_developer= function(){

           $('.btn_edit').on("click", function(){
           task_id_edit=$(this).next().val();
           task_note_edit=$(this).parent().parent().find('.task_note');
           task_status_edit=$(this).parent().parent().find('.task_status');
           modal_task=$(this).parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent();


           modal_task.find('#aioConceptName').val(task_status_edit.text());
           modal_task.find('.t_note_m').val(task_note_edit.text());
           });


            $('.btn_edit_table').on("click", function(){
              note_modal=$(this).parent().parent().parent().find('.t_note_m');

            var status = $('#aioConceptName :selected').text();
            var  note= $('.t_note_m').val();
                  $.ajax({ 
                  method: "POST",
                  url: "{{url('edit_task_developer')}}",
                  data:{status:status,
                         note:note,
                         task_id_fk:task_id_edit},
              
                  headers:{

                 'X-CSRF-TOKEN': $('input[name="_token"]').val() },

                  success:function(response){ 
                        
                         $('#edit_task').modal('toggle');
                          alert(response);
                          task_note_edit.text(note);
                          task_status_edit.text(status);
                          }
                         
                       });  // ajax 
             
          });
          }
                            edit_task_developer();




});    

</script>

 <script src="{{asset('assets/js/im_upload.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/media/js/dataTables.bootstrap.js')}}"></script>
   <script src="{{asset('assets/vendor/datatables-colvis/js/dataTables.colVis.js')}}"></script>
   <script src="{{asset('assets/vendor/datatables/media/js/dataTables.bootstrap.js')}}"></script>
   <script src="{{asset('assets/vendor/datatables-buttons/js/dataTables.buttons.js')}}"></script>
   <script src="{{asset('assets/vendor/datatables-buttons/js/buttons.bootstrap.js')}}"></script>
   <script src="{{asset('assets/vendor/datatables-buttons/js/buttons.colVis.js')}}"></script>
   <script src="{{asset('assets/vendor/datatables-buttons/js/buttons.flash.js')}}"></script>
   <script src="{{asset('assets/vendor/datatables-buttons/js/buttons.html5.js')}}"></script>
   <script src="{{asset('assets/vendor/datatables-buttons/js/buttons.print.js')}}"></script>
   <script src="{{asset('assets/vendor/datatables-responsive/js/dataTables.responsive.js')}}"></script>
   <script src="{{asset('assets/vendor/datatables-responsive/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/moment/min/moment-with-locales.min.js')}}"></script>
    <script src="{{asset('assets/js/demo/demo-datatable.js')}}"></script>
<script src="{{asset('assets/vendor/sweetalert/dist/sweetalert.min.js')}}"></script>
@endsection


@section('page_level_css')
  <link rel="stylesheet" href="{{asset('assets/vendor/sweetalert/dist/sweetalert.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables-colvis/css/dataTables.colVis.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendor/datatables/media/css/dataTables.bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendor/dataTables.fontAwesome/index.css')}}">
  @endsection