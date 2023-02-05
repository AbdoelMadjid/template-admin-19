<?php

namespace SmartUI\Components;
use \SmartUI\UI;
use \SmartUI\Util;

class Button extends UI {

	const BUTTON_CONTAINER_ANCHOR = 'a';
	const BUTTON_CONTAINER_BUTTON = 'button';

	const BUTTON_SIZE_LARGE = 'lg';
	const BUTTON_SIZE_SMALL = 'sm';
	const BUTTON_SIZE_XSMALL = 'xs';
	const BUTTON_SIZE_MEDIUM = 'md';

	private $_options_map = array(
		'disabled' => false,
		'labeled' => false
	);

	private $_structure = array(
		'options' => array(),
		'content' => '',
		'icon' => '',
		'type' => '',
		'container' => self::BUTTON_CONTAINER_BUTTON,
		'size' => self::BUTTON_SIZE_MEDIUM,
		'attr' => array(),
		'id' => '',
		'class' => '',
		'dropdown' => array()
	);

	public function __construct($content = '', $type = 'default', $options = array()) {
		$this->_init_structure($type, $content, $options);
	}

	private function _init_structure($type, $content, $user_options) {
		$this->_structure = Util::array_to_object($this->_structure);
		$this->_structure->type = $type;
		$this->_structure->content = $content;
		$this->_structure->options = Util::set_array_prop_def($this->_options_map, $user_options);

	}

	public function __call($name, $args) {
		return parent::_call($this, $this->_structure, $name, $args);
	}

	public function __set($name, $value) {
		if (isset($this->_structure->{$name})) {
            $this->_structure->{$name} = $value;
            return;
        }
		parent::err('Undefined structure property: '.$name);
	}

	public function __get($name) {
		if (isset($this->_structure->{$name})) {
            return $this->_structure->{$name};
        }
        parent::err('Undefined structure property: '.$name);
        return null;
	}

	public function print_html($return = false) {
		

		$structure = $this->_structure;

		$icon = Util::get_property_value($structure->icon, array(
			'if_closure' => function($icon) { return Util::run_callback($icon, array($this)); },
			'if_array' => function($icon) {
				parent::err('parent::Widget::icon requires string.');
				return '';
			}
		));

		$container = Util::get_property_value($structure->container, array(
			'if_closure' => function($container) { return Util::run_callback($container, array($this)); },
			'if_array' => function($container) {
				parent::err('parent::Widget::container requires string.');
				return '';
			}
		));

		$content = Util::get_property_value($structure->content, array(
			'if_closure' => function($content) { return Util::run_callback($content, array($this)); },
			'if_array' => function($content) {
				parent::err('parent::Widget::content requires string.');
				return '';
			}
		));

		$attr = Util::get_property_value($structure->attr, array(
			'if_closure' => function($attr) {
				$callback_return = Util::run_callback($attr, $array($this));
				if (is_array($callback_return)) return $callback_return;
				else return array($callback_return);
			},
			'if_array' => function($attr) {
				$attrs = array();
				foreach ($attr as $key => $value) {
					$attrs[] = $key.'="'.$value.'"';
				}

				return $attrs;
			},
			'if_other' => function($attr) {
				return array($attr);
			}
		));

		$class = Util::get_property_value($structure->class, array(
			"if_closure" => function($class) { return Util::run_callback($class, array($this)); },
			"if_array" => function($class) {
				return implode(' ', $class);
			}
		));

		$type = Util::get_property_value($structure->type, array(
			'if_array' => function($class) {
				parent::err('parent::Button:type requires string.');
				return parent::BUTTON_TYPE_DEFAULT;
			}
		));

		$classes = array();

		// labeled and icon

		if (trim($icon)) {
			$icon = '<i class="'.parent::$icon_source.' '.$icon.'"></i>';
			if ($structure->options['labeled']) {
				$classes[] = 'btn-labeled';
				$icon = $structure->options['labeled'] ? '<span class="btn-label">'.$icon.'</span>' : $icon;
			}

			$content = $icon.' '.$content;
		}

		// custom class
		if ($class) $classes[] = $class;

		// size
		$size_class = '';
		if ($structure->size) {
			$size_class = 'btn-'.$structure->size;
			$classes[] = $size_class;
		}
		// disabled
		$disabled = $structure->options['disabled'] ? 'disabled' : '';
		$classes[] = $disabled;

		$class_htm = $classes ? ' '.implode(' ', $classes) : '';

		$result = '';

		if ($structure->id) $attr[] = 'id="'.$structure->id.'"';
		if ($structure->dropdown) {
			$dd_prop = array(
				'items' => array(),
				'multilevel' => false,
				'split' => false,
				'attr' => array(),
				'class' => '',
				'id' => ''
			);

			$new_dd_prop = Util::get_clean_structure($dd_prop, $structure->dropdown, array($this), 'items');

			if (is_array($new_dd_prop['items'])) {
				$dropdown_html = parent::print_dropdown($new_dd_prop['items'], array(
					'multilevel' => $new_dd_prop['multilevel'],
					'class' => $new_dd_prop['class'],
					'attr' => $new_dd_prop['attr'],
					'id' => $new_dd_prop['id']
				), true);
			} else {
				$dropdown_html = $new_dd_prop['items'];
			}

			if ($new_dd_prop['split']) {
				$split_prop = array(
					'type' => $type,
					'disabled' => false,
					'dropup' => false,
					'class' => array(),
					'attr' => array()
				);

				$new_split_prop = Util::get_clean_structure($split_prop, $new_dd_prop['split'], array($this, $new_dd_prop), 'type');

				$split_attrs = array();
				if (is_array($new_split_prop['attr'])) {
					foreach ($new_split_prop['attr'] as $split_attr => $value) {
						$split_attrs[] = $split_attr.'="'.$value.'"';
					}
				} else {
					$split_attrs[] = $new_split_prop['attr'];
				}

				$split_classes = array();
				if (is_array($new_split_prop['class'])) $split_classes[] = implode(' ', $new_split_prop['class']);
				else $split_classes[] = $new_split_prop['class'];

				$split_classes[] = $size_class;
				$split_class_htm = $split_classes ? ' '.implode(' ', $split_classes) : '';

				$btn_main = '<'.$container.' class="btn btn-'.$type.$class_htm.'" '.implode(' ', $attr).'>';
				$btn_main .= $content;
				$btn_main .= '</'.$container.'>';

				$btn_dd = '<'.$container.' class="btn btn-'.$new_split_prop['type'].$split_class_htm.' dropdown-toggle" data-toggle="dropdown" '.implode(' ', $split_attrs).'>';
				$btn_dd .= '<span class="caret"></span>';
				$btn_dd .= '</'.$container.'>';
				$btn_dd .= $dropdown_html;

				$result .= '<div class="btn-group'.($new_split_prop['dropup'] ? ' dropup' : '').'">'.$btn_main.$btn_dd.'</div>';
			} else {
				$result .= '<div class="dropdown">';
				$result .= '<'.$container.' class="btn btn-'.$type.$class_htm.' dropdown-toggle" '.implode(' ', $attr).' data-toggle="dropdown">';
				$result .= $content.' <span class="caret"></span>';
				$result .= '</'.$container.'>';
				$result .= $dropdown_html;
				$result .= '</div>';
			}

		} else {
			$result .= '<'.$container.' class="btn btn-'.$type.$class_htm.'" '.implode(' ', $attr).'>';
			$result .= $content;
			$result .= '</'.$container.'>';
		}

		if ($return) return $result;
		else echo $result;
	}
}

?>