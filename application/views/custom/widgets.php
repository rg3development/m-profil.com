<?

$page_data['widgets'] = array();

/* get widget data */

$footer_menu = $this->page_mapper->get_menu(0, 0);
$main_slider1 = $this->banner_mapper->get_widget(1);
$main_slider2 = $this->banner_mapper->get_widget(2);
$main_slider3 = $this->banner_mapper->get_widget(3);
$news_banner = $this->news_mapper->get_widjet(3);
$text_banner = $this->text_mapper->get_widjet(1);
$search_form = $this->search_mapper->get_form();

/* set template data */

$page_data['widgets']['footer_menu'] = $footer_menu[0];
$page_data['widgets']['text_banner'] = $text_banner;
$page_data['widgets']['news_banner'] = $news_banner;
$page_data['widgets']['main_slider1'] = $main_slider1;
$page_data['widgets']['main_slider2'] = $main_slider2;
$page_data['widgets']['main_slider3'] = $main_slider3;
$page_data['widgets']['search_form'] = $search_form;

?>