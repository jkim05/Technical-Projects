<!--
Jefferson Kim
IT-207-DL1
Lab activity 04 postingComments.php
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
		<title>Posting Comments</title>
		<link rel="stylesheet" href="lab04.css" type="text/css"/>
	</head>
	<body>
		<div id="content">
			<div id="lab4">
			<br/>
				<div class="title">Sports and PED report:</div>
					<div class="body">Studies have found that athletes that use performance enhancing drugs (PED's) have an 
					exponential increase in strength and recovery.
					Scientists from George Mason University have stated that athletes that utilize PED's have a 90% increase in
					performance based on their data. Therefore, the ban on PED's will remain indefinite.</div><br>
	      <h1>Comments</h1>
	      <hr/>
		  <br>
				<?php
				$deletecheck = false;
				$sortcheck = false;
					if(!empty($_POST['delete']))
					{
						if(isset($_GET['sort']))
						{
							$sort = $_GET['sort'];
							if($sort == 'A')
							{
								$deletenum = $_POST['delete'] - 1;
								$subname;
								$subcomments;
								$comments = file("comments.txt");
								natcasesort($comments);
								$comments = array_values($comments);
								unset($comments[$deletenum]);
								$comments = array_values($comments);
								$updatecomments = false;
								$handle = fopen("comments.txt", "w+t");
								flock($handle, LOCK_EX);
								for ($i=0; $i < count($comments); $i++)
								{
									if(fwrite($handle, $comments[$i]) > 0)
									{
										$updatecomments = true;
									}
								}
								flock($handle, LOCK_UN);
								fclose($handle);
								if ($updatecomments == false)
								{
									echo "<h3>An error occured deleting your comment</h3>";
								}
								$subname;
								$subcomment;

								$comments = file("comments.txt");
								natcasesort($comments);
								$comments = array_values($comments);
								for ($i=0; $i < count($comments); $i++)
								{
									$curline = $comments[$i];
									$curinfo = explode("$$$", $curline);

									$subname = $curinfo[0];
									$subemail = $curinfo[1];
									$subcomment = $curinfo[2];
						?>
								<span class="numbers"><?php echo $i + 1 . ".";?></span>
								<span class="multiline"><?php echo "Name: <a href='" . $subemail . "'>" . $subname . "</a>";?><br/></span>
								<hr/>
							<?php
								}
							}
							if($sort == 'Z')
							{
								$deletenum = $_POST['delete'] - 1;
								$subname;
								$subcomments;
								$comments = file("comments.txt");
								natcasesort($comments);
								$comments = array_reverse($comments);
								unset($comments[$deletenum]);
								$comments = array_values($comments);
								$updatecomments = false;
								$handle = fopen("comments.txt", "w+t");
								flock($handle, LOCK_EX);
								for ($i=0; $i < count($comments); $i++)
								{
									if(fwrite($handle, $comments[$i]) > 0)
									{
										$updatecomments = true;
									}
								}
								flock($handle, LOCK_UN);
								fclose($handle);
								if ($updatecomments == false)
								{
									echo "<h3>An error occured deleting your comment</h3>";
								}
								$subname;
								$subcomment;

								$comments = file("comments.txt");
								natcasesort($comments);
								$comments = array_reverse($comments);
								for ($i=0; $i < count($comments); $i++)
								{
									$curline = $comments[$i];
									$curinfo = explode("$$$", $curline);

									$subname = $curinfo[0];
									$subemail = $curinfo[1];
									$subcomment = $curinfo[2];
							?>
								<span class="numbers"><?php echo $i + 1 . ".";?></span>
								<span class="multiline"><?php echo "Name: <a href='" . $subemail . "'>" . $subname . "</a>";?><br/></span>
								<hr/>
							<?php
								}
							}
						}
						else
						{
							$deletenum = $_POST['delete'] - 1;
							$subname;
							$subcomment;
							$comments = file("comments.txt");
							unset($comments[$deletenum]);
							$comments = array_values($comments);
							$updatecomments = false;
							$handle = fopen("comments.txt", "w+t");
							flock($handle, LOCK_EX);
							for ($i=0; $i < count($comments); $i++)
							{
								if(fwrite($handle, $comments[$i]) > 0)
								{
									$updatecomments = true;
								}
							}
							flock($handle, LOCK_UN);
							fclose($handle);
							if ($updatecomments == false)
							{
								echo "<h3>An error occured deleting your comment</h3>";
							}
							$subname;
							$subcomment;
							$comments = file("comments.txt");
							for ($i=0; $i < count($comments); $i++)
							{
								$curline = $comments[$i];
								$curinfo = explode("$$$", $curline);

								$subname = $curinfo[0];
								$subemail = $curinfo[1];
								$subcomment = $curinfo[2];
						?>
							<span class="numbers"><?php echo $i + 1 . ".";?></span>
							<span class="multiline"><?php echo "Name: <a href='" . $subemail . "'>" . $subname . "</a>";?><br/></span>
							<hr/>
						<?php
							}
						}
					}
					elseif(isset($_GET['sort']))
					{
						$sort = $_GET['sort'];
						if($sort == 'A')
						{
							$subname;
							$subcomment;

							$comments = file("comments.txt");
							natcasesort($comments);
							$comments = array_values($comments);
							for ($i=0; $i < count($comments); $i++)
							{
								$curline = $comments[$i];
								$curinfo = explode("$$$", $curline);

								$subname = $curinfo[0];
								$subemail = $curinfo[1];
								$subcomment = $curinfo[2];
					?>
							<span class="numbers"><?php echo $i + 1 . ".";?></span>
							<span class="multiline"><?php echo "Name: <a href='" . $subemail . "'>" . $subname . "</a>";?><br/></span>
							<hr/>
						<?php
							}
						}
						if($sort == 'Z')
						{
							$subname;
							$subcomment;

							$comments = file("comments.txt");
							natcasesort($comments);
							$comments = array_reverse($comments);
							for ($i=0; $i < count($comments); $i++)
							{
								$curline = $comments[$i];
								$curinfo = explode("$$$", $curline);

								$subname = $curinfo[0];
								$subemail = $curinfo[1];
								$subcomment = $curinfo[2];
						?>
							<span class="numbers"><?php echo $i + 1 . ".";?></span>
							<span class="multiline"><?php echo "Name: <a href='mailto:$subemail'> . $subname . </a>";?><br/></span>
							<hr/>
						<?php
							}
						}
					}
					else
					{
						$subname;
						$subcomment;

						$comments = file("comments.txt");
						for ($i=0; $i < count($comments); $i++)
						{
							$curline = $comments[$i];
							$curinfo = explode("$$$", $curline);

							$subname = $curinfo[0];
							$subemail = $curinfo[1];
							$subemail = $curinfo[1];
							$subcomment = $curinfo[2];
					?>
						<span class="numbers"><?php echo $i + 1 . ".";?></span>
						<span class="multiline"><?php echo "Name: <a href='" . $subemail . "'>" . $subname . "</a>";?><br/></span>
						<hr/>
					<?php
						}
					}
				?>
				<br>
				<br>
				<div class="form">
				<a href="index.php">Add New Comment</a><br/>
				<a href="ascending1.php">Sort Comments A-Z (by name)</a><br/>
				<a href="descending1.php">Sort Comments Z-A (by name)</a><br/><br/></div>
				<br>
				<form action="postedComments1.php" method="POST">
				<br>
				<label for="id_delete">Delete Comment Number: </label><input id="id_delete" type="text" name="delete" size="4"/>
				<input type="submit" value="Delete"/>
				<br/>
				</div>
				</form>
			</div>
	</body>
</html>
