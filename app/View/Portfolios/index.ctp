<div class="row">
	<div class="col l9">
	<?php for($i=1;$i<=9;$i++){?>
		<div class="col s12 m6 l4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
				<?php echo $this->Html->image('test.png'); ?>
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
			<div class="profile-image">
				<?php //echo $this->Html->image('my-resize.jpg',array('class' => 'z-depth-1')); ?>
			</div>
			<div>
			<h5>Hi and welcome!</h5>
			<div class="line"></div>
			</div>
		</div>
	</div> <!-- End col l3 profile -->
</div> <!-- End row -->
