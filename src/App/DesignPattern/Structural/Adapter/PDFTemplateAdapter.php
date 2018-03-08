<?php
namespace App\DesignPattern\Structural\Adapter;

class PDFTemplateAdapter implements RenderTemplateInterface
{
    /**
     * @var RenderPDFTemplateInterface
     */
    private $pdfTemplate;

    /**
     * @param RenderPDFTemplateInterface $pdfTemplate
     */
    public function __construct(RenderPDFTemplateInterface $pdfTemplate)
    {
        $this->pdfTemplate = $pdfTemplate;
    }

    /**
     * @return string
     */
    public function renderHeader(): string
    {
        return $this->pdfTemplate->renderTop();
    }

    /**
     * @return string
     */
    public function renderBody(): string
    {
        return $this->pdfTemplate->renderMiddle();
    }

    /**
     * @return string
     */
    public function renderFooter(): string
    {
        return $this->pdfTemplate->renderBottom();
    }
}
