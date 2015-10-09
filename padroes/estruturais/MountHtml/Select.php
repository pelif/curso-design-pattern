<?php
namespace padroes\estruturais\MountHtml;

class Select implements IElement
{
    private $tag = null;
    private $properties;

    public function __construct(array $properties = null)
    {
        $this->tag = "<select ";
        if(!is_null($properties)) {
            $this->addProperties($properties);
        }
    }

    public function mount()
    {
        printf("%s", $this->tag . "</select><br>");
    }

    public function addProperties(array $properties)
    {
        if(is_array($properties)) {
            foreach($properties as $attr => $value) {
                if($attr == 'label') {
                    $this->tag = "<label>{$value}</label><br>" . $this->tag;
                } else if ($attr != 'options') {
                    $this->properties.= " " . $attr . "='" . $value . "' ";
                } else {
                    if(strlen($this->properties) > 0) {
                        $this->tag.= $this->properties . ">";
                    }
                    $this->addOptions((array) $value);
                }
            }
        }

    }

    private function addOptions(array $options)
    {
        foreach($options as $value => $text) {
            $this->tag .= "<option value='{$value}'>{$text}</option>";
        }
    }

}
