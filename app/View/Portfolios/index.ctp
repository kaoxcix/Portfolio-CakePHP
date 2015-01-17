<div class="container">
<div class="row">
	<div class="col l9">
	<?php 
		foreach($portfolio as $index => $portfolio){
		$title = $this->Text->truncate(str_replace('_',' ',$portfolio['Portfolio']['title']), 30, array('ellipsis' => '...','exact' => false));
		$detail = str_replace('_',' ',$portfolio['Portfolio']['detail']);
		$cover = 'portfolio/'.$portfolio['Portfolio']['title'].'/image02.jpg'; 
	?>
	    
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <?php echo $this->Html->image($cover); ?>
              <span class="card-title"><?php echo $title; ?></span>
            </div>
            <div class="card-content">
              <p><?php echo $detail; ?></p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
	<!-- 
		<div class="col s12 m6 l4">
			<div class="card">
				<div class="card-image">
				<?php echo $this->Html->image($cover); ?>
				</div>
				<div class="card-content">
				<div class="card-title activator grey-text text-darken-4">
					<?php echo $title; ?>
					<i class="mdi-navigation-more-vert right"></i></div>
				<p><a href="#" class="test">More image</a></p>
				</div>
				<div class="card-reveal">
				<span class="card-title grey-text text-darken-4"><?php echo $title; ?><i class="mdi-navigation-close right"></i></span>
				<p><?php echo $portfolio['Portfolio']['detail']; ?></p>
				</div>
			</div>
		</div>
	-->
	<?php } ?>
	
	</div> <!-- End col l9 portfolio card -->

	<div class="col l3 hide-on-med-and-down">
		<div class="profile">
			
			<span class="h1">I am <?php echo $profile['Profile']['name']; ?><br>and </span><span class="h2"><strong><span class="txt-rotate" data-period="2000" data-rotate='[ "I am a Programmer.", "I love programming." ]'></span></strong></span>
			<div class="line"></div>
			<span class="h1"><strong>I'm so happy you're visiting</strong></span>
			<p><?php echo $profile['Profile']['intro']; ?></p>
			<div class="line"></div>
			<span class="h1"><strong>My Skill</strong></span>
			<p>	<?php $skill = explode("<br>",$profile['Profile']['skill']); 
				foreach($skill as $skill) {?>
				<i class="mdi-toggle-check-box"></i><?php echo " ".$skill; ?><br>
				<?php } ?>
			</p>
		</div> <!-- End profile -->
	</div> <!-- End col l3  -->
	<?php 
	$this->Js->get('.test')->event('click', 'alert("whoa!");');
	?>
</div> <!-- End row -->
</div> <!-- End container -->



          
