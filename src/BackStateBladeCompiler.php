<?php

namespace TwentySixB\BackState;

use Illuminate\View\Compilers\BladeCompiler;

class BackStateBladeCompiler extends BladeCompiler
{
    /**
     * Clone compiler data to $this compiler.
     *
     * @param BladeCompiler $compiler Compiler to get data from.
     * @return void
     */
    public function clone(BladeCompiler $compiler): void
    {
        foreach (get_object_vars($compiler) as $key => $value) {
            $this->{$key} = $value;
        }
    }

    /**
     * @inheritDoc
     */
    protected function compileComponentTags($value)
    {
        if (! $this->compilesComponentTags) {
            return $value;
        }

        return (new HomogeneousTagNameCompiler(
            $this->classComponentAliases, $this->classComponentNamespaces, $this
        ))->compile($value);
    }
}
