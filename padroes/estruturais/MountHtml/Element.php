<?php

namespace padroes\estruturais\MountHtml;

use padroes\estruturais\MountHtml\IElement;

class Element
{
    private $elements = array();
    private $parent;

    public function __construct(array $element)
    {
        $this->parent = $element;
    }

    public function addElement(IElement $element)
    {
        $this->elements[] = $element;
    }

    public function mount()
    {
        $elem = "<" . $this->parent['element'];

        foreach($this->parent as $attr => $value) {
            if($attr != 'element') {
                $elem.= " " . $attr . "='" . $value . "' ";
            }
        }

        printf("%s", "{$elem}>");
        foreach($this->elements as $element)
        {
            $element->mount();
        }
        $elem.= "</{$this->parent['element']}>";
    }

}
