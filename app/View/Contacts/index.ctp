<div class="row">
  <?php

  //echo pr($datas);
  //exit();

   ?>



  <?php echo $this->Form->create('contacts', array('type' => 'post', 'url' =>  'index')); ?>

  <div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>Contact Info.</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
						<li><i class="icon-phone"></i>+ 1235 2355 98</li>
						<li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="icon-globe"></i><a href="#">www.yoursite.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group" style="margin-right:10px;">
								<!-- <input class="form-control" placeholder="Name" type="text"> -->
                <?php echo $this->Form->input('name', array('type' => 'text', 'label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => "Name")); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
                <?php echo $this->Form->input('email', array('type' => 'email', 'label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => "Email")); ?>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<!-- <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea> -->
                <?php echo $this->Form->input('body', array('type' => 'textarea', 'label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => "Message")); ?>

							</div>
						</div>
            <div class="set-btn animated fadeInUp">
              <?php echo $this->Form->button('確認する', array('type' => 'submit', 'label' => false, 'div' => false, 'class' => 'btn_submit', 'name' => 'confirm', 'value' => 'confirm')); ?>
              <?php echo $this->Form->end(); ?>
            </div>
					</div>
				</div>
			</div>
    </div>
  </div>



	<?php echo $this->element('bottom'); ?>
