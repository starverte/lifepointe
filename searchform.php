<?php
/**
 * Template for default searchform
 *
 * @package LifePointe
 * @since 0.8.0
 */

$settings = get_option('lifepointe_general');
?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" name="s" id="s" value="<?php echo $settings['s_text']; ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
