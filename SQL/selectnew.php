<?php

include"header.php";
?>


<div class="container">


	<?php
	if(isset($_POST['edit']))
	{
		$sec = mysqli_query($con,"SELECT * FROM brands WHERE id='".$_POST['id']."'");
		$info = mysqli_fetch_array($sec);


		echo'
		<form method="post">
			Brend adi:<br>
			<input type="text" class="form-control" name="ad" value="'.$info['ad'].'"><br>
			<input type="hidden" name="id" value="'.$info['id'].'">
			<button type="submit" name="update">Yenilə</button>
			<button type="submit" name="yox">Imtina</button>
		</form>
		';
	}


	if(isset($_POST['update']))
	{
		if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad=trim($_POST['ad']); $ad = htmlspecialchars($ad);}

		if(isset($ad)){

			  $yoxla = mysqli_query($con,"SELECT ad FROM brands WHERE ad='".mysqli_real_escape_string($con,$ad)."' AND id!='".$_POST['id']."'");

			  	if(mysqli_num_rows($yoxla)==0)
				{
					$yenile = mysqli_query($con,"UPDATE brands SET ad='".mysqli_real_escape_string($con,$ad)."' WHERE id='".$_POST['id']."'");

					if($yenile==true)
					{echo'Brend uğura yeniləndi<br><br>';}
					else
					{echo'Brendi yeniləmək mümkün olmadı<br><br>';}
				}
				else
				{echo'Brend artıq bazada mövcuddur<br><br>';}

		}
		else
		{echo'Lütfən məlumatları tam daxil edin<br><br>';}
	}




	if(isset($_POST['sil']))
	{
		echo'
		<div class="alert alert-danger" role="alert">
		<b>'.$_POST['ad'].'</b> adlı brendi silməyə əminsinizmi?<br><br>
		<form method="post">
			<input type="hidden" name="id" value="'.$_POST['id'].'">
			<button type="submit" class="btn btn-success btn-sm" name="he">Hə</button>
			<button type="submit" class="btn btn-danger btn-sm" name="yox">Yox</button>
		</form>
		</div>';
	}


	if(isset($_POST['he']))
	{
		$sil = mysqli_query($con,"DELETE FROM brands WHERE id='".$_POST['id']."'");

		if($sil==true)
		{echo'Brend uğurla silindi<br><br>';}
		else
		{echo'Brendi silmək mümkün olmadı<br><br>';}
	}






	if(isset($_POST['d']))
	{
		if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad=trim($_POST['ad']); $ad = htmlspecialchars($ad);}

		if(isset($ad)){

			  	$yoxla = mysqli_query($con,"SELECT ad FROM brands WHERE ad='".mysqli_real_escape_string($con,$ad)."'");

			  	if(mysqli_num_rows($yoxla)==0)
				{
					$daxilet = mysqli_query($con,"INSERT INTO brands(ad,tarix) VALUES('".mysqli_real_escape_string($con,$ad)."', '".$tarix."')");

					if($daxilet==true)
					{echo'<div class="alert alert-success" role="alert">Brend uğurla bazaya əlavə edildi</div>';}
					else
					{echo'<div class="alert alert-danger" role="alert">Brendi bazaya əlavə etmək mümkün olmadı</div>';}
				}
				else
				{echo'<div class="alert alert-warning" role="alert">Brend artıq bazada mövcuddur</div>';}
			
		}
		else
		{echo'<div class="alert alert-warning" role="alert">Lütfən, məlumatları tam daxil edin</div>';}
	}



	if(!isset($_POST['edit']))
	{
		echo'
		<div class="alert alert-dark" role="alert">
		<form method="post">
			Brend:<br>
			<input type="text" class="form-control" name="ad" placeholder="Brendin adı" autocomplete="off"><br>
			<button type="submit" class="btn btn-success" name="d"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></button>
		</form>
		</div>';
	}



	$sec = mysqli_query($con,"SELECT * FROM brands ORDER BY id DESC");
	$say = mysqli_num_rows($sec);


	echo'<div class="alert alert-dark" role="alert">Bazada <b>'.$say.'</b> brend var</div>';


	?>

	<table class="table table-striped table-dark">

		<thead>
			<th>#</th>
			<th>Ad</th>
			<th>Tarix</th>
			<th></th>
		</thead>

		<tbody>
			<?php

			$i = 0;

			while($info = mysqli_fetch_array($sec))
			{
				$i++;

				echo'	
				<tr>
					<td>'.$i.'</td>
					<td>'.$info['ad'].'</td>
					<td>'.$info['tarix'].'</td>
					<td>
						<form method="post">
							<input type="hidden" name="id" value="'.$info['id'].'">
							<input type="hidden" name="ad" value="'.$info['ad'].'">
							<button type="submit" class="btn btn-success btn-sm" name="edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
</svg></button>
							<button type="submit" class="btn btn-danger btn-sm" name="sil"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></button>
				  		</form>
				  	</td>
				</tr>';
			}

			?>

		</tbody>
		
	</table>

</div>
