@if(session('first_name')==null)
<script> window.location= "{{url('/')}}";</script>
@endif

@if(session('role')==0)
<script> 
alert("cann't access");
window.location= "{{url('dash')}}";</script>

@endif


@extends('master.page')

@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Add new project</h4>
      </div>
      
      <div class="modal-body">
        <form>
        
    <fieldset>
                        <div class="form-group row">
                           <label for="recipient-name" class="col-sm-3 control-label">Project creater:</label>
                           <div class="col-sm-9">
                    <label for="recipient-name" id="recipient-name" class="control-label">
                    {{session('first_name')}} {{session('father_name')}} {{session('Last_name')}}</label>
                           </div>
                        </div>
                     </fieldset>


           <fieldset>
                        <div class="form-group row">
                           <label for="recipient-name" class="col-sm-3 control-label">Project title:</label>
                           <div class="col-sm-9">
                              <input id="recipient-name" type="text" name="description" class="add_proj_title form-control">
                           </div>
                        </div>
            </fieldset>

           <fieldset>
                        <div class="form-group row">
                           <label for="recipient-name" class="col-sm-3 control-label">Project description:</label>
                           <div class="col-sm-9">
                              <textarea class="add_proj_desc form-control" rows="5" id="comment"></textarea>
                           </div>
                        </div>
                     </fieldset>


           <fieldset>
                        <div class="form-group row">
                           <label for="recipient-name" class="col-sm-3 control-label">Invite member:</label>
                           <div class="col-sm-9 add_more row">
                       
    <input type="hidden" name="count" value="1" />
        <div class="control-group" id="fields">
           
            <div class="controls" id="profs"> 
                <form class="input-append">

                    <div id="field">
                    <input style=" width:90%;" autocomplete="off" class="input form-control col-sm-10" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/>

                    <button id="b1" class="btn add-more" type="button">+</button></div>
                </form>
            <br>
           
            </div>
        </div>
  </div>
</div>
                      
                     </fieldset>


         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close_modal"  data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn_add_data">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_invite_member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Invite New Membsrs</h4>
      </div>
      
      <div class="modal-body">
        <form>
          
          <div class="row form-group"> 
          <div class="col-sm-10">
     <input type="text" class=" form-control email_member" id="recipient-name"
     placeholder="Enter E-mail of member">
 </div>
 <div class="col-sm-2">
    <button type="button" class="btn btn-primary btn_add_member">Add</button> 
 <input type="hidden" class="act_id" value="{{session('act_id')}}">
 <input type="hidden" class="act_id" value="{{session('act_id')}}">
    </div>
          </div>
<br>

          <table class="table display_email">
  <thead>
    <tr>
    <th>#</th>
      <th>email</th>
      <th>project code</th>
      <th>Resend Email</th>
    </tr>
  </thead>
  <tbody class="add_invite_member_table" id="add_invite_member_table">

  </tbody>
</table> 
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close_modal"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade edit_project_table" id="update_all_proj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit project</h4>
      </div>
      <div class="modal-body">
        <form>
         
  <fieldset>
                        <div class="form-group row">
                           <label for="recipient-name" class="col-sm-3 control-label">Project creater:</label>
                           <div class="col-sm-9">
                    <label for="recipient-name" id="recipient-name" class="control-label">
                    {{session('first_name')}} {{session('father_name')}} {{session('Last_name')}}</label>
                           </div>
                        </div>
                     </fieldset>


           <fieldset>
                        <div class="form-group row">
                           <label for="recipient-name" class="col-sm-3 control-label">Project title:</label>
                           <div class="col-sm-9">
                              <input id="recipient-name" type="text" name="edit_pro_title" class=" form-control edit_pro_title" value="">
                           </div>
                        </div>
            </fieldset>

           <fieldset>
                        <div class="form-group row">
                           <label for="recipient-name" class="col-sm-3 control-label">Project description:</label>
                           <div class="col-sm-9">
                              <textarea class="edit_pro_desc form-control" rows="5" id="comment" ></textarea>
                           </div>
                        </div>
                     </fieldset>

         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close_modal"  data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn_update_projects">Edit</button>
      </div>
    </div>
  </div>
</div>

@endsection 

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
                        <div class="pull-right">
                        <button type="button" class="btn btn-info btn-sm editt_project"  data-target="#update_all_proj">Edit</button>
                      
                        <button type="button" class=" btn  btn-sm btn-warning btn_delete" >Delete</button>
                         <input id="" type="hidden" class="project_id" 
                         value="{{$temp->project_id}}">

                        </div>

                         <h4 class="m0">

                        <span class="proj_title"> Project # <?php echo $a++; ?></span>
                
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
                        <span class="pull-right fa fa-edit btn_edit_title"></span>
                        
                         <span class="pull-right fa fa-close  close"></span> 
                        
                        <span class="edit_proj_title"> 
                        <input id="" type="text" class="edit_title" name=""
                         value="{{$temp->project_title}}">

                        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"> 
                          <input id="" type="hidden" class="act_id" name="" 
                         value="{{session('act_id')}}">
                         <input id="" type="hidden" class="project_id" name="" 
                         value="{{$temp->project_id}}">
                         </span>

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
                                 <a href="" data-toggle="tooltip" data-title="Team leader">
                                   {{$temp2->get_account_details->first_name}}|
                                     
                                 </a>
                                     @endforeach
                                 </span>
                                 <br>
                        
                          

              <span class="fa fa-plus pull-right invite_member" data-toggle="modal" data-target="#modal_invite_member" > </span>
              <input id="" type="hidden" class="project_id" value="{{$temp->project_id}}">
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
                        </tbody>
                     </table>
                     <div class="panel-footer text-center">
                        <button type="button" class="btn btn-default edit_project" data-toggle="modal" data-target="#update_all_proj">Manage Member</button>

                          <button type="button" class="btn btn-default display_more" data-toggle="modal" data-target="#update_all_proj">Display more</button>
                     </div>
                  </div>
               </div>
               @endforeach
         </div>
  </div>  

      @endsection



@section('page_level_js')

<script>



$(document).ready(function(){
  var project_id_table;
  var current_proj_invite_member;
  var edit_project_id ;
  var inp_project_title;
  var inp_project_desc;
 var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input style=" width:90%;"  autocomplete="off" class="input form-control col-sm-10" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    


    $('.add_more_inv').click(function(){



     var str= '             <div class="col-sm-10">'+
               
              '              <input id="recipient-name" type="text" name="description" class="add_invite_member form-control" placeholder="Enter email of invited member">'+
               '                </div>'+
                '             <div class="col-sm-2">'+   
              '<button class="fa fa-plus-circle  btn add_more_inv"></button>'+
 '</div>'

                           $('.add_more').append(str);
                                $('#exampleModal').show();
     
     });

   var edit_update_title= function(){ 
    $('.btn_edit_title').click(function(){
      var curent =$(this);
        $(this).hide();
        $(this).prev().hide();
        $('.close').hide();
        $(this).next().show();
        $('.edit_title').hide();
        $(this).next().next().children('.edit_title').show();
      /******************************************* */
        var update_title= function(){ 
        $('.edit_title').on('keypress', function(e) {
        var code = e.keyCode || e.which;
          if(code==13){

        $.ajax({ 
                  method: "POST",
                  url: "{{url('update_title_project')}}",
                  data: {
                  proj_id:curent.next().next().children('.project_id').val(),
                   proj_title: curent.next().next().children('.edit_title').val(),
                   },

                  headers:{
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                   },

                  success:function(response){
                  var obj =$.parseJSON(response);          
                  curent.prev().text(obj.message).show();
                  $('.edit_title').hide();
                  curent.show();
                 $('.close').hide();
            
                      }
                      
                       });  // ajax 
                           } 

                         });
                }
                update_title();
          });
  }
  edit_update_title();
    /******************************************* */
     var close_update_title= function(){
        $(".close").click(function(){
        $(this).hide();
        $(this).prev().prev().show();
        $(this).prev().show();
        $(this).next().children('.edit_title').hide();
         });
      }
      close_update_title();


        var add_project= function(){
            $('.btn_add_data').on("click", function(){
              $.ajax({ 
                  method: "POST",
                  url: "{{url('add_new_project_m')}}",
                  data: {
                  add_proj_title: $(".add_proj_title").val(),
                  act_id: $(".act_id").val(),
                  add_proj_desc: $(".add_proj_desc").val(),
                   },

                  headers:{ 'X-CSRF-TOKEN': $('input[name="_token"]').val() },

                  success:function(response){ 
                  $('.close_modal').click();
                  var obj =$.parseJSON(response);
                 var projectid= obj.data;
             
                 var str=   '     <div class="col-sm-4 "> <div class="panel b">'+
                '         <div class="panel-heading"><fieldset>'+
               '           <div class="pull-right">'+
                '   <button type="button" class="btn btn-info editt_project" data-toggle="modal" data-target="#update_all_proj">Edit</button>'+
                      
                '        <button type="button" class=" btn btn-warning btn_delete" >Delete</button>'+
                '         <input id="" type="hidden" class="project_id" value="'+projectid+'">'+

                  '      </div>'+

                '        <h4 class="m0">'+
 ' <span class="proj_title"> Project # </span>'+
              ' </h4> '+
                     '</div>'+



                     ' </fieldset><table class="table">'+
                      
                      '     <tbody class="t_title">'+
                     '    <tr class="tr_title">'+

                    '     <td>'+
                    '     <strong class="pro_na">Project name :</strong>'+
                    '     </td>'+
                     '    <td class="td_title">'+
                    '     <span class="projcts_title">'+ $(".add_proj_title").val()+'</span>'+
                   '      <span class="pull-right fa fa-edit btn_edit_title"></span>'+
                        
                   '       <span class="pull-right fa fa-close  close"></span> '+
                        
                   '      <span class="edit_proj_title"> '+
                   '      <input id="" type="text" class="edit_title" name="" value="'+ $(".add_proj_title").val()+'">'+

                    '     <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"> '+
                   '   <input id="" type="hidden" class="act_id" name="" value="'+$(".act_id").val()+'">'+
                   '  <input id="" type="hidden" class="project_id" name="" value="'+projectid+'">'+
                    '      </span>'+

                   '       </td>'+
                  '     </tr>'+

                       '<tr>' +
                       '       <td>'+
                        '          <strong>Start date :</strong>'+
                       '        </td>'+
                      '         <td>'+ obj[0].created_at+'</td>'+
                     '       </tr>'+
                      
                       '        <td>' +
                         '         <strong>Members :</strong>' +
                      '         </td>' +
                      '         <td>' +

                               
                       '           <a href="" data-toggle="tooltip" data-title="Team leader">' +
                                    
                        '          </a>     ' +               

             '   <span class="fa fa-plus pull-right invite_member" data-toggle="modal" data-target="#modal_invite_member" > </span> ' +
             '   <input id="" type="hidden" class="project_id" name="" value="'+projectid+'"> ' +
                            '  </td> ' +
                            '   <td> ' +
                            
                          '     </td> ' +
                          '   </tr> ' +
                         '    <tr> ' +
                         '       <td> ' +
                         '          <strong>Project description :</strong> ' +
                            '    </td> ' +
                              '  <td> ' +
                             '  <span class="projectdesc text_desc_project">'+$(".add_proj_desc").val()+'</span> ' +
                             '   </td> ' +
                           '  </tr> ' +
                        '  </tbody> ' +
                      ' </table> ' +
            
                         

   
                    ' <div class="panel-footer text-center">'+
                     '  <button type="button" class="btn btn-default edit_project" data-toggle="modal" data-target="#update_all_proj">Manage Member</button>'+

                     '  <button type="button" class="btn btn-default display_more " data-toggle="modal" data-target="#update_all_proj">Display more</button>'+

                  '   </div>'+
                 '</div> </div>'  
               
              
 $('.add_div').prepend(str);
edit_update_title();
close_update_title();

 
                          }
                       });  // ajax
                 
                        }); // on click 
  
                                      }

          add_project();
 

  /******************************************* */
 var delete_ddd= function(){
            $('.btn_delete').on("click" ,function(){

             var id =$(this).next().val() ;
             var div_delete =$(this).parent().parent().parent().parent();
            
           
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
                             url: "{{url('delete_project')}}",
                             method:"post" ,
                             data:{
                                 project_id: id
                             },
                              headers:{ 'X-CSRF-TOKEN': $('input[name="_token"]').val()
                             }
                             ,success:function(response){

                              var obj = $.parseJSON(response);
                             // alert(response);
                              if(obj.message =="done"){

                                div_delete.hide();
                                  
                         swal("Deleted!", "Your imaginary file has been deleted.", "success");
                              }
                             }
                         });

                     }
//                   
                 });
         });
          }

          delete_ddd();
          

   /******************************************* */
    /******************************************* */
      
      var edit_all_proj= function(){
            $('.editt_project').on("click",  function () {
              project_id_table=$(this);
           edit_project_id=$(this).next().next().val();
            inp_project_title= $(this).parent().parent().parent().children('.table').children('.t_title').find('.projcts_title').text();
             $('.edit_project_table').modal('toggle');

            title_modal=$('.editt_project').parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().find('.edit_pro_title');

            desc_modal=$('.editt_project').parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().find('.edit_pro_desc');

          

         
              $.ajax({ 
                  method: "POST",
                  url: "{{url('get_project')}}",
                  data: {
                  project_id: edit_project_id,
                   },

                  headers:{ 'X-CSRF-TOKEN': $('input[name="_token"]').val() },

                  success:function(response){ 
                   //  inp_project_title.text("doaa");
                   
                     var obj = $.parseJSON(response);
                   title_modal.val(obj[0].project_title);
                   desc_modal.val(obj[0].project_desc);        
                  
                          }
                         
                       });  // ajax
                 
                        }); // on click 
  
                                      }
          edit_all_proj();

   

  var update_all_project= function(){
            $('.btn_update_projects').on("click", function(){
              curent_2 = $(this);
            pro_title_table=project_id_table.parent().parent().parent().parent().find('.projcts_title');
            pro_desc_table=project_id_table.parent().parent().parent().parent().find('.projectdesc');

            update_projtitle= curent_2.parent().parent().find('.edit_pro_title').val();
            update_projdesc=  curent_2.parent().parent().find('.edit_pro_desc').val()

              $.ajax({ 
                  method: "POST",
                  url: "{{url('update_all_project')}}",
                  data: {
                    proj_id:edit_project_id,
              update_projtitle:update_projtitle,
              update_projdesc:update_projdesc,
                   },

                  headers:{

                 'X-CSRF-TOKEN': $('input[name="_token"]').val() },

                  success:function(response){ 
                
                 
                  $('#update_all_proj').modal('toggle');
                  
              pro_title_table.text(update_projtitle);
              pro_desc_table.text(update_projdesc);
                   alert(response);  

                          }
                         
                       });  // ajax
                 
                        }); // on click 
  
                                      }
          update_all_project();
  /******************************************* */


var get_invited_member_fun= function(){
 current_proj_invite_member="";
            $('.invite_member').on("click", function(){
            current_proj_invite_member=$(this).next().val();
              $.ajax({ 
                  method: "POST",
                  url: "{{url('get_invited_member')}}",
                  data: {
                    project_id_fk3:current_proj_invite_member,

                   },
                  headers:{
        'X-CSRF-TOKEN': $('input[name="_token"]').val() },
                  success:function(response){ 
$("#add_invite_member_table").empty();

                    var obj = $.parseJSON(response);
                   $.each(obj, function( key, value ) {
                           var str='<tr class="inv_table">'+
     '<th scope="row"></th>'+
      ' <td><span class="email_inv">'+ value.email +' </span> </td>'+
      '  <td><span class="code_rand_inv"> '+ value.code_rand +'</span> </td>'+
       '  <td><button type="button"'+
       '   class="btn btn-sm btn-default resendinvitaion">resend</button>'+
      ' <input id="" type="hidden" class="invite_id" value="'+ value.invite_id+'">'+ 
      '</td>'+
   ' </tr>'
            $('.add_invite_member_table').prepend(str);
       
});
                resend_inv();
                invite_member_fun();
                          }
                         
                       });  // ajax
                
                        }); // on click 
  
                                   }
          get_invited_member_fun();

 var invite_member_fun= function(){

  $('.btn_add_member').on("click", function(){

      var curent_4=$(this);
              $.ajax({ 
                  method: "POST",
                  url: "{{url('add_invited_member')}}",
                  data: {
                project_id_fk3:current_proj_invite_member,
                email : curent_4.parent().prev().children('.email_member').val(),
               act_id_fk3 :curent_4.next().val(),

                   },
                  headers:{
                 'X-CSRF-TOKEN': $('input[name="_token"]').val() },
                  success:function(response){ 

                var obj = $.parseJSON(response);
                var email_inv= curent_4.parent().prev().children('.email_member').val();
                var invite_id=obj.invite_id; 
                var code_rand=obj.code_rand;

                    var str='<tr class="inv_table">'+
                   '<th scope="row"></th>'+
      ' <td><span class="email_inv">'+ email_inv +' </span> </td>'+
      '  <td><span class="code_rand_inv"> '+ code_rand +'</span> </td>'+
       '  <td><button type="button"'+
       '   class="btn btn-sm btn-default resendinvitaion">resend</button>'+
      ' <input id="" type="hidden" class="invite_id" value="'+invite_id+'">'+ 
      '</td>'+
   ' </tr>'
                         $('.add_invite_member_table').prepend(str);

             invite_member_fun();
              resend_inv();
                           
                          //alert(response);

                          }
                         
                       });  // ajax
                 
                        }); // on click 
  
                                   }
          invite_member_fun();

   /******************************************* */
var resend_inv= function(){
 
 $('.resendinvitaion').on("click", function(){
    curent_3=$(this);
    inv_id=curent_3.next().val();
              $.ajax({ 
                  method: "POST",
                  url: "{{url('resend_code')}}",
                  data: {
               inv_id:inv_id,
                   },
                  headers:{
                 'X-CSRF-TOKEN': $('input[name="_token"]').val() },
                  success:function(response){ 
                    var code_rand = $.parseJSON(response);
                   
            curent_3.parent().parent().find('.code_rand_inv').text(code_rand);
           


                          }
                         
                       });  // ajax
                 
                        }); // on click 
  }
          resend_inv();
});
</script>

<script src="{{asset('assets/vendor/sweetalert/dist/sweetalert.min.js')}}"></script>
@endsection


@section('page_level_css')
  <link rel="stylesheet" href="{{asset('assets/vendor/sweetalert/dist/sweetalert.css')}}">

 <style type="text/css">
.edit_title  {display: none;
 padding: 6px 7px;
    
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;}
.close{display: none;}

* {
  .border-radius(0) !important;
}

#field {
    margin-bottom:20px;
}

.text_desc_project {
  display: block;
  width: 100px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
</style>
  @endsection

  
  