//BLOGINFO 

function wpf_bi($option){return bloginfo( $option );}

//retuns the blog name
function _BlogName(){echo wpf_bi('name');}
function _DirTheme($next=''){echo wpf_bi('template_url').'/'.$next;}
function _DirCss($file=''){echo wpf_bi('template_url').'/css/'.$file;}
function _DirImgDir(){echo wpf_bi('template_url').'/images/';}
