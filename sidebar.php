	<div id="sidebar" style="background:#fff">
		<div class="sub-sidebar">
			
			<br/>
			<center>
				<a href="#"><img src='ads/ads1.jpg' width='310' height='200'></a>
			</center>
			
			<h2>Tutorial Popular Liu</h2>
			<ul>
				<?php 
					include "koneksi.php";
					$populer = mysql_query("SELECT * FROM tbl_berita ORDER BY view DESC LIMIT 5");
					while ($p = mysql_fetch_array($populer)){
						echo "<li><a href='detail-berita.php?id=$p[id_berita]'>
									  $p[judul_berita] - (<i style='color:red'>Lee Dala $p[view] Ona</i>)
								  </a>
							  </li>";
					}
				?>
			</ul>
			
			<h2>Kategoria</h2>
			<ul>
				<?php 
					$kategori = mysql_query("SELECT * FROM tbl_kategori");
					while ($p = mysql_fetch_array($kategori)){
						echo "<li><a href='detail-kategori.php?id=$p[id_kategori]'>
									  $p[nama_kategori]
								  </a>
							  </li>";
					}
				?>
			</ul>
			
			
		</div>
	</div>