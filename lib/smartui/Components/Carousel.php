<?php

namespace SmartUI\Components;
use \SmartUI\UI;
use \SmartUI\Util;

class Carousel extends UI {

	private $_options_map = array(
		'style' => 'slide',
		'controls' => array('<span class="glyphicon glyphicon-chevron-left"></span>', '<span class="glyphicon glyphicon-chevron-right"></span>')
	);

	private $_structure = array(
		'item' => array(),
		'id' => '',
		'active' => array(),
		'caption' => array(),
		'img' => array(),
		'options' => array()
	);

	public function __construct($items, $style='slide', $options = array()) {
		$this->_init_structure($items, $style, $options);
	}

	private function _init_structure($items, $style='slide', $user_options = array()) {
		$this->_structure = Util::array_to_object($this->_structure);
		$this->_structure->options = Util::set_array_prop_def($this->_options_map, $user_options);
		$this->_structure->id = Util::create_id(true);
		$this->_structure->item = $items;
		$this->_structure->options['style'] = $style;
	}

	public function __get($name) {
		if (isset($this->_structure->{$name})) {
            return $this->_structure->{$name};
        }
        parent::err('Undefined structure property: '.$name);
        return null;
	}

	public function __set($name, $value) {
		if (isset($this->_structure->{$name})) {
            $this->_structure->{$name} = $value;
            return;
        }
		parent::err('Undefined structure property: '.$name);
	}

	public function __call($name, $args) {
		return parent::_call($this, $this->_structure, $name, $args);
	}

	public function print_html($return = false) {
		

		$structure = $this->_structure;

		$items = Util::get_property_value($structure->item, array(
			'if_closure' => function($items) {
				return Util::run_callback($items, array($this));
			},
			'if_other' => function($items) {
				parent::err('parent::Carousel:item requires array');
				return null;
			}
		));

		if (!is_array($items)) {
			parent::err("parent::Carousel:item requires array");
			return null;
		}

		$indicators_list = array();
		$items_list = array();
		$has_active = false;
		$index = 0;
		foreach ($items as $item_key => $item) {
			$item_structure = array(
				'img' => isset($structure->img[$item_key]) ? $structure->img[$item_key] : '',
				'caption' => isset($structure->caption[$item_key]) ? $structure->caption[$item_key] : '',
				'active' => isset($structure->active[$item_key]) ? $structure->active[$item_key] : '',
			);

			$new_item_prop = Util::get_clean_structure($item_structure, $item, array($this, $items), 'img');

			foreach ($new_item_prop as $tab_item_key => $item_prop_value) {
				$new_item_prop_value = Util::get_property_value($item_prop_value, array(
					'if_closure' => function($prop_value) use ($items) {
						return Util::run_callback($prop_value, array($this, $items));
					}
				));
				$new_item_prop[$tab_item_key] = $new_item_prop_value;
			}

			$image_prop = array('src' => '', 'alt' => '');
			$new_image_prop = Util::get_clean_structure($image_prop, $new_item_prop['img'], array($this, $items, $new_item_prop), 'src');

			$indicator_classes = array();
			$item_classes = array();
			$item_classes[] = 'item';
			if ((!$structure->active && !$has_active) || ($new_item_prop['active'] === true && !$has_active)) {
				$has_active = true;
				$indicator_classes[] = 'active';
				$item_classes[] = 'active';
			}

			$indicators_list[] = '<li data-target="#'.$structure->id.'" data-slide-to="'.$index.'" class="'.implode(' ', $indicator_classes).'"></li>';

			$item_html = '<div class="'.implode(' ', $item_classes).'">';
			$item_html .= '		<img src="'.$new_image_prop['src'].'" alt="'.$new_image_prop['alt'].'">';
			$item_html .= '		<div class="carousel-caption">';
			$item_html .= 			$new_item_prop['caption'];
			$item_html .= '		</div>';
			$item_html .= '</div>';
			$items_list[] = $item_html;


			$index++;
		}
		$controls_html = '';
		if (($structure->options['controls'])) {
			$controls_html .= '	<a class="left carousel-control" href="#'.$structure->id.'" data-slide="prev">';
			$controls_html .= 			$structure->options['controls'][0];
			$controls_html .= '	</a>';
			$controls_html .= '	<a class="right carousel-control" href="#'.$structure->id.'" data-slide="next">';
			$controls_html .= 			$structure->options['controls'][1];
			$controls_html .= '	</a>';
		}

		$result = '<div id="'.$structure->id.'" class="carousel '.$structure->options['style'].'">';
		$result .= '	<ol class="carousel-indicators">';
		$result .= 			implode('', $indicators_list);
		$result .= '	</ol>';
		$result .= '	<div class="carousel-inner">';
		$result .= 			implode('', $items_list);
		$result .= '	</div>';
		$result .= 		$controls_html;
		$result .= '</div>';

		if ($return) return $result;
		else echo $result;
	}

}

?>