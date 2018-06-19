<?php
  //tab_widgets
  class tab_widgets extends WP_Widget{
    public function __construct(){
	    parent::__construct(
	      'tab_widgets',
	      'Tab Widgets',
	      array(
	          'description' => 'This is testing widgets',
	        )
	      );
    }

    public function form($value){
    ?>
      <label for="<?php echo $this->get_field_id('id_name'); ?>">ID</label>
      <input class="widefat" type="text" name="<?php echo $this->get_field_name('name1_id'); ?>" id="<?php echo $this->get_field_id('id_name'); ?>" value="<?php echo $value['name1_id']; ?>">
    <?php
    }

    public function update($new,$old){
      $old['name1_id'] = $new['name1_id'];
      return $old;
    }

    public function widget($v1,$v2){
      echo do_shortcode('[tab_widgets_sc id="'.$v2['name1_id'].'"]');
    }
  }

  //news widgets
  class news_widgets extends WP_Widget{
    public function __construct(){
	    parent::__construct(
	      'advertisment_widgets',
	      'advertisment Widgets',
	      array(
	          'description' => 'This is testing widgets',
	        )
	      );
    }

    public function form($value){
    ?>
      <label for="<?php echo $this->get_field_id('id_name'); ?>">ID</label>
      <input class="widefat" type="text" name="<?php echo $this->get_field_name('name1_id'); ?>" id="<?php echo $this->get_field_id('id_name'); ?>" value="<?php echo $value['name1_id']; ?>">
    <?php
    }

    public function update($new,$old){
      $old['name1_id'] = $new['name1_id'];
      return $old;
    }

    public function widget($v1,$v2){
      echo do_shortcode('[advertisment_sc id="'.$v2['name1_id'].'"]');
    }
  }


  //tag widget
  class tag_widgets extends WP_Widget{
    public function __construct(){
      parent::__construct(
        'tag_widgets',
        'Tag Widgets',
        array(
            'description' => 'This is Tag widget',
          )
        );
    }

    public function form($value){
    ?>
      <label for="<?php echo $this->get_field_id('id_name'); ?>">ID</label>
      <input class="widefat" type="text" name="<?php echo $this->get_field_name('name1_id'); ?>" id="<?php echo $this->get_field_id('id_name'); ?>" value="<?php echo $value['name1_id']; ?>">
    <?php
    }

    public function update($new,$old){
      $old['name1_id'] = $new['name1_id'];
      return $old;
    }

    public function widget($v1,$v2){
      echo do_shortcode('[tag_sc id="'.$v2['name1_id'].'"]');
    }
  }




?>