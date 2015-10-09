<?php
namespace padroes\estruturais\MountHtml;

class Textarea implements IElement
{
    private $tag = null;
    private $properties;

    public function __construct(array $properties = null)
    {
        $this->tag = "<textarea ";
        if(!is_null($properties))
        {
            $this->addProperties($properties);
        }
    }

    public function mount()
    {
        printf("%s", $this->tag . " /></textarea><br>");
    }

    public function addProperties(array $properties)
    {
        if(is_array($properties)) {
            foreach($properties as $attr => $value) {
                if($attr == 'label') {
                    $this->tag = "<label>{$value}</label><br>" . $this->tag;
                } else {
                    $this->properties.= " " . $attr . "='" . $value . "' ";
                }
            }
        }

        if(strlen($this->properties) > 0) {
            $this->tag.= $this->properties;
        }
    }


}


?>
