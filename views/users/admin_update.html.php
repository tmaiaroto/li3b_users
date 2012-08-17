<?=$this->html->script('/li3b_users/js/bootstrapUserValidation', array('inline' => false)); ?>
<div class="row">
	<div class="span9">
		<h2 id="page-heading">Update User</h2>
		<br />
		<?=$this->form->create($document, array('id' => 'user-update-form', 'class' => 'form-horizontal', 'onSubmit' => 'return submitCheck();')); ?>
			<fieldset>
			<?=$this->security->requestToken(); ?>
				<div class="control-group">
					<?=$this->form->label('UserRole', 'User Role', array('class' => 'control-label')); ?>
					<div class="controls">
						<?=$this->form->select('role', $roles); ?>
					</div>
				</div>
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
				<div class="control-group">
					<label for="UserActive" class="control-label">Active</label>
					<div class="controls">
						<label class="checkbox">
							<?=$this->form->field('active', array('label' => false, 'type' => 'checkbox'));?>If checked, this user will be active and able to login.
						</label>
					</div>
				</div>
				
				<div class="form-actions">
					<?=$this->form->submit('Save', array('class' => 'btn btn-primary')); ?> <?=$this->html->link('Cancel', array('library' => 'li3b_users', 'admin' => true, 'controller' => 'users', 'action' => 'index'), array('class' => 'btn')); ?>
				</div>
				
				<p><em><strong>Note:</strong> There will be no e-mail sent to this user. You must let them know what their password is.</em></p>
			</fieldset>
			<?=$this->form->end(); ?>
	</div>
	
	<div class="span3">
		<div class="well" style="padding: 8px 0;">
			<div style="padding: 8px;">
				<p>
					<strong>Administrator</strong><br />
					These users can create and update other users and have complete access to the administrative back-end.<br /><br />
					<strong>Content Editor</strong><br />
					These users can create and update things using the administrative back-end, but can not create any new users.<br /><br />
					<strong>Registered User</strong><br />
					These users have, more or less, "read-only" access and can only view content published on the front-end of the site.
				</p>
			</div>
			
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li class=""><?=$this->html->link('List All Users', array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'index', 'admin' => true)); ?></li>
				<li class=""><?=$this->html->link('Create New User', array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'create', 'admin' => true)); ?></li>
			</ul>

		</div>
	</div>
</div>