<?php
/*
 * @Theme Name:NavHub
 * @Theme URI:https://nav.luomor.com/
 * @Author: Peter
 * @Author URI: https://www.luomor.com/
 * @Date: 2026-02-22 21:26:02
 * @LastEditors: Peter
 * @LastEditTime: 2026-06-04 23:05:46
 * @FilePath: \NavHub\templates\friendlink.php
 * @Description: 
 */
if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

        <?php if( io_get_option('links') ) : ?>
        <h4 class="text-gray mb-4">
            <i class="fa fa-bookmark" id="friendlink" style="margin-right:10px"></i><?php _e('友情链接','i_theme') ?>
        </h4>
        <div class="friendlink" style="margin-bottom:-40px">
            <div class="panel">
                <?php wp_list_bookmarks('title_li=&before=&after=&categorize=0&show_images=0&orderby=rating&order=DESC&category='.get_option('link_f_cat')); ?>
            </div> 
        </div> 
        <?php endif; ?> 