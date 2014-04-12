<div class="wrap">

<? $plugin_url = WP_PLUGIN_URL . '/wp_article_feeder'; ?>

<?

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$pub = $_POST["publication"];
$client = $_POST["client"];
$title = $_POST["title"];
$link = $_POST["link"];

$newitem = array($pub, $client, $title, $link);

}

?>
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>WP Article Feeder Plugin</h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span>Article Information</span></h3>
						<div class="inside">

<form name="wp_article_feeder_form" method="post" action="">

	<table class="form-table">
	
<tr>
<td>
<label for="publication">Publication</label>
</td>
<td>
<input name="publication" id="publication" type="text" class="regular-text" />
</td>
</tr>

<tr>
<td>
<label for="client">Client</label>
</td>
<td>
<input name="client" id="client" type="text" class="regular-text" />
</td>
</tr>

<tr>
<td>
<label for="title">Title</label>
</td>
<td>
<input name="title" id="title" type="text" class="regular-text" />
</td>
</tr>

<tr>
<td>
<label for="link">Link</label>
</td>
<td>
<input name="link" id="link" type="text" class="regular-text" />
</td>
</tr>

</table>

<input class="button-primary" type="submit" name="submit" value="Submit" />

</form>
						</div> <!-- .inside -->
					
					</div> <!-- .postbox -->

					<div class="postbox">
					
						<h3><span>Stored Articles</span></h3>
						<div class="inside">

<ul>
	<? foreach($newitem as $data) {?>
	<li><? echo $data; ?></li>
	<? } ?>
	
</ul>
						
						</div> <!-- .inside -->
						
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
						
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables -->
				
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->