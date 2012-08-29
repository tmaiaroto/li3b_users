<?=$this->html->script('/li3b_users/js/bootstrapUserValidation', array('inline' => false)); ?>
<div class="row">
	<div class="span9">
		<h2 id="page-heading">Your User Settings</h2>
		<br />
		<?=$this->form->create($document, array('id' => 'user-update-form', 'class' => 'form-horizontal', 'onSubmit' => 'return submitCheck();')); ?>
			<fieldset>
			<?=$this->security->requestToken(); ?>
				<div class="control-group">
					<?=$this->form->label('UserFirstName', 'First Name', array('class' => 'control-label')); ?>
					<div class="controls">
						<?=$this->form->field('firstName', array('label' => false, 'placeholder' => 'John', 'class' => 'input-xlarge'));?>
					</div>
				</div>
				<div class="control-group">
					<?=$this->form->label('UserLastName', 'Last Name', array('class' => 'control-label')); ?>
					<div class="controls">
						<?=$this->form->field('lastName', array('label' => false, 'placeholder' => 'Doe', 'class' => 'input-xlarge'));?>
					</div>
				</div>
				<div class="control-group">
					<?=$this->form->label('UserEmail', 'E-mail', array('class' => 'control-label')); ?>
					<div class="controls">
						<?=$this->form->field('email', array('label' => false, 'class' => 'input-xlarge'));?>
						<p class="help-block">Provide an e-mail address for the user to login with.</p>
					</div>
				</div>
				<div class="control-group">
					<?=$this->form->label('UserPassword', 'Password', array('class' => 'control-label')); ?>
					<div class="controls">
						<?=$this->form->field('password', array('type' => 'password', 'label' => false, 'placeholder' => 'Not your dog\'s name', 'class' => 'input-xlarge'));?>
						<p class="help-block">If you leave this blank, this user's password will not be changed.</p>
					</div>
				</div>
				<div class="control-group">
					<?=$this->form->label('UserPasswordConfirm', 'Confirm Password', array('class' => 'control-label')); ?>
					<div class="controls">
						<?=$this->form->field('passwordConfirm', array('type' => 'password', 'label' => false, 'class' => 'input-xlarge'));?>
						<p class="help-block">Just to be sure, type the password again.</p>
					</div>
				</div>

				<div class="form-actions">
					<?=$this->form->submit('Save', array('class' => 'btn btn-primary')); ?> <?=$this->html->link('Cancel', array('library' => 'li3b_users', 'admin' => true, 'controller' => 'users', 'action' => 'index'), array('class' => 'btn')); ?>
				</div>

			</fieldset>
			<?=$this->form->end(); ?>
	</div>

	<div class="span3">
		<?=$this->bootstrapBlock->render('li3b_users_update_right', array('document' => $document)); ?>
		<div class="well" style="padding: 8px 0;">
			<div style="padding: 8px;">
				<p>
					<strong>Notes</strong><br />
					If you change your password, you will not be e-mailed any sort of confirmation. Please do not forget your password.
					<br /><br />
					You may need to log out and back in again in order to see the changes you make.
				</p>
			</div>

		</div>
	</div>
</div>