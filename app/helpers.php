<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 31/05/2019
 * Time: 03:25 PM
 */

if(!function_exists('simpleXmlElement2Array'))
{
    /**
     * @param \SimpleXMLElement $simpleXMLElement
     * @return array
     */
    function simpleXmlElement2Array(\SimpleXMLElement $simpleXMLElement) : array
    {
        $array = array();

        foreach ($simpleXMLElement->children() as $child)
        {
            $element = array();
            foreach ($child->children() as $key  => $value)
            {
                if(count($value->children()) == 0)
                    $element[$key] = strval($value);
                else {
                    $element[$key] = simpleXmlElement2Array($value);
                }
            }
            $array[] = $element;
        }

        return $array;
    }
}

if(!function_exists('domDocument2Array'))
{
    function domDocument2Array(DOMNodeList $nodeList)
    {
        $array = array();
        foreach ($nodeList as $node)
        {
            $element = array();

            if($node->hasAttributes())
                foreach ($node->attributes as $key => $value)
                    $element[$key] = $value->value;
            if($node->hasChildNodes())
            {
                foreach ($node->childNodes as $childNode)
                {
                    if($childNode instanceof DOMElement)
                    {
                        $element[$childNode->localName] = domElement2Array($childNode);
                    }

                }
            }

            $array[] = $element;
        }
        return $array;
    }

}

if(!function_exists("domElement2Array"))
{
    /**
     * @param DOMElement $domElement
     * @return array
     */
    function domElement2Array(DOMElement $domElement)
    {
        $subElement = array();

        if($domElement->hasAttributes())
            foreach ($domElement->attributes as $key => $value)
                $subElement[$key] = $value->value;
        if($domElement->hasChildNodes())
            foreach ($domElement->childNodes as $childNode)
            {
                if($childNode instanceof DOMText)
                    $subElement[$childNode->localName] = $childNode->data;
                else
                    $subElement[$childNode->localName] = domElement2Array($childNode);
            }

        return $subElement;
    }
}