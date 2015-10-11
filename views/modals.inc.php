<!-- Create Theme -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Theme Project</h4>
      </div>
      <div class="modal-body">
        <form class="proj" name="proj">
			<label class="label" for="name">Theme Name</label><br>
			<input type="text" name="name" class="form-control input-sm"><br>
			<label class="label" for="theme">Theme Type</label><br>
			<select class="form-control input-sm" id="theme" name="theme">
				<option selected value="0">Select a Theme</option>					
				<?php		// load names to select box
					require_once('../includes/dbconnection.inc.php');
					$sql = "SELECT proj_type_id, proj_type_name FROM `proj_type`";
					$result = mysql_query($sql);
					while($row=mysql_fetch_array($result, MYSQL_ASSOC))
					{                                                 
						echo "<option value='".$row['proj_type_id']."'>".$row['proj_type_name']."</option>";
					}
				?>						
			</select>		
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Create</button>
      </div>
    </div>
  </div>
</div>

<!-- Create File -->

<div class="modal fade" id="NewFileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New File</h4>
      </div>
      <div class="modal-body">
        <form class="proj" name="proj">
			<label class="label" for="fname">File Name</label><br>
			<input type="text" name="fname" class="form-control input-sm"><br>
			<label class="label" for="ftype">File Type</label><br>
			<select class="col-lg-12" id="ftype" name="ftype">
				<option selected value="0">Select a File Type</option>					
				<?php		// load names to select box
					require_once('../includes/dbconnection.inc.php');
					if(isset($_SESSION['curr_proj_type'])){
						if($_SESSION['curr_proj_type']==1)
						{
							$sql = "SELECT ftype_id,Drupal7x FROM `file_types` ORDER BY Drupal7x";
							$result = mysql_query($sql);
							while($row=mysql_fetch_array($result, MYSQL_ASSOC))
							{                                                 
								echo "<option value='".$row['ftype_id']."'>".$row['Drupal7x']."</option>";
							}
						}
						else if($_SESSION['curr_proj_type']==2)
						{
							$sql = "SELECT ftype_id,Drupal8x FROM `file_types` ORDER BY Drupal8x";
							$result = mysql_query($sql);
							while($row=mysql_fetch_array($result, MYSQL_ASSOC))
							{                                                 
									echo "<option value='".$row['ftype_id']."'>".$row['Drupal8x']."</option>";
							}
						}
						else
						{
							$sql = "SELECT ftype_id,Wordpress FROM `file_types` ORDER BY Wordpress";
							$result = mysql_query($sql);
							while($row=mysql_fetch_array($result, MYSQL_ASSOC))
							{                                                 
									echo "<option value='".$row['ftype_id']."'>".$row['Wordpress']."</option>";
							}
						}
					}
					else
					{
						echo "<option value='0'>No Files Supported</option>";
					}
				?>						
			</select>		
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Create</button>
      </div>
    </div>
  </div>
</div>



	<script>$("#ftype").select2({ placeholder: "Select a File Type"});</script>