<div id="header">
<script type="text/javascript" src="js/slideshow.js"></script>
<script type="text/javascript" src="js/utilities.js"></script>



<div id='imgSShow' align='center'>
<img width="1000px" src='images/header.jpg' alt='large image' name='SLIDESIMG' id='SLIDESIMG' style='opacity: 1;'>
<script type='text/javascript'>
  SLIDES = new slideshow('SLIDES');
  SLIDES.timeout = 5000;
  SLIDES.prefetch = 1;
    s = new slide();
  s.src = 'images/header.jpg';
  SLIDES.add_slide(s);
  s = new slide();
  s.src = 'images/header1.jpg';
  SLIDES.add_slide(s);

  s = new slide();
  s.src = 'images/header2.jpg';
  SLIDES.add_slide(s);

  SLIDES.image = document.images.SLIDESIMG;
  SLIDES.pre_update_hook = function() { YAHOO.util.Dom.setStyle('SLIDESIMG','opacity','0.4'); return; }
  SLIDEanim = new YAHOO.util.Anim('SLIDESIMG', { opacity: { to: 1, from:0.4 } }, 1, YAHOO.util.Easing.easeOut);
  SLIDES.post_update_hook = function() { SLIDEanim.animate(); return; }
  SLIDES.update();
  YAHOO.util.Event.addListener('body', 'onload', SLIDES.play());
</script>
</div>
<div id='logo'>
<img src='ads/logo_copy3.png' >
</div>
		<ul id="menu">
		<?php 
			include "koneksi.php";
			$menu = mysql_query("SELECT * FROM tbl_menu ORDER by id_menu ASC");
			while ($m = mysql_fetch_array($menu)){
				echo "<li><a href='$m[link_menu]'>$m[nama_menu]</a></li>";
			}
		?>
			
		</ul>
	</div>