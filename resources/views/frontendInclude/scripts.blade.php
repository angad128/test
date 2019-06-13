
  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::to('js/jquery.min.js')}}"></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/app.js')}}"></script> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  function galleryFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
  }
</script>


 <script>
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 6,
      "bLengthChange": false,
    });
} );
 </script>