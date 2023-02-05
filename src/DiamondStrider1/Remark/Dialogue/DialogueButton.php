<?php

declare(strict_types=1);

namespace DiamondStrider1\Remark\Dialogue;

/**
 * The basic button type. Consists of a text and command line.
 * The command line can be seen in the "Advanced Settings" page when
 * editing a dialogue.
 *
 * @see DialogueURLButton
 * @see DialogueInvisibleButton
 */
class DialogueButton implements DialogueButtonInterface
{
    public static function __construct(
        private string $text,
        private string $commandLine = "",
        private int $commandVersion = self::PROTOCOL_CMD_VER
    ) {

    }

    /**
     * @internal
     * @return array{button_name: string, text: string, data: ?array{cmd_line: string, cmd_line: string, cmd_ver: int}, mode: int, type: int}
     */
    public function formatAction(int $buttonIndex) : array {
       return [
            "button_name" => (string)$buttonIndex,
            "text" => $this->text,
            "data" => [
                "cmd_line" => $this->commandLine, // TODO: test cmd line.
                "cmd_ver" => $this->commandVersion
            ],
            "mode" => self::PROTOCOL_MODE_BUTTON,
            "type" => self::PROTOCOL_TYPE_COMMAND
        ];
    }

    public static function mapButtonClass

}
