<?php
namespace App\DesignPattern\Structural\Adapter;

class RenderPDFTemplate implements RenderPDFTemplateInterface
{

    /**
     * @return string
     */
    public function renderTop(): string
    {
        return 'This is the top of the PDF';
    }

    /**
     * @return string
     */
    public function renderMiddle(): string
    {
        return 'Content of pdf file';
    }

    /**
     * @return string
     */
    public function renderBottom(): string
    {
        return 'This is the bottom of the PDF';
    }
}
