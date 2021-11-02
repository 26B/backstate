<?php

namespace TwentySixB\BackState\Components\Livewire\Table;

trait WithAttributes
{
    /**
     * Component attributes by key (component identification).
     */
    protected array $attributesByKey = [];

    /**
     * Get attributes bag indexed with $key.
     *
     * @param string $key Key that is indexing wanted attribute bag.
     * @return array
     */
    public function getAttributes(string $key = 'default'): array
    {
        if (!array_key_exists($key, $this->attributesByKey)) {
            return [];
        }

        return $this->attributesByKey[$key];
    }

    /**
     * Set attributes (bag) that will indexed by $key.
     *
     * @param array $attributes Attributes to convert in attribute bag and index with $key.
     * @param string $key Key index to reference $attributes.
     * @return void
     */
    public function setAttributes(array $attributes, string $key = 'default'): void
    {
        $this->attributesByKey[$key] = $attributes;
    }
}
