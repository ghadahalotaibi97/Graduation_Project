<?php
session_start();
require_once('db.php');
	if(ISSET($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		$_SESSION['id']=$id;

   
		$sql = mysqli_query( "SELECT * FROM ` register` WHERE `id`='".$id."' ");
		while($update_data = mysqli_fetch_array($sql))
		{
			// echo $_SESSION['expense_category_name'] = $update_data['expense_category_name'];
			// echo $update_data['amount'];
		?>
		 <div class="content">
        <div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div style=" margin-left:100px;">

        
                    
                    <br> 


             <div class="form-group">
            <label> Amount: </label>
                <input type="text" name="firstname" id="firstname" style="margin-left:-50px" class="form-control"  onBlur="this.value=trim(this.value);" value="<?php echo $update_data['firstname'];?>" required>
      
        </div>       
            
            <br>

            <div class="form-group">
            <label> Expense Name: </label>
                <input type="text" name="lastname" id="lastname" style="margin-left:-50px" class="form-control"   onBlur="this.value=trim(this.value);"  value="<?php echo $update_data['lastname'];?>" required>
      
        </div> 
        <br>
        
            <?php // if(isset($message)){echo "<font color='FF0000'><h5>$message</font></h5>";} ?>
        
			
    </div>
                                        </div>
                                        <div class="modal-footer">
                                        
                    <input type="submit" id="submit" name="submit"  value="Add" class="btn btn-primary" style=""/>
                    <input type="reset" id="rest" value="Cancel / Reset" class="btn btn-danger" style=""/> 
                </div>
                </div>
            </form>
		<?php 
		}
	}
		?>
