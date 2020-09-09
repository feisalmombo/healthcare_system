
    <footer class="col-lg-12">
        <div class="footer-copyright text-center" style="padding-top: 15px;">
             <strong>Copyright &copy; {{ date('Y') }} Helis Healthcare version 1.0.0 at <a href="http://helis.co.tz"  target="_blank" style="text-decoration: none;">Helis Healthcare</a>.</strong> All Rights Reserved.
         </div>
     </footer>


 </div>

 <!-- /#wrapper -->

 <!-- jQuery -->
   <script src="{{asset('temp/vendor/jquery/jquery.min.js')}}"></script> 
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--> <!-- https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js     https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js -->
<script src="{{asset('temp/js/permission_ajax.js')}}"></script>
<script src="{{asset('temp/js/searchByAtm_ajax.js')}}"></script>
<script src="{{asset('temp/js/finance_ajax.js')}}"></script>
 <!-- Bootstrap Core JavaScript -->
  <script src="{{asset('temp/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
 <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

 <!-- Metis Menu Plugin JavaScript -->
 <script src="{{asset('temp/vendor/metisMenu/metisMenu.min.js')}}"></script>

 <!-- Morris Charts JavaScript -->
 <script src="{{asset('temp/vendor/raphael/raphael.min.js')}}"></script>
 <script src="{{asset('temp/vendor/morrisjs/morris.min.js')}}"></script>
 <script src="{{asset('temp/data/morris-data.js')}}"></script>

 <!-- Custom Theme JavaScript -->
 <script src="{{asset('temp/dist/js/sb-admin-2.js')}}"></script>

 <!-- DataTables JavaScript -->
<script src="{{asset('temp/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('temp/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>

 <script src="{{asset('temp/vendor/datatables-responsive/dataTables.responsive.js')}}"></script> 

 <!-- {{-- <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('js/jquery-3.3.1.js')}}"></script>  --}} -->
 <!-- CKeditor -->
<script src="{{asset('unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script> 
     <script>
        CKEDITOR.replace( 'articleckeditor' );
    </script> 

<script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
        <script>
       $('textarea').ckeditor();
       // $('.textarea').ckeditor(); // if class is prefered.
        </script> 
 <!-- Page-Level Demo Scripts - Tables - Use for reference -->
 
 <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    function hid() {
        var soln = document.getElementById("sol");
         var savebt = document.getElementById("savebtn");
        if (soln.style.display === "none") {
            soln.style.display = "block";
            savebt.style.display ="none";
        } else {
            soln.style.display = "none";
        }
    }

CKEDITOR.replace( 'articleckeditor' ); 
  
    $(document).ready(function() {
    var table = $('#example').DataTable();
     
    $('#example tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        alert( 'You clicked on '+data[0]+'\'s row' );
    } );
} );
</script>


</body>
</html>
