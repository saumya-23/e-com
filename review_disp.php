
<html>
<head>
<link rel="stylesheet" type="text/css" href="themes/css/comment_connect.css" />

</head>
<body>
<?php
function getComments($dbcon)
{
    
$sql="SELECT email,review,date FROM reviews WHERE p_id=".$_GET['p_ID'];
$result=$dbcon->query($sql);
echo "</br></br>";

while($row=$result->fetch_assoc())
{
?>
    <section>
<div class="outer">
 
 <div class="inner_right">
	<article>
		<header>
			<cite class="fn"><?= $row['email'] ?></cite>
			<span class="says">says:</span>
		</header>
		<div class="comment-content">
			<p><?= $row['review']?></p>
		</div>
		<footer>
			<div class="comment-meta commentmetadata">
				<time>on:<?= $row['date']?> </time>
			</div>
		</footer>
	</article>
</div>
</div>
        </section>
<?php 
}
}
?>  
</body>
</html>