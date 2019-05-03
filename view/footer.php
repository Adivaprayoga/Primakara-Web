<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/app.js"></script>
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

</script>
</body>
</html>
