<?php

namespace TwentySixB\BackState;

use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Compilers\ComponentTagCompiler as CompilersComponentTagCompiler;
use InvalidArgumentException;
use TwentySixB\BackState\Config\Components;

class HomogeneousTagNameCompiler extends CompilersComponentTagCompiler
{
    /**
     * Store component names by compiler (blade / livewire).
     */
    private array $componentNamesByCompiler;

    /**
     * Original base component name dependign on the compiler (blade / livewier).
     */
    private array $originalBaseName;

    /**
     * @inheritDoc
     */
    public function __construct(
        array $aliases = [],
        array $namespaces = [],
        ?BladeCompiler $blade = null
    ) {
        parent::__construct($aliases, $namespaces, $blade);
        $this->componentNamesByCompiler = Components::config()['componentsName'];
        $this->originalBaseName = Components::config()['baseName'];
    }

    /**
     * Restore opening tag name to its original one within the given string.
     *
     * @param  string  $value
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    protected function compileOpeningTags(string $value)
    {
        $pattern = "/
            <
                \s*
                backstate\:([\w\-\:\.]*)
                (?<attributes>
                    (?:
                        \s+
                        (?:
                            (?:
                                \{\{\s*\\\$attributes(?:[^}]+?)?\s*\}\}
                            )
                            |
                            (?:
                                [\w\-:.@]+
                                (
                                    =
                                    (?:
                                        \\\"[^\\\"]*\\\"
                                        |
                                        \'[^\']*\'
                                        |
                                        [^\'\\\"=<>]+
                                    )
                                )?
                            )
                        )
                    )*
                    \s*
                )
                (?<![\/=\-])
            >
        /x";

        $value = preg_replace_callback($pattern, function (array $matches) {
            return "<{$this->restoreOriginalComponentName($matches[1])} {$matches['attributes']}>";
        }, $value);

        return parent::compileOpeningTags($value);
    }

    /**
     * Restore self-closing tag name to its original one within the given string.
     *
     * @param  string  $value
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    protected function compileSelfClosingTags(string $value)
    {
        $pattern = "/
            <
                \s*
                backstate\:([\w\-\:\.]*)
                \s*
                (?<attributes>
                    (?:
                        \s+
                        (?:
                            (?:
                                \{\{\s*\\\$attributes(?:[^}]+?)?\s*\}\}
                            )
                            |
                            (?:
                                [\w\-:.@]+
                                (
                                    =
                                    (?:
                                        \\\"[^\\\"]*\\\"
                                        |
                                        \'[^\']*\'
                                        |
                                        [^\'\\\"=<>]+
                                    )
                                )?
                            )
                        )
                    )*
                    \s*
                )
            \/>
        /x";

        $value = preg_replace_callback($pattern, function (array $matches) {
            return "<{$this->restoreOriginalComponentName($matches[1])} {$matches['attributes']}/>";
        }, $value);

        return parent::compileSelfClosingTags($value);
    }

    /**
     * Restore closing tag name to its original one within the given string.
     *
     * @param  string  $value
     * @return string
     */
    protected function compileClosingTags(string $value)
    {
        $pattern = "/
            <\/
                \s*
                backstate\:([\w\-\:\.]*)
                \s*
            >
        /x";

        $value = preg_replace_callback($pattern, function (array $matches) {
            return '</'.$this->restoreOriginalComponentName($matches[1]).'>';
        }, $value);

        return parent::compileClosingTags($value);
    }

    /**
     * Restore original name of component (based on blade and livewire standards).
     *
     * @param string $name Compnent name (backstate).
     * @return string Original component name.
     */
    private function restoreOriginalComponentName(string $name): string
    {
        if (in_array($name, $this->componentNamesByCompiler['blade'])) {
            return 'x-'.$this->originalBaseName['blade'].$name;
        } else if (in_array($name, $this->componentNamesByCompiler['livewire'])) {
            return 'livewire:'.$this->originalBaseName['livewire'].$name;
        }

        return $name;
    }
}
