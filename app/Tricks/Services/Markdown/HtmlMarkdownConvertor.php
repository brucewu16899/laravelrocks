<?php namespace Tricks\Services\Markdown;

use HTML_To_Markdown;
use Michelf\MarkdownExtra;

class HtmlMarkdownConvertor {

    protected $htmlParser;
    protected $markdownParser;

    public function __construct() {
        $this->htmlParser = new HTML_To_markdown;
        $this->htmlParser->set_option('header_style', 'atx');

        $this->markdownParser = new MarkdownExtra;
        $this->markdownParser->no_markup = true;
    }

    public function convertHtmlToMarkdown($html) {
        return $this->htmlParser->convert($html);
    }

    public function convertMarkdownToHtml($markdown) {
        return $this->markdownParser->transform($markdown);
    }

} 