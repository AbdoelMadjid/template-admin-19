<?php

namespace SmartUI\Components;
use \SmartUI\UI;
use \SmartUI\Util;

class Nav extends UI {

	private $_structure = array(
		'nav' => array(),
		'id' => ''
	);

	public function __construct($nav_items = array()) {
		$this->_init_structure($nav_items);
	}

	private function _init_structure($nav_items) {
		$this->_structure = Util::array_to_object($this->_structure);
		$this->_structure->nav = $nav_items;
		$this->_structure->id = Util::create_id(true);
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

		$nav_items = Util::get_property_value($structure->nav, array(
			'if_closure' => function($nav_items) {
				return Util::run_callback($nav_items, array($this));
			},
			'if_other' => function($nav_items) {
				parent::err('SmartUI::Nav:nav requires array');
				return null;
			}
		));

		if (!is_array($nav_items)) {
			parent::err("SmartUI::Nav:nav requires array");
			return null;
		}

		$list_items = $this->parse_nav($nav_items, true);
		$result = parent::print_list($list_items, null, true);

		if ($return) return $result;
		else echo $result;
	}

	private function parse_nav($nav_item, $is_parent = false) {

		if (!$nav_item) return '';
		$nav_items_list = array();
		foreach ($nav_item as $name => $nav) {
			$nav_prop = array(
				'url' => '#',
				'url_target' => '',
				'icon' => '',
				'icon_badge' =>  '',
				'label_htm' => '',
				'title' => $name,
				'title_append' => '',
				'label' => '',
				'active' => false,
				'sub' => array(),
				'attr' => array(),
				'class' => array(),
				'li_class' => array()
			);

			$new_nav_prop = Util::set_array_prop_def($nav_prop, $nav, 'title');

			$icon_badge_prop = array(
				'content' => '',
				'class' => ''
			);

			$icon_badge_prop = Util::set_array_prop_def($icon_badge_prop, $new_nav_prop['icon_badge'], 'content');
			$badge = '';
			if ($icon_badge_prop['content']) {
				$badge_class = $icon_badge_prop['class'] ? 'class="'.$icon_badge_prop['class'].'"' : '';
				$badge = '<em '.$badge_class.'>'.$icon_badge_prop['content'].'</em>';
			}

			$icon = $new_nav_prop['icon'] ? '<i class="'.parent::$icon_source.' '.parent::$icon_source.'-lg '.parent::$icon_source.'-fw '.$new_nav_prop['icon'].'">'.$badge.'</i>' : '';
			$title = $new_nav_prop['title'];
			$title_append = $new_nav_prop['title_append'];

			$display_title = $title.' '.$title_append;

			$label_htm = $new_nav_prop['label_htm'] ? ' '.$new_nav_prop['label_htm'] : '';

			$display_text = $is_parent ? '<span class="menu-item-parent">'.$display_title.'</span>' : $display_title;
			$display_text .= $label_htm;

			$attrs = array_map(function($attr, $value) {
				return $attr.'="'.$value.'"';
			}, array_keys($new_nav_prop['attr']), $new_nav_prop['attr']);

			if ($new_nav_prop['class']) $attrs[] = 'class="'.$new_nav_prop['class'].'"';

			$nav_htm = '<a ';
			$nav_htm .= 'href="'.$new_nav_prop['url'].'" ';
			$nav_htm .= ($new_nav_prop['url_target'] ? 'target="'.$new_nav_prop['url_target'].'"' : '').' ';
			$nav_htm .= implode(' ', $attrs).'> ';
			$nav_htm .=	$icon.' '.$display_text.' '.$new_nav_prop['label'];
			$nav_htm .= '</a>';

			$li_classes = array();
			if ($new_nav_prop["active"]) $li_classes[] = 'active';
			if ($new_nav_prop['li_class']) {
				if (is_string($new_nav_prop['li_class'])) $li_classes[] = $new_nav_prop['li_class'];
				else if (is_array($new_nav_prop['li_class'])) $li_classes = array_merge($li_classes, $new_nav_prop['li_class']);
			}

			$nav_item_structure = array(
				'content' => $nav_htm,
				'class' => implode(' ', $li_classes)
			);

			if (isset($new_nav_prop['sub'])) {
				if (is_string($new_nav_prop['sub'])) {
					$subitems = array($new_nav_prop['sub']);
				} else {
					foreach ($new_nav_prop['sub'] as $subitem) {
						if (isset($subitem['active'])) {
							$nav_item_structure['class'] .= ' active open';
							$nav_item_structure['subitem_options'] = array('attr' => array('style' => 'display: block;'));
							break;
						}
					}

					$subitems = $this->parse_nav($new_nav_prop['sub']);
				}

				$nav_item_structure['subitems'] = $subitems;
			}

			$nav_items_list[] = $nav_item_structure;
		}

		return $nav_items_list;
	}
}


?>