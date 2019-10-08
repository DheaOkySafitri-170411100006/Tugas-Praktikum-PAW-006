<?php
function form(){?>
	<?php
		global $rname;
		global $rfname;
		global $remail;
		global $rpassword;
		global $rcpassword;
	?>
	<form name="myform" action="prosesData.php" method="POST">
		<div class="latar"> 
			<h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Registration Form </h1>
			<table>
				<tr>
					<td><label for="surname" style="color: white">Surname</label></td>
					<td><input type="text" name="surname" id="surname" size="31"  value="<?php if(isset($_POST['surname'])) echo($_POST['surname']) ?>"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td style="color: black ;"><?php echo "$rname"?></td>
				</tr>
				<tr>
					<td><label for="firstname" style="color: white" >Firstname</label></td>
					<td><input type="text" name="firstname" id="firstname" size="31"  value="<?php if(isset($_POST['firstname'])) echo($_POST['firstname']) ?>"><br></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td style="color: black;"><?php echo "$rfname"?></td>
				</tr>
				<tr>
					<td><label for="email" style="color: white">Email address</label></td>
					<td><input type="text" name="email" id="email" size="31" value="<?php if(isset($_POST['email'])) echo($_POST['email']) ?>"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td style="color: black;"><?php echo "$remail"?></td>
				</tr>
				<tr>
					<td><label for="password" style="color: white">Password</label></td>
					<td><input type="password" name="password" id="password" size="31" value="<?php if(isset($_POST['password'])) echo($_POST['password']) ?>"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td style="color: black;"><?php echo ""?><?php echo "$rpassword"?></td>
				</tr>
				<tr>
					<td><label for="cpassword" style="color: white">Confirm Password</label></td>
					<td><input type="password" name="cpassword" id="cpassword" size="31"  value="<?php if(isset($_POST['cpassword'])) echo($_POST['cpassword']) ?>"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td style="color: black;"><?php echo "$rcpassword"?></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="submit"/>
					<input type="reset" name="reset" value="reset"/>
					</td>
				</tr>
			</table>
		</div>			
		<div class="field">
			<label>&nbsp;</label>
		</div>
	</form>
		
<?php } ?>