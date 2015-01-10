<div class="container">
<div class="row">
	<div class="col l9">
	<?php for($i=1;$i<=9;$i++){?>
		<div class="col s12 m12 l4">
			<div class="card">
				<div class="card-image">
				<?php echo $this->Html->image('portfolio/kaoix-site/test.png'); ?>
				</div>
				<div class="card-content">
				<div class="card-title activator grey-text text-darken-4">Card Title<i class="mdi-navigation-more-vert right"></i></div>
				<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
				<span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
				<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>
<?php } ?>
	</div> <!-- End col l9 portfolio card -->

	<div class="col l3 hide-on-med-and-down">
		<div class="profile">
			<span class="h1">I am Sadayu Thongchan<br>and </span><span class="h2"><strong><span class="txt-rotate" data-period="2000" data-rotate='[ "I am a Programmer.", "I love programming." ]'></span></strong></span>
			<div class="line"></div>
			<span class="h1"><strong>I'm so happy you're visiting</strong></span>
			<p>My name is Alexey Abramov. I'm a graphic designer,living in Moscow and working with clients from all over the world. <br><br>
			   I sincerely believe that every business must have a unique identity and every work needs to be attractive and eye-catching. 
			   That's why i create memorable, user-friendly web sites, vivid identities, rich illustrations and high quality prints for 
			   all types of businesses and personalitie</p>
			<div class="line"></div>
			<span class="h1"><strong>My Skill</strong></span>
			<p>
				<i class="mdi-toggle-check-box"></i>Experience in Flat PHP Programming<br>
				<i class="mdi-toggle-check-box"></i>Experience in CakePHP Programming<br>
				<i class="mdi-toggle-check-box"></i>Experience in Git(Github)<br>
				<i class="mdi-toggle-check-box"></i>Experience in Java Script, Ajax, CSS<br>
			</p>
		</div> <!-- End profile -->
	</div> <!-- End col l3  -->
</div> <!-- End row -->
</div> <!-- End container -->
