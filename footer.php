<?php get_header();?>
</body>

  <footer id="footer">
      <p class="copyrights">© UNO PHOTOGRAPHY | ALL RIGHTS RESERVED</p>
      <div class="social-networks clearfix">
          <a href="#">
              <span>FACEBOOK</span>
              <i class="facebook-icon icon1-facebook"></i>

          </a>
          <a href="#">
              <span>TWITTER</span>
              <i class="twitter-icon icon1-twitter"></i>
          </a>
          <a href="#">
              <span>PINTEREST</span>
              <i class="pinterest-icon icon3-pinterest"></i>
          </a>
          <a href="#">
              <span>INSTAGRAsM</span>
              <i class="instagram-icon icon3-instagram"></i>
          </a>
      </div>

  </footer>


<script>

  document.addEventListener('aos:in:super-duper', ({ detail }) => {
    console.log('animated in', detail);
  });

  AOS.init({
    duration: 1200,
  });

  document.addEventListener('aos:out', ({ detail }) => {
    console.log('animated out', detail);
  });


  window.addEventListener('load', (event) => {
    console.log('page is fully loaded');
    window.scrollTo(0,0);

    // setTimeout(function() { window.scrollTo(0, 0); }, 100);


  });

</script>
</html>
