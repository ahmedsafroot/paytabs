<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
	

	<div class="copyrights">

		<p>&copy; <?= date('Y') ?> Ahmed Refaat </p>

	</div>

</footer>

<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
$(document).on("change",".category",function() {
	  let parent=$(this);
	  $.ajax({
        url: "Home/get_sups/"+parent.val(), 
        success: function (data) {
		  parent.nextAll().remove();
		  $(".content").append(data);
        }
      })
  })
</script>

<!-- -->

</body>
</html>
