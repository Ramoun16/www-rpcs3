<script type="text/javascript">
$(document).ready(function() {
    $('.feature-1-title').text("Persona 5");
    $('.feature-1-desc').text("Persona 5 is a turn-based 3D action role-playing game developed by Atlus. It is the sixth game in the Persona series. Persona 5 takes place in Tokyo, and follows a silent protagonist after their transfer to the fictional Shujin Academy after being put on probation for an assault he was falsely accused of. During the course of the school year, he and other students awaken to their Persona powers, become masked vigilantes dubbed the '\Phantom Thieves of Hearts'\. It was released in Japan on September 15th, 2016 for both PlayStation 3 and PlayStation 4 and released worldwide on April 4th, 2017.");
    $('.feature-1-author').text("Uploaded By RPCS3");
});
</script>
<div id='video-con-dim' class='stop-video toggle-video-1'>
	<div id='video-con-viewport' class='video-con-scale'>
		<iframe id='video-1' data-src="https://www.youtube.com/embed/0yxVASSetmA?autoplay=1&cc_load_policy=1&enablejsapi=1&color=white&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen="true" allowscriptaccess="always" type="text/html" width="100%" height="100%" src="about:blank">
		</iframe>
	</div>
</div>
<?php
function preloadVideo($id, $vid, $title, $desc) {	

echo"
<script type=\"text/javascript\">
$(document).ready(function() {
    $('.feature-$id-title').text(\"$title\");
    $('.feature-$id-desc').text(\"$desc\");
});
</script>
<div id=\"video-con-dim\" class=\"toggle-video-$id stop-video\">
	<div id=\"video-con-viewport\" class=\"video-con-scale\">
		<iframe id=\"video-$id\" data-src=\"https://www.youtube.com/embed/$vid?autoplay=1&cc_load_policy=1&enablejsapi=1&color=white&version=3&playerapiid=ytplayer\" 
			frameborder=\"0\" allowfullscreen=\"true\" allowscriptaccess=\"always\" type=\"text/html\" width=\"100%\" height=\"100%\" src=\"about:blank\">
		</iframe>
	</div>
</div>
";
}

function loadVideo($id) {
echo "<li id='featured-con-grid' class='page-flx-item'>
<div id='featured-img-grid' style=\"background:url('/img/thumbs/$id.jpg') no-repeat center; background-size: cover;\">
	<div id='featured-btn-play' class=\"page-video-$id\">
	</div>
</div>
<div id='featured-con-block'>
	<div id='featured-wrp-block' style='padding-bottom: 0px !important'>
		<div id='featured-tx1-block'>
			<h1 class=\"feature-$id-title\">Title</h1>
		</div>
		<div id='featured-tx2-block'>
			<p class=\"feature-$id-desc\">
				 Description
			</p>
		</div>
	</div>
</div>
</li>";
}
?>