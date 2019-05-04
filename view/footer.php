    <!-- footer -->
    <footer class="footer-area">
      <p>
        Copyright &copy; 2019 Created By
        <a href="https://github.com/Adivaprayoga" target="_blank">Adivaprayoga</a>.
      </p>
    </footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/app.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typeit@6.0.2/dist/typeit.min.js" /></script>
<script type="text/javascript">

AOS.init();

window.addEventListener("DOMContentLoaded",function() {
  var instance = new TypeIt('#simpleUsage', {
    speed: 50,
    loop: true,
    waitUntilVisible: true
  }).go();
});


$(document).ready(function(){
  $('.content-picture').slick({
    dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true
  });
});

</script>
</body>
</html>
