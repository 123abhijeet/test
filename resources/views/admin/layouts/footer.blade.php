   <!-- footer content -->
   <footer>
       <div class="pull-right">
           <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright &copy;<script>
                   document.write(new Date().getFullYear());
               </script> All rights reserved</span>

       </div>
       <div class="clearfix"></div>
   </footer>
   <!-- /footer content -->
   </div>
   </div>

   <!-- jQuery -->
   <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
   <!-- Bootstrap -->
   <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
   <!-- FastClick -->
   <script src="{{asset('admin/vendors/fastclick/lib/fastclick.js')}}"></script>
   <!-- NProgress -->
   <script src="{{asset('admin/vendors/nprogress/nprogress.js')}}"></script>
   <!-- Chart.js -->
   <script src="{{asset('admin/vendors/Chart.js')}}/dist/Chart.min.js')}}"></script>
   <!-- jQuery Sparklines -->
   <script src="{{asset('admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
   <!-- easy-pie-chart -->
   <script src="{{asset('admin/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
   <!-- bootstrap-progressbar -->
   <script src="{{asset('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
   @stack('js')
   <!-- Custom Theme Scripts -->
   <script src="{{asset('admin/build/js/custom.min.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
     $(document).ready(function() {
            toastr.options.timeOut = 5000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
</script>

   </body>

   </html>