<?php
namespace padroes\estruturais\MountHtml;

class Text implements IElement
{
    private $tag = null;
    private $properties;

    public function __construct(array $properties = null) {
        $this->tag = "<input type='text'";
        if(!is_null($properties))
        {
            $this->addProperties($properties);
        }
    }

    public function mount()
    {
        printf("%s", $this->tag . " /><br>");
        $this->tag = null;
    }

    public function addProperties(array $propertie)
    {
        if (is_array($propertie))
        {
            foreach($propertie as $attr => $value)
            {
                if($attr == 'label')
                {
                    $this->tag = "<label>{$value}</label><br>" . $this->tag;
                }
                else
                {
                    $this->properties.= " " . $attr . "='" . $value . "' ";
                }
            }
        }
        if(strlen($this->properties) > 0)
        {
            $this->tag.= $this->properties;
        }
    }

}
