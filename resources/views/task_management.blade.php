
@if(session('role')==0)
<script> 
alert("cann't access");
window.location= "{{url('dash')}}";</script>

@endif

@if(session('first_name')==null)
<script> window.location= "{{url('/')}}";</script>
@endif

@extends('master.page')





@section('modal')
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
        <label for="recipient-name" class="fa fa-tasks col-sm-6 label_modal control-label">   Task status:</label>
        <span for="recipient-name" class="col-sm-6 span_modal control-label t_status_m"></span>
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
        <label for="recipient-name" class="fa fa-tasks col-sm-6 label_modal control-label">    Assigned to:</label>
        <span for="recipient-name" class="col-sm-6 control-label span_modal t_Assigned_m"></span>
     </div>
 </fieldset>
      

 <fieldset class="col-sm-6">
    <div class="form-group row">
        <label for="recipient-name" class="fa fa-tasks col-sm-5 label_modal control-label">   Task file:</label>
        <span for="recipient-name" class="col-sm-7 control-label span_modal t_file_m"></span>
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
        <label for="recipient-name" class="col-sm-3 fa fa-tasks label_modal control-label">   Note:</label>
        <span for="recipient-name" class=" col-sm-8 control-label span_modal t_note_m" rows="5"></span>
     </div>
 </fieldset>

 <fieldset class="col-sm-12">
    <div class="form-group row">
        <label for="recipient-name" class="col-sm-5 fa fa-tasks label_modal control-label">    Status history:</label>
        <div class="col-sm-7">
         <table class="table table-striped">
    <thead>
      <tr>
        <th>Status:</th>
        <th>Update at:</th>
       
      </tr>
    </thead>
    <tbody class="history_status">
 
    </tbody>
  </table>
     </div> </div>
 </fieldset>

         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close_modal"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--- ////////////////////////////////////////////      End show more      -->
<div class="modal fade" id="edit_task" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit Task</h4>
      </div>
      
      <div class="modal-body row" >
      <br>
        <form role="form" enctype="multipart/form-data" action="" id="upload_form" method="POST">
 <input type="hidden" name="project_id" value="{{$project_id}}">
<input type="hidden" name="t_file_m" class="t_file_m">
 <input type="hidden" name="task_id" class="task_id">



 <fieldset class="col-sm-12">
    <div class="form-group row ">
        <label for="recipient-name" class="col-sm-4 label_more control-label">Task title:</label>
        <div class="col-sm-8">
        <input type="text" class="form-control input_more t_title_m" name="t_title_m">
     </div></div>
 </fieldset>

 <fieldset class="col-sm-12">
    <div class="form-group row">
        <label for="recipient-name" class="col-sm-4 label_more control-label">Task priority:</label>
      <div class="col-sm-8"> 

                              <label class="radio-inline c-radio ">
                               <input id="priority_task" type="radio" class="t_priority_m" name="t_priority_m" value="3" checked>
                                 <span class="fa fa-circle"></span>Important</label>
                              <label class="radio-inline c-radio">
                                 <input id="priority_task" type="radio"  class="t_priority_m" name="t_priority_m" value="2" >
                                 <span class="fa fa-circle"></span>intermediate</label>
                              <label class="radio-inline c-radio">
                                 <input id="priority_task" type="radio" class="t_priority_m" name="t_priority_m" value="1" >
                                 <span class="fa fa-circle"></span>Weak</label>
                           

      </div>
 </fieldset>

 <fieldset class="col-sm-12">
    <div class="form-group row">
        <label for="recipient-name" class="col-sm-4  label_more control-label">Task deadline:</label>
   <div class="col-sm-8">   
   <input type="date" class="form-control t_deadline_m input_more" name="task_deadline"></div></div>
 </fieldset>


 <fieldset class="col-sm-12">
    <div class="form-group row">
        <label for="recipient-name" class="col-sm-4 label_more control-label">Assigned to:</label>
          <div class="col-sm-8">
                             
                              <div class="row">
                                 <div class="col-lg-6">
                                    <select multiple="" name="Assigned_to" class="form-control  Assigned_to">
                                  @foreach($assigned_to as $temp)
                       <option value="{{$temp->get_account_details->act_id}}">

                    
                                {{$temp->get_account_details->first_name}}</option>
                                  @endforeach
                                    
                                    </select>
                                 </div>
                              </div>
                           </div>
       
 </fieldset>
      

 <fieldset class="col-sm-12">
    <div class="form-group row">
        <label for="recipient-name" class="col-sm-4 label_more control-label">Task file:</label>

                 <div class="col-sm-8">
                  <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename t_file_m" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                         <!--  it -->
                       <input type="file" name="id_image" id="id_image" class="id_image " />

                    </div>
                </span>
            </div>
                           </div>
 </fieldset>


<fieldset class="col-sm-12">
    <div class="form-group row">
        <label for="recipient-name" class="col-sm-4  label_more control-label">Task Description:</label>
        <div class="col-sm-8"> 
      <input type="text" class="form-control  input_more  t_desc_m" name="t_desc_m"></div></div>
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
<!--- ////////////////////////////////////////////      End Edit      -->

@section('content')
 <div class="content-wrapper">
  <div class="pull-right">
      <button type="button" class="btn_add_task btn btn-primary btn-sm">Add New Task</button>
      </div>
            <h3>Tasks of {{$project_name[0]->project_title}} project
               <small>Keep working ..</small>
            </h3>


<!-- -->


            
            <div class="container-fluid">



    <!-- START panel-->
            <div class="panel panel-default modal_add_task">
               <div class="panel-heading">Form elements</div>
               <div class="panel-body">
               <form role="form" enctype="multipart/form-data" action="" id="upload_form" method="POST">
                
                <fieldset>
                     <legend>Add New task</legend>
                     </fieldset>

                <fieldset>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Task Title</label>
                           <div class="col-sm-10">
                              <input type="text" name="task_title_m" class="task_title_m form-control title_task">
                           </div>
                        </div>
                     </fieldset> 
                     
                 <fieldset>
                        <div class="form-group mb">
                           <label class="col-sm-2 control-label mb">Task deadline</label>
                           <div class="col-sm-10">
                              <div id="datetimepicker1" class="input-group date">
                                 <input type="date" name= "task_deadline" class="task_deadline form-control">
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </fieldset>

                      <fieldset>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Task description</label>
                           <div class="col-sm-10">
                              <input type="text" name="description" class=" form-control description">
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

               <fieldset class="last-child">
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Assigned to</label>
                           <div class="col-sm-10">
                             
                              <div class="row">
                                 <div class="col-lg-6">
                                    <select multiple="" name="Assigned_to" class="form-control  Assigned_to">
                                  @foreach($assigned_to as $temp)
                       <option value="{{$temp->get_account_details->act_id}}">

                    
                                {{$temp->get_account_details->first_name}}</option>
                                  @endforeach
                                    
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </fieldset>
      
                      <fieldset>
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Task Priority</label>
                           <div class="col-sm-10">
                              <label class="radio-inline c-radio">
                               <input id="inlineradio20" type="radio" name="role" value="3" checked>
                                 <span class="fa fa-circle"></span>Important</label>
                              <label class="radio-inline c-radio">
                                 <input id="inlineradio20" type="radio" name="role" value="2" >
                                 <span class="fa fa-circle"></span>intermediate</label>
                              <label class="radio-inline c-radio">
                                 <input id="inlineradio20" type="radio" name="role" value="1" >
                                 <span class="fa fa-circle"></span>Weak</label>
                           </div>
                        </div>
                     </fieldset>
      
                 
                        <div class="form-group ">
                           <div class="col-sm-3 col-sm-offset-2 pull-right">
                              <button type="button" class="btn" id="cancel_task_modal">Cancel</button>
                              <button type="button" class="btn btn-primary save_task_modal">Save changes</button>
                               
                            <input type="hidden" class="taskid_ee" name="taskid_ee" value="">
                           
                             <input type="hidden" name="project_id" value="{{$project_id}}">
                           
                             <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                           </div>
                        </div>            
                    
              
                  </form>
               </div>
            </div>
            <!-- END panel-->
 <!-- START DATATABLE 2-->

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
                                     
                                       <th>Assigned to</th>
                                       <th>More</th>
                                       <th>Edit</th>
                                       <th>Delete</th>

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

                                      
                                      
                                       <td name="assigned_id"  id="assigned_id">{{$temp->get_task_assigned->first_name}} </td>

                                       <td  name="btn_e" id="btn_e"><button type="button" class="btn_more btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModal">more</button>
                                       <input type="hidden" value="{{$temp->task_ids}}">

                                       </td>

                                       <td  name="btn_e" id="btn_e"><button type="button" class="btn btn-default fa fa-edit btn_edit"
                                       data-toggle="modal" data-target="#edit_task"></button>
                                        <input type="hidden" value="{{$temp->task_ids}}">
                                       </td>
                                       <td  name="btn_d" id="btn_d"><button type="button" class="btn btn-default fa  fa-trash-o btn_delete"></button>
                                       <input type="hidden" value="{{$temp->task_ids}}">
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
 <script src="{{asset('assets/js/im_upload.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
var count={{count($data)}}
var reset_counters=function () {
var m=0;
var table = $('.datatable_task').DataTable();
table.rows().every( function () {
var d = this.data();
//d.counter++; // update data source for the row
//this.invalidate(); // invalidate the data DataTables has cached for this row
m++;
table.row( this ).data( [m,
d[1],
d[2],
d[3],
d[4],
d[5],
d[6],
d[7],
d[8]
] )
} );
// Draw once all updates are done
table.draw(false);
}
//table = $('#datatable2').DataTable( { paging: false} );

       
var task_title_e;var task_desc_e;var task_deadline_e;var task_file_e;var assigned_id_e;var taskid_e;
          var add_task= function(){
            $('.btn_add_task').on("click", function(){
            $('.modal_add_task').show(1000);
          

            $('#cancel_task_modal').on("click", function(){
            $('.modal_add_task').hide(1000); });
             
            $('.save_task_modal').on("click", function(){
              curent_save=$(this).next();
              $('.modal_add_task').hide(1000);
            $.ajax({
              url: "{{url('add_new_tasks')}}",
              data: new FormData($("#upload_form")[0]),
              headers: { 'X-CSRF-TOKEN': $('input[name="_token"]').val() },
              async: false,
              type: 'post',
              processData: false,
              contentType: false,
            success: function (response) {
              
              var prio;
              var obj =$.parseJSON(response); 
                     
              if (obj[0] == 3)  prio="Important";
              if (obj[0] == 1)  prio= "Weak"; 
              if (obj[0] == 2)  prio="Intermediate";

              var t = $('.datatable_task').DataTable();
              var rowIndex = t.row.add([
                      ++count,
               $('.task_title_m').val(),
               prio,
              $('.task_deadline').val(),
               
               $('.Assigned_to :selected').text(),
            
              '<td  name="btn_e" id="btn_e"><button type="button" class="btn_more btn btn-default btn-sm" data-toggle="modal" data-target="#exampleModal">more</button>'+
                '<input type="hidden" value="{{$temp->task_ids}}"> </td>',
              
              '<td  name="btn_e" id="btn_e"><button type="button" class="btn btn-default fa fa-edit btn_edit" data-toggle="modal" data-target="#edit_task"></button>'+
               '<input type="hidden" value="{{$temp->task_ids}}"></td> ',

               '<td  name="btn_d" id="btn_d"><button type="button" class="btn btn-default fa  fa-trash-o btn_delete"></button>'+
                '<input type="hidden" value="{{$temp->task_ids}}"></td>'


              ]).draw(false);
              reset_counters();
              var row = $('.datatable_task').dataTable().fnGetNodes(rowIndex);
              $(row).attr('id', count);
                        add_task();  show_more(); edit_task();save_edit(); delete_ddd();

                
                          }
                       });  // ajax
                 
                        }); // on click 
    });
                                      }

          add_task();          
/////////////////////////////////////////////////////////////////////////////////////////////
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
                       if (obj[0].task_pro == 1)  prio= "Weak"; 
                       if (obj[0].task_pro == 2)   prio="Intermediate";
                    modal_task.find('.t_title_m').text(obj[0].task_title);
                    modal_task.find('.t_Assigned_m').text(obj[0].get_task_assigned.first_name);
                    modal_task.find('.t_priority_m').text(prio);
                    modal_task.find('.t_deadline_m').text(obj[0].task_deadline);
                    modal_task.find('.t_desc_m').text(obj[0].task_desc);
                    modal_task.find('.t_file_m').text(obj[0].task_file);
                    modal_task.find('.t_status_m').text("doaa");
                   modal_task.find('.t_note_m').text(obj[0].task_note);
              
                  $('.history_status').empty();
                              $.each(obj[0].get_status_task, function( key, value ) {
                    
                                var str='<tr>'+
                        '  <td>'+ value.status +'</td>'+
                       
                         '   <td>'+ value.updated_at+'</td> '+ 
                       ' </tr>' 
                       $('.history_status').prepend(str);  

                  });
              add_task();  show_more(); edit_task();save_edit(); delete_ddd();

                          }
                         
                       });  // ajax
             
          });
          }
                            show_more();

  

//////////////////////////////////////////////////////////////////////////////////////
          var edit_task= function(){

            $('.btn_edit').on("click", function(){
              modal_task=$(this).parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent();
              task_id=$(this).next().val();
                  $.ajax({ 
                  method: "POST",
                  url: "{{url('get_task_status')}}",
                  data:
                  {task_id:task_id},
              
                  headers:{

                 'X-CSRF-TOKEN': $('input[name="_token"]').val() },

                  success:function(response){ 
                     var priority;
                     var obj =$.parseJSON(response); 
                   //  alert(response);

                      
                    modal_task.find('.t_title_m'). val(obj[0].task_title);
  // modal_task.find('.t_Assigned_m').val(obj[0].get_task_assigned.first_name);
  //  modal_task.find('input[name="' + t_priority_m+ '"][value="' + obj[0].task_pro+ '"]').prop('checked', true);

              //  $('.t_Assigned_m :selected').text("doaa"),
                  modal_task.find('.t_deadline_m').val(obj[0].task_deadline);
                  modal_task.find('.t_desc_m').val(obj[0].task_desc);
                  modal_task.find('.t_file_m').val(obj[0].task_file);
                  modal_task.find('.task_id').val(obj[0].task_ids);
                  add_task();  show_more(); edit_task();save_edit(); delete_ddd();

                          }
                         
                       });  // ajax
        
          });
          }
          edit_task();
//////////////////////////////////////////////////////////////////////////////////////////

             var save_edit= function(){
               $('.btn_edit_table').on("click", function(){
               var curentt =$(this);
                $.ajax({ 
                  method: "POST",
                  url: "{{url('edit_task_record')}}",
                  data: new FormData($("#upload_form")[0]),
                  async: false,
                  type: 'post',
                  processData: false,
                  contentType: false,
                  headers:{

                 'X-CSRF-TOKEN': $('input[name="_token"]').val() },

                  success:function(response){ 
      
              $('#edit_task').modal('toggle');
              add_task();  show_more(); edit_task();save_edit(); delete_ddd();


                
                          }
                         
                       });  // ajax
                 
                        }); 


                           }
                            save_edit();
//////////////////////////////////////////////////////////////////////////////////////////


          

 var delete_ddd= function(){
            $('.btn_delete').on("click" ,function(){

             var id =$(this).next().val() ;
             var div_delete =$(this).parent().parent();
            
           
 swal({
                     title: "Are you sure?",
                     text: "Your will not be able to recover project record!",
                     type: "warning",
                     showCancelButton: true,
                     confirmButtonClass: "btn-danger",
                     confirmButtonText: "Yes, delete it!",
                     closeOnConfirm: false
                 },
                 function(isConfirm){
                    if(isConfirm){
                         $.ajax({
                             url: "{{url('delete_task')}}",
                             method:"post" ,
                             data:{
                                 task_id: id
                             },
                              headers:{ 'X-CSRF-TOKEN': $('input[name="_token"]').val()
                             }
                             ,success:function(response){

                              var obj = $.parseJSON(response);
                             // alert(response);
                              if(obj.message =="done"){

                               // div_delete.hide();
                        var t = $('.datatable_task').DataTable();
                        t.row(div_delete)
                        .remove()
                        .draw(false);
                        reset_counters();  
                        add_task();  show_more(); edit_task();save_edit(); delete_ddd();
          
                         swal("Deleted!", "Your Task has been deleted.", "success");
                              }
                              else{
                        alert("Sorry there is something error.. it doesn't delete");

}
                             }
                         });

                     }
//                   
                 });
         });
          }

          delete_ddd();

         
});                            
         

</script>

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
.modal_add_task  {display: none;}
.inp_edit {display: none;}

</style>

   <link rel="stylesheet" href="{{asset('assets/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables-colvis/css/dataTables.colVis.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendor/datatables/media/css/dataTables.bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendor/dataTables.fontAwesome/index.css')}}">
  @endsection