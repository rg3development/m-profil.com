<?php

class Catalog_Category extends MY_Model_Catalog
{
  const CLASS_SECTION  = 'Catalog_Section';
  const CLASS_CATEGORY = 'Catalog_Category';
  const CLASS_ITEM     = 'Catalog_Item';
    public $id;
    public $parent_category_id;
    public $parent_section_id;
    public $title;
    public $image_id;
    public $num_items;
    public $description;
    public $priority;
    public $discount_price;
    public $discount_percent;

    public function __construct( $object_id = 0 )
    {
        $this->id                 = 0;
        $this->image_id           = 0;
        $this->parent_category_id = 0;
        $this->parent_section_id  = 0;
        $this->title              = '';
        $this->description        = '';
        $this->num_items          = 0;
        $this->priority           = 0;
        $this->discount_price     = $this->discount_price > 0 ? $this->discount_price : 0;
        $this->discount_percent   = $this->discount_percent > 0 && $this->discount_percent < 100 ? $this->discount_percent : 0;
    }

    public function num_products ()
    {
        $catalog_mapper = new Catalog_mapper();
        return count($catalog_mapper->get_category_item_list($this->id));
    }

    public function catalog_url ()
    {
        $catalog_mapper = new Catalog_Mapper();
        $page_mapper    = new Page_Mapper();
        $section = $catalog_mapper->get_object($this->parent_section_id, 'section');
        return $page_mapper->get_page($section->parent_page_id)->url;
    }

    public function category_link ()
    {
        return $this->catalog_url() . '?cat=' . $this->id;
    }
    public function image ()
    {
        $image_src = 'www_admin/img/noimage.svg';
        if ( $this->image_id )
        {
            $image = new Image_item($this->image_id );
            $image_src = '/upload/images/catalog/' . $image->getFilename();
            
        }
        return $image_src;
    }
        public function get_category_null ()
    {
        $this->db->select('*');
        $this->db->from('catalog_category');
        $this->db->where('is_deleted',0);
        $this->db->where('parent_category_id',$this->id);
        $this->db->order_by('priority','ask');
        
        $result2 = $this->db->get()->result(self::CLASS_CATEGORY);
        return $result2;
    }
}