<?php
namespace App\DesignPattern\Structural\Adapter;

interface RenderTemplateInterface
{
    /**
     * @return string
     */
    public function renderHeader(): string;

    /**
     * @return string
     */
    public function renderBody(): string;

    /**
     * @return string
     */
    public function renderFooter(): string;
}
