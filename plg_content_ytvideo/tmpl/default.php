<?php defined('_JEXEC') or die;
/*
 * @package     Joomla.Plugin
 * @subpackage  Content.ytvideo
 * @copyright   Copyright (C) 2019 Aleksey A. Morozov. All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

?>
<div class="ytvideo ytvideo-<?php echo $this->params->get('format', '16-9'); ?>">
	<a class="ytvideo-cover" style="background-image:url('<?php echo $image; ?>')" videosrc="<?php echo $id; ?>">
		<?php if ( $title ) { ?>
		<span class="ytvideo-title"><?php echo $title; ?></span>
		<?php } ?>
	</a>
</div>
