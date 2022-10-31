<?php

/* - - - - - 
 * extracted from plugin WP Private Content Plus version 3.4
 * 
 * original fuction was resticted to single and page
 */


    function fngl_display_file_attachments($content){
        // var_dump('hallo');

        $iets = new WPPCP_Post_Attachments();

        global $post,$wppcp;


        $wppcp->include_styles();

        $skipped_types = array('attachment','revision','nav_menu_item','forum','topic','reply','product','shop_order','download');
        
        if(!in_array($post->post_type, $skipped_types)){
            $post_id = $post->ID;
            $post_attachments = get_post_meta( $post_id, '_wppcp_post_attachments', true );

            if(is_array($post_attachments)){

                $wppcp_post_files_list_title = get_post_meta( $post_id, '_wppcp_post_files_list_title', true );
                $wppcp_post_files_list_description = get_post_meta( $post_id, '_wppcp_post_files_list_description', true );

                $attachment_content = "<div class='wppcp-attachments-display-panel'>";

                if($wppcp_post_files_list_title != ''){
                    $attachment_content .= "<div class='wppcp-attachments-display-panel-title'>".esc_html($wppcp_post_files_list_title)."</div>";
                }

                if($wppcp_post_files_list_description != ''){
                    $attachment_content .= "<div class='wppcp-attachments-display-panel-desc'>".esc_html($wppcp_post_files_list_description)."</div>";
                }

                $attachment_status = FALSE;
                foreach($post_attachments as $attach_data){
                    if($attach_data['attach_id'] != ''){
                        

                        if($iets->verify_attachment_permission($attach_data)){
                            $attachment_status = TRUE;
                            $attachment = wp_get_attachment_url( $attach_data['attach_id'] );

                            if($iets->verify_download_permission($attach_data)){

                                $url = $_SERVER['REQUEST_URI'];
                                $url = wppcp_add_query_string($url,'wppcp_file_download=yes');
                                $url = wppcp_add_query_string($url,'wppcp_file_id='.$attach_data['attach_id']);
                                $url = wppcp_add_query_string($url,'wppcp_post_id='.$post_id);


                                $attachment_content .= "<div class='wppcp-attachments-display-panel-file' ><img src='".WPPCP_PLUGIN_URL  . "images/file-mini.png' />
                                <a href='".esc_url($url)."'>" . esc_html($attach_data['name']). "</a></div>";

                            }else{
                                $attachment_content .= "<div class='wppcp-attachments-display-panel-file' ><img src='".WPPCP_PLUGIN_URL  . "images/file-mini.png' />" . esc_html($attach_data['name']). "</div>";
                            }

                        }
                    }
                }

                $attachment_content .= "</div>";

                // var_dump($attachment_status);

                if($attachment_status){
                    $content .= $attachment_content;
                }	                
            }
        }    		

        return $content;
    }
?>