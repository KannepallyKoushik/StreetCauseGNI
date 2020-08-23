<?php 
include_once("db.php");
$id =  $_POST['id'];

$sql = mysqli_query($conn,"select * from department where term_id='".$id."'") or die(mysqli_error($conn));

?>
<select name="sdept" id="dept" class="form-control">
				  <option>select dept</option>
<?php
while($res = mysqli_fetch_array($sql))
{
?>
<option value="<?php echo $res['id'];?>"><?php echo $res['department_name']; ?></option>
<?php } ?>
 </select>