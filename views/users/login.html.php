<div class="row">
	<div class="span9">
		<h2 id="page-heading">Log in With Your Account</h2>
		<br />
		<div class="clear"></div>
		<?=$this->form->create(null, array('class' => 'form-horizontal')); ?>
		<fieldset>
			<div class="control-group">
				<?=$this->form->label('Email', 'E-mail', array('class' => 'control-label')); ?>
				<div class="controls">
					<?=$this->form->field('email', array('label' => false, 'class' => 'input-xlarge')); ?>
				</div>
			</div>
			<div class="control-group">
				<?=$this->form->label('Password', 'Password', array('class' => 'control-label')); ?>
				<div class="controls">
					<?=$this->form->field('password', array('type' => 'password', 'label' => false, 'class' => 'input-xlarge')); ?>
				</div>
			</div>
			<div class="form-actions">
				<?=$this->form->submit('Log in', array('class' => 'btn btn-primary')); ?> <?=$this->html->link('Register', array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'register'), array('class' => 'btn')); ?>
			</div>
		</fieldset>
		<?=$this->form->end(); ?>
	</div>
</div>