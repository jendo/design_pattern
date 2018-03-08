<?php
namespace App\DesignPattern\Structural\Adapter;

class RenderHtmlTemplate implements RenderTemplateInterface
{

    /**
     * @return string
     */
    public function renderHeader(): string
    {
        return '<html><body>';
    }

    /**
     * @return string
     */
    public function renderBody(): string
    {
        return 'Hello body!';
    }

    /**
     * @return string
     */
    public function renderFooter(): string
    {
        return '</body></html>';
    }
}
