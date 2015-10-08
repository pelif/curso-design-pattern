<?php
namespace padroes\estruturais\MountHtml;

class Button implements IElement
{
    private $tag = null;
    private $properties;

    public function __construct(array $properties = null)
    {
        $this->tag = "<input type='button'";
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
                    $this->tag = "<label>{$value}</label>" . $this->tag;
                }
                $this->properties.= " " . $attr . "='" . $value . "' ";
            }
        }
        if(strlen($this->properties) > 0)
        {
            $this->tag.= $this->properties;
        }
    }

}
