
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

   