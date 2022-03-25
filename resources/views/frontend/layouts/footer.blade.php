
        <!-- =============FOOTER START============= -->

        <footer class="footer">

            <div class="container">
                <div class="footer-bottom">
                    <div class="footer-copyright">
                        <p>Copyright © <a href="#">myblood.com</a> All Rights Reserved</p>
                    </div>
                    <div class="footer-legal">
                        <ul>
                           <li><a href="#">Terms & Conditions</a></li>
                           <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                   
                </div>
            </div>
            

        </footer> 

        <!-- =============FOOTER START============= -->
    </div>
    <!-- ============== Main Wrapper End ============== -->

</div>
<!-- ============== Outer Wrapper End ============== -->



<!-- ====================== Js file ================== -->

<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/swiper.js')}}"></script>


<!-- ====================== Custom Js file ================== -->

<script type="text/javascript" src="{{asset('frontend/js/slider-scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/custom-js.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/scripts.js')}}"></script>

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