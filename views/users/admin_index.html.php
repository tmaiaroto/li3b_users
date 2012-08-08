<div class="row">
	<div class="span9">
		<h2 id="page-heading">Users</h2>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th class="left">E-mail</th>
					<th>Role</th>
					<th>Created</th>
					<th class="right">Actions</th>
				</tr>
			</thead>
			<?php foreach($documents as $user) { ?>
			<tr>
				<td>
					<?php $active = ($user->active) ? 'active':'inactive'; ?>
					<?=$this->html->link($user->email, array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'read', 'admin' => true, 'args' => array($user->_id)), array('class' => 'user-info', 'title' => $user->firstName . ' ' . $user->lastName . ' (' . $active . ')')); ?>
				</td>
				<td>
					<?=$user->role; ?>
				</td>
				<td>
					<?=$this->html->date($user->created->sec); ?>
				</td>
				<td>
					<?=$this->html->link('Edit', array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'update', 'admin' => true, 'args' => array($user->_id))); ?> |
					<?=$this->html->link('Delete', array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'delete', 'admin' => true, 'args' => array($user->_id)), array('onClick' => 'return confirm(\'Are you sure you want to delete ' . $user->email . '?\')')); ?>
				</td>
			</tr>
			<?php } ?>
		</table>

		<?=$this->BootstrapPaginator->paginate(); ?>
		<em>Showing page <?=$page; ?> of <?=$total_pages; ?>. <?=$total; ?> total record<?php echo ((int) $total > 1 || (int) $total == 0) ? 's':''; ?>.</em>
	</div>

	<div class="span3">
		<div class="well" style="padding: 8px 0;">
			<div style="padding: 8px;">
				<h3>Search for Users</h3>
				<?=$this->html->queryForm(); ?>
			</div>
			
			<ul class="nav nav-list">
				<li class="nav-header">Actions</li>
				<li class="active"><?=$this->html->link('List All Users', array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'index', 'admin' => true)); ?></li>
				<li class=""><?=$this->html->link('Create New User', array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'create', 'admin' => true)); ?></li>
			</ul>

		</div>
	</div>

</div>
<script type="text/javascript">
	$('.user-info').tooltip();
</script>