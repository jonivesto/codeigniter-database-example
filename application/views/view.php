<div id="container">
	<h1>CodeIgniter database example</h1>
	<div id="body">
	
		<!--Table rows-->
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Value</th>
				</tr>
			</thead>
			<tbody>
				<?php if(!empty($data)): foreach($data as $item): ?>
					<tr>
						<td><?php echo $item['id']; ?></td>
						<td>
							<form action="<?php echo site_url('/controller/update/' . $item['id']); ?>" method="POST">
								<input type="text" name="value" value="<?php echo $item['value']; ?>">
								<input type="submit" value="Update">
							</form>
						</td>
						<td>
							<a href="<?php echo site_url('controller/delete/' . $item['id']); ?>">
								<button>Delete</button>
							</a>
						</td>
					</tr>
				<?php endforeach; else: ?>
					<tr><td colspan="3">This table is empty.</td></tr>
				<?php endif; ?>
				<!--Add rows-->
				<tr>
					<td>#</td>
					<td colspan="3">
						<form action="<?php echo site_url('/controller/insert/'); ?>" method="POST">
						  <input type="text" name="value" placeholder="New row..">
						  <input type="submit" value="Insert">
						</form>
					</td>
				</tr>
			</tbody>
		</table>
		<br>

	</div>
	
	<p class="footer">
		Source on <a href="https://github.com/jonivesto/codeigniter-database-example">GitHub</a> | Page rendered in <strong>{elapsed_time}</strong> seconds | <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>
</div>