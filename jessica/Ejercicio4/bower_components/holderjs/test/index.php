?>
<!DOCTYPE php> 
<html>
<head>
<title>Holder Testing</title>
<meta charset="utf-8">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" class="holderjs">
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' class="holderjs">
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css' class='holderjs'>
<style>
	body {font-family:Arial,sans-serif;width:1050px;margin:0 auto}
	.thumb {width:300px;height:250px;margin:25px;float:left}
	.thumb img, .thumb .holderjs, .thumb object {display:block;margin:0 auto}
	.thumb .caption {padding:10px;text-align:center;margin-top:10px}
	.thumb.fullpage {float:none;clear:both;width:auto;height:100px;margin:25px}
	.autosize img {width:100%}
	#holder1 {background:url('?holder.js/300x200/text:Background%20placeholder/^eee:^222');width:300px;height:200px}
</style>
</head>
<body>

<div class="thumb">
	<img data-src="holder.js/300x200">
	<div class="caption">
		 Plain placeholder
	</div>
</div>
<div class="thumb">
	<img data-src="holder.js/300x200/social">
	<div class="caption">
		 Themed placeholder
	</div>
</div>
<div class="thumb">
	<img data-src="holder.js/300x200/random/font:Droid Sans/text:Droid Sans">
	<div class="caption">
		Placeholder with random theme
	</div>
</div>
<div class="thumb">
	<img data-src="holder.js/300x200/text:заполнитель">
	<div class="caption">
		 Placeholder with text
	</div>
</div>
<div class="thumb">
	<img data-src="holder.js/300x200/#EE403D:#FFFFFF/text:Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
	<div class="caption">
		 Placeholder with lengthy text
	</div>
</div>
<div class="thumb">
	<img data-src="holder.canvas/300x200/#EE403D:#FFFFFF/text:Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
	<div class="caption">
		Canvas placeholder with lengthy text
	</div>
</div>
<div class="thumb">
	<img data-src="holder.js/300x200/social/text:Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, libero quis accumsan fringilla, augue est laoreet orci, consectetur euismod augue nisl sit amet arcu. Fusce ultrices ornare metus in porta. Aenean ac nisl ut tellus dignissim auctor quis id arcu. Vivamus lorem neque, pulvinar non dictum vel, sagittis lobortis odio.">
	<div class="caption">
		 Placeholder with very lengthy text
	</div>
</div>
<div class="thumb">
	<img data-src="holder.js/300x200/social/text:Lorem ipsum   \n   dolor sit amet, consectetur adipiscing elit.">
	<div class="caption">
		 Placeholder with custom newline
	</div>
</div>
<div class="thumb">
	<img data-src="holder.js/300x200/randomrandom/hello:world/$$$$/%25%25%67/industrial/text:заполнитель">
	<div class="caption">
		 Placeholder with text and bad flags
	</div>
</div>
<div class="thumb">
	<script>
	var r = Math.random();
	if(r > 0.5){
	document.write('<img data-src="holder.js/200x150" src="missing.jpg" style="width:200px;height:150px;outline:solid 3px red">');
	}
	else{
	document.write('<img data-src="holder.js/200x150" src="image.jpg" style="width:200px;height:150px;outline:solid 3px green">');
	}
	</script>
	<div class="caption">
		Placeholder with (randomly) missing image source
	</div>
</div>
<div class="thumb">
	<div class="autosize">
		<img data-src="holder.js/200x133/#111:#ffff00/auto">
	</div>
	<div class="caption">
		 Auto-sized placeholder
	</div>
</div>
<div class="thumb">
	<div class="autosize">
		<img data-src="holder.js/200x133/#111:#ffff00/auto/textmode:exact">
	</div>
	<div class="caption">
		 Auto-sized placeholder in exact mode
	</div>
</div>
<div class="thumb">
	<div class="holderjs" id="holder1"></div>
	<div class="caption">
		<code>&lt;div&gt;</code> with background placeholder
	</div>
</div>
<div class="thumb">
	<div class="holderjs" style="width:300px;height:200px" data-background-src="?holder.js/300x200/#ff8362:#5e422e"></div>
	<div class="caption">
		<code>&lt;div&gt;</code> with <code>data-background-src</code> placeholder
	</div>
</div>

<div class="thumb">
	<div id="thumb1">
	</div>
	<div class="caption">
		 Placeholder added through Holder API
	</div>
</div>
<div class="thumb">
	<img data-src="custom.holder/150x100/custom/auto" style="width:300px;height:200px">
	<div class="caption">
		Auto-sized <code>canvas</code> placeholder with custom domain and theme
	</div>
</div>
<div class="thumb">
	<img data-src="holder.js/300x200/font:Pacifico/#4466ff:#fff/text:Pacifico">
	<div class="caption">
		 Placeholder using <span style="font-family:Pacifico">Pacifico</span> font</span>
	</div>
</div>
<div class="thumb">
	<object data="holder.js/300x200/font:Pacifico/#4466ff:#fff/text:Pacifico"></object>
	<div class="caption">
		<code>object</code> placeholder using <span style="font-family:Pacifico">Pacifico</span> font</span>
	</div>
</div>
<div class="thumb">
	<div style="overflow:hidden">
	<img data-src="holder.js/50x75/sky" style="float:left">
	<img data-src="holder.js/100x75/vine" style="float:left">
	<img data-src="holder.js/150x75/lava" style="float:left">
	</div>
	<div style="overflow:hidden">
	<img data-src="holder.js/300x125/industrial" style="float:left">
	</div>
<div class="caption">
		 Placeholders demonstrating adaptive text size
	</div>
</div>
<div class="thumb">
	<div style="height:200px">
<img data-src="holder.js/100%25x50%25/sky">
<img data-src="holder.js/100%25x50%25/lava">
</div>
<div class="caption">Two fluid placeholders in one parent using URI encoding</div>
</div>
<div class="thumb">
	<img data-src="holder.js/80%x50%/vine">
	<div class="caption">
		 Fluid placeholder
	</div>
</div>
<div class="fullpage thumb">
	<img data-src="holder.js/90%x80%/sky">
	<div class="caption">
		 Full-page fluid placeholder
	</div>
</div>
<div class="fullpage thumb">
	<object data-src="holder.js/90%x80%/vine"></object>
	<div class="caption">
		 Full-page fluid <code>object</code> placeholder
	</div>
</div>
<div class="fullpage thumb">
	<img data-src="holder.js/90%x80%/lava/textmode:literal">
	<div class="caption">
		 Full-page fluid placeholder in literal mode
	</div>
</div>
<div class="thumb">
	<img data-src="holder.js/300x200">
	<div class="caption">
		 Plain placeholder to ensure themes aren't leaked forward
	</div>
</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="../holder.js"></script>
<!--
<script src="require.js" data-main="test.js"></script>
-->
<script>
Holder.add_image("holder.js/300x200/sky", "#thumb1").run();
Holder.add_theme("custom", {foreground: "#fff", background: "#000", size: 15}).run({
	domain: "custom.holder",
	use_canvas: true
})
Holder.add_theme("fontawesome", {foreground: "#00ccaa", background: "#002211", size: 12}).run({
	domain: "fontawesome.holder"
})
Holder.run({
	domain: "holder.canvas",
	use_canvas: true
});

</script>
</body>
</html>
<?php