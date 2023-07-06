<?php check_message(); ?>
		<div class="well">

			    <form action="controller.php?action=delete" Method="POST">  
					<caption><h3 class="my-2" ">List of Academic Year</h3></caption>					
				<table id="singletwo" class="table table-striped table-bordered  table-hover">
				  <thead>
				  	<tr>
				  		<th> <input class=" form-check-input" type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> ID </th>
				  		<th>Starting Year</th>
						<th>Ending Year</th>
						<th>Academic Year</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$ay = new academicyear();
						  $cur = $ay->listOfAY();
						  foreach ($cur as $ay) {
							echo '<tr>';
  
							echo '<td><input class="form-check-input" type="checkbox" name="selector[]" id="selector[]" value="'.$ay->AY_ID. '"/>
									<a href="index.php?view=edit&id='.$ay->AY_ID.'">' . $ay->ACADYR.'</a></td>';
							echo '<td >'. $ay->AY_START.'</td>';
							echo '<td >'. $ay->AY_END.'</td>';
							echo '<td >'. $ay->ACADYR.'</td>';
							echo '</tr>';
				  	} 
				  	?>
				  </tbody>	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group my-2">
				
				  <a href="index.php?view=add" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-primary" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
<script>function combineyear() {
  var input1 = document.getElementById("aystart").value;
  var input2 = document.getElementById("ayend").value;
  var result = input1 + "-" + input2;
  document.getElementById("result").textContent = result;
}</script>