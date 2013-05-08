    <script> 
    $(function() {
        
        $( "#tabs" ).tabs();

    });
    // $(function() {
    //           $('.main-nav a').click(function() {
    //                $('main-nav a').removeClass('onpg');
    //                $(this).addClass('onpg');
    //             });
    //         });
    $(function() {
        var loc = window.location.href; // returns the full URL
            if(/welcome/.test(loc)) {
                $('#wel-page').addClass('onpg');
            }
            if(/learnmore/.test(loc)) {
                $('#learn-page').addClass('onpg');
            }
            if(/generalinfo/.test(loc)) {
                $('#gen-page').addClass('onpg');
            }
            if(/preventative/.test(loc)) {
                $('#pre-page').addClass('onpg');
         }
    });
    </script>


    </div>  <!-- wrap -->   
    </body>
</html>