<?php
namespace App\DesignPattern\Structural\Adapter;

interface RenderPDFTemplateInterface
{
    /**
     * @return string
     */
    public function renderTop(): string;

    /**
     * @return string
     */
    public function renderMiddle(): string;

    /**
     * @return string
     */
    public function renderBottom(): string;
}
