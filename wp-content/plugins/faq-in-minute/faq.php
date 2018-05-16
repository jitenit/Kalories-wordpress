<?php $faqsettingdata = get_option( 'faq_in_minute_cat_settings' );?>

<style type="text/css">

.faq_heading {
    background-color: <?php echo $faqsettingdata['faq_in_minute_cat_text_field_0'];?>!important ;
    color: <?php echo $faqsettingdata['faq_in_minute_cat_text_field_2']; ?>!important ;
    text-decoration: none ;
    cursor: pointer;   
}
    .panel-heading.faq_heading {     
    background: <?php echo $faqsettingdata['faq_in_minute_cat_text_field_0'];?>!important ;
    color: <?php echo $faqsettingdata['faq_in_minute_cat_text_field_2']; ?>!important ;
    text-decoration: none ;
    cursor: pointer;
     }
    .collapsed.faq_link {
    box-shadow: 0 0;
    }
    .cursor-desing{
        cursor: pointer;
    }
    
</style>
