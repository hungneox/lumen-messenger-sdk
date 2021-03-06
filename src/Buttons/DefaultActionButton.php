<?php

namespace Neox\Ramen\Messenger\Buttons;

/**
 * Class DefaultActionButton
 * @package Neox\Ramen\Messenger\Templates\Payload\Buttons
 */
class DefaultActionButton extends UrlButton
{
    /**
     * No title for default button
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'type'                 => self::TYPE_WEB_URL,
            'url'                  => $this->getUrl(),
            "messenger_extensions" => $this->isMessengerExtensions(),
            "webview_height_ratio" => $this->getWebviewHeightRatio(),
        ];
    }
}
