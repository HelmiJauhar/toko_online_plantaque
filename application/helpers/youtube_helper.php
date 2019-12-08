&lt;?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if ( ! function_exists('em_youtube'))
{
function em_youtube($url)
{
preg_match(
'/[\\?\\&amp;]v=([^\\?\\&amp;]+)/',
$url,
$matches
);
$id = $matches[1];
 
$width = '640';
$height = '385';
return '&lt;object width="' . $width . '" height="' . $height . '"&gt;&lt;param name="movie" value="http://www.youtube.com/v/' . $id . '&amp;amp;hl=en_US&amp;amp;fs=1?rel=0"&gt;&lt;/param&gt;&lt;param name="allowFullScreen" value="true"&gt;&lt;/param&gt;&lt;param name="allowscriptaccess" value="always"&gt;&lt;/param&gt;&lt;embed src="http://www.youtube.com/v/' . $id . '&amp;amp;hl=en_US&amp;amp;fs=1?rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="' . $width . '" height="' . $height . '"&gt;&lt;/embed&gt;&lt;/object&gt;';
}
}