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
               //   $('#myModal').modal('toggle');
                 var str=      '       <div class="col-sm-6">'+
                '      <div class="panel b">'+
                '         <div class="panel-heading">'+
               '           <div class="pull-right">'+
               '           <button type="button" class=" btn btn-dangar" data-toggle="modal" data-target="#delete_model" >Delete</button>'+
                '        </div>'+
                '        <h4 class="m0">'+

               '         <span class="proj_title"> '+$(".add_proj_title").val()+' </span> '+
              '            <span class=" fa fa-edit btn_edit_title"></span>'+
                        
              '            <span class=" fa fa-close  close"></span> '+
                        
              '           <span class="edit_proj_title"> '+
              '           <input id="" type="text" class="edit_title" name=""'+
               '           value='+$(".add_proj_title").val()+'>'+

               '          <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">  '+

                 '         <input id="" type="hidden" class="save_value" name="" value="">'+
                '          <input id="" type="hidden" class="act_id" name="" '+
               '           value="">'+
                '          <input id="" type="hidden" class="project_id" name="" '+
                  '        value="">'+
                   '     </span>    '+         
                        
                    '      </h4>'+
                      '   <small class="text-muted">Sed amet lectus id.</small>'+
                     '</div>'+

'                      <div class="panel-body">'+
  '                       <div class="table-grid table-grid-align-middle">'+
    '                        <div class="col">'+
      '                         <div class="visible-xs visible-sm text-bold text-muted text-right">22%</div>'+
              '                 <div data-toggle="tooltip" data-title="Health">'+
                '                  <div class="progress progress-xs m0">'+
                  '                   <div style="width:22%" class="progress-bar progress-bar-warning">22%</div>'+
                             '    </div>'+
                  '             </div>'+
                 '           </div>'+
                   '         <div class="col wd-xxs text-right hidden-xs hidden-sm">'+
                     '          <div class="text-bold text-muted">22%</div>'+
                       '     </div>'+
                        ' </div>'+
                     ' </div>'+
                     ' <table class="table">'+
                      '   <tbody>'+
                        '    <tr>'+
                          '     <td>'+
                            '      <strong>Start date</strong>'+
                              ' </td>'+
                              ' <td></td>'+
                           ' </tr>'+
                           ' <tr>'+
                             '  <td>'+
                               '   <strong>Members</strong>'+
                              ' </td>'+
                              ' <td>'+
                         
                           ' </td>'+
                           '</tr>'+
                           '<tr>'+
                           '   <td>'+
                            '     <strong>Leader</strong>'+
                             ' </td>'+
                              '<td>'+
                               '  <a href="" data-toggle="tooltip" data-title="Team leader">'+
                                '    <img src="img/user/03.jpg" alt="project member" class="img-circle thumb24">'+
                                ' </a>'+
                             ' </td>'+
                           '</tr>'+
                          ' <tr>'+
                           '   <td>'+
                            '     <strong>Metrics</strong>'+
                             ' </td>'+
                              '<td>'+
                               '  <div data-sparkline="" values="20,80" data-type="pie" data-height="24" data-slice-colors="[&quot;#edf1f2&quot;, &quot;#23b7e5&quot;]" class="sparkline inline mr"></div>'+
                                ' <div data-sparkline="" values="60,40" data-type="pie" data-height="24" data-slice-colors="[&quot;#edf1f2&quot;, &quot;#27c24c&quot;]" class="sparkline inline mr"></div>'+
                                 '<div data-sparkline="" values="90,10" data-type="pie" data-height="24" data-slice-colors="[&quot;#edf1f2&quot;, &quot;#ff902b&quot;]" class="sparkline inline"></div>'+
                              '</td>'+
                          ' </tr>'+
                     '   </tbody>'+
                   '  </table>'+

   
                    ' <div class="panel-footer text-center">'+
                     '  <button type="button" class="btn btn-default edit_project" data-toggle="modal" data-target="#update_all_proj">Edit project</button>'+
                  '   </div>'+
                 ' </div>'+
               '</div>'
                   alert(projectid);
 $('.add_div').prepend(str);
//edit_update_title();
//close_update_title();

 
                          }
                       });  // ajax
                 
                        }); // on click 
  
                                      }

          add_project();
 
