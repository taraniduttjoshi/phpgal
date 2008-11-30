<?php 
$cat=$_GET["cat"];

if (isset($cat)) {
	echo '<div id="content">';
}
?>
	<h3 id="cat_tit">about</h3>
	<div id="about">
		<p>
		<h3>Welcome!</h3>
			Hi there! My name is Jonathan Solichin. But you may call me Jon, or by my secret identity "<i>aerovolce</i>". I am a student designer currently attending AHS. Beside designing, I also enjoy taking pictures, which I post on 
			<a href="http://flickr.com/photos/aerovolce/">flickr</a>. 
			I also have a 
			<a href="http://novus.byvolce.com">blog</a>
			for you to enjoy. While not taking pictures or writting in my blog, I also enjoy going around 
			<a href="http://digg.com/users/aerovolce">digg</a>, 
			<a href="http://del.icio.us/seraphlm">delicious</a>, and using 
			<a href="http://twitter.com/aerovolce">twitter</a>. 
			You can contact me via 
			<a href="mailto:jonathanisnot@gmail.com">email</a>, 
			<a href="aim:goim?screenname=aerovolce">aim</a>, 
			<a href="mailto:jonathanisnot@sbcglobal.net">yahoo</a>, or 
			<a href="mailto:jonathanisnot@hotmail.com">hotmail</a>.
			And of course like any "hip" student, I have a 
			<a href="http://www.facebook.com/profile.php?id=705923551">facebook</a>. 
			Although by saying "hip", I might have been taken off the "hip" list. I hope to see you around :)
		</p>
	</div>
<?php 
if (isset($cat)) {
	echo '</div>';
}
?>
