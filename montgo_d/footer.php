<!-- START ADVERT BLOCK -->
<div style="margin-top:1.2em;"></div>
<!-- END ADVERT BLOCK -->
<?php wp_footer(); ?>
<footer id="footer">
	<div class="copyright">&copy; <a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a> | Powered by WordPress | Theme: <a href="https://github.com/blyamur/Montgo-Dark/">Montgo Dark</a></div> 
</footer>
<script>
function change(idName) {
  if(document.getElementById(idName).style.display=='none') {
    document.getElementById(idName).style.display = '';
  } else {
    document.getElementById(idName).style.display = 'none';
  }
  return false;
   }

</script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
</body>
</html>