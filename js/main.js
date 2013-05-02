<script>
       $(document).ready(function(){
              $.getJSON('cancer.json',function(data){
                     var jstitle = "";
                     var jsdescription = "";
                     var jstabone = "";
                     var jstabtwo = "";

                     $.each(data, function (key, val) {
                             jstitle += val.title,
                             jsdescription += val.description,
                             jstabone += val.tab_one,
                             jstabtwo += val.tab_two

                     });
                     
                     $('#c-title').html(jstitle),
                     $('#c-description').html(jsdescription),
                     $('#tabs-1').html(jstabone),
                     $('#tabs-2').html(jstabtwo);

              }); // getJSON

       }); // ready
</script>
