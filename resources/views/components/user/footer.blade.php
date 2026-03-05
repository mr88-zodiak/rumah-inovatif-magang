</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Pranala</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Kementerian Komunikasi dan Informatika RI</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Badan Pengembangan SDM Kominfo</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Diploy</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Beasiswa Kominfo</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Digileader</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Indeks Masyarakat Digital Indonesia</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Digitalent</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Informasi</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Program</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Digitalent Mobile</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <p>Sosial Media</p>
          <div class="social-links mt-3">
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-youtube"></i></a>
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            <a href="#" class="twitter"><i class="bx bxl-tiktok"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      Copyright &copy; 2024<strong><span> Badan Pengembangan SDM Kominfo</span></strong>
    </div>
    <div class="credits">        
      Designed by Dadang & Prasetyou
    </div>
  </div>
</footer><!-- End Footer -->

<form action="{{route('auth')}}" method="post">
  @csrf
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-body">
              <input type="email" name="email" id="" placeholder="Email" class="w-100 form-control mb-2">
              <input type="password" name="password" id="" placeholder="Password" class="w-100 form-control  mb-2">
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </div>
      </div>
  </div>
</form>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

{{-- JS --}}
<script src="{{url("assets/template/user/assets/vendor/purecounter/purecounter_vanilla.js")}}"></script>
<script src="{{url("assets/template/user/assets/vendor/aos/aos.js")}}"></script>
<script src="{{url("assets/template/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="{{url("assets/template/user/assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
<script src="{{url("assets/template/user/assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
<script src="{{url("assets/template/user/assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
<script src="{{url("assets/template/user/assets/vendor/waypoints/noframework.waypoints.js")}}"></script>
<script src="{{url("assets/template/user/assets/vendor/php-email-form/validate.js")}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Template Main JS File -->
<script src="{{url("assets/template/user/assets/js/main.js")}}"></script>
</body>

</html>