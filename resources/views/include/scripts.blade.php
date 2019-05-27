
  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::to('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/app.js')}}"></script> 

<script type="text/javascript">
  function galleryFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
  }
</script>
<!-- 
<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script> -->