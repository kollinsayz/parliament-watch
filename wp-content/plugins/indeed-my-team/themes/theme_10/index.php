<?php
$dir_path = plugin_dir_path (__FILE__);
$style="<style>".file_get_contents( $dir_path.'style.css')."
</style>";
$list_item_template = '
<div class="team-member">
<div class="member-img">
 <a #POST_LINK#> 
        <img title="ICT_NAME" src="ICT_IMAGE" alt=""/>
 <div class="member-name-wrapper">
  <div class="member-name">
 	ICT_NAME
	<span>ICT_JOB</span>
  </div>
 </div>
 </a>
<div class="member-content-wrapper">
<div class="member-content">
<div class="member-skills-wrapper">
    ICT_SKILLS
</div>
<div class="member-email">
ICT_EMAIL
</div>
<div class="member-web">
ICT_WEBSITE
</div>
<div class="member-phone">
ICT_PHONE
</div>
<div class="member-location">
ICT_LOCATION
</div>
<div style="height:21px; width:100%"></div>
<div class="member-social">
ICT_SOCIAL_MEDIA
</div>
</div>
</div>
<div class="clear"></div>
</div>
<div class="member-desc">
ICT_DESCRIPTION
</div>
';
$details_arr = array(
    'in_team_email' => '<a href="mailto:#EMAIL#">#EMAIL#</a>',
    'in_team_telephone' => '#PHONE#',
    'in_team_location' => '#LOCATION#',
    'in_team_website' => '<a href="http://#WEBSITE#" target="_blank">#WEBSITE#</a>'
);
$socials_arr = array(
    'in_team_fb' => '<a href="FB" target="_blank" class="facebook"><i class="icont-facebook"></i></a>',
    'in_team_tw' => '<a href="TW" target="_blank" class="twitter"><i class="icont-twitter-2"></i></a>',
    'in_team_lin' => '<a href="LIN" target="_blank" class="linkedin"><i class="icont-linkedin"></i></a>',
    'in_team_gp' => '<a href="GP" target="_blank" class="gplus"><i class="icont-gplus"></i></a>',
	'in_team_ins' => '<a href="INS" target="_blank" class="instagramm"><i class="icont-instagramm"></i></a>'
);
?>