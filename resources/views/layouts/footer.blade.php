 <!-- Footer Start -->
 <div class="container-fluid pt-4 px-4 position-sticky fixed-bottom bottom-0 top-100">
     <div class="bg-light rounded-top p-4">
         <div class="row">
             <div class="col-12 col-sm-6 text-center text-sm-start">
                 &copy; <a href="https://kebunkomunal.id" target="blank">Kebun Komunal</a>, All Right Reserved.
             </div>
             <div class="col-12 col-sm-6 text-center text-sm-end">
                 <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                 Created By <a href="https://www.instagram.com/virtualstudio.id/" target="blank">Virtual Studio</a>
                 </br>

             </div>
         </div>
     </div>
 </div>
 <!-- Footer End -->
 </div>
 <!-- Content End -->


 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 </div>

 <!-- JavaScript Libraries -->
 <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')  }}"></script>
 <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
 <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
 <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
 <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
 <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>


 <!-- Template Javascript -->
 <script src="{{ asset('js/main.js') }}"></script>

 <!-- calender -->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/id.js"></script>


 <script>
    function updateViewBox() {
        var svg = document.getElementById('my-svg');
        var width = window.innerWidth;
        var height = window.innerHeight;
        
        if (width <= 600) {
            svg.setAttribute('viewBox', '0 0 1440 1080');
        } else {
            svg.setAttribute('viewBox', '0 0 1440 150');
        }
    }
    
    window.addEventListener('resize', updateViewBox);
    updateViewBox(); // Panggil fungsi ini sekali agar viewBox diperbarui saat halaman dimuat
</script>
 </body>

 </html>