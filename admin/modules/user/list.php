	<h3 class="fw-bold mb-3">List of User</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-bordered table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th>
				  		 <input class="form-check-input" type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Account Name</th>
				  		<th>Username</th>
				  		<th>Type</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * 
											FROM  `useraccounts`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		echo '<td width="5%" align="center"></td>';
				  		echo '<td><input class="form-check-input" type="checkbox" name="selector[]" id="selector[]" value="'.$result->ACCOUNT_ID. '"/>
				  				<a href="index.php?view=edit&id='.$result->ACCOUNT_ID.'">' . $result->ACCOUNT_NAME.'</a></td>';
				  		echo '<td>'. $result->ACCOUNT_USERNAME.'</td>';
				  		echo '<td>'. $result->ACCOUNT_TYPE.'</td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group mt-2">
				  <a href="index.php?view=add" class="btn btn-primary">New</a>
				  <button type="submit" class="btn btn-primary" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			} ?>
			
				</form>
	

</div><!--End of container-->
