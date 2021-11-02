<?php

namespace TwentySixB\BackState\Components\Livewire\Table;

use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Column
{
    use WithAttributes;

    /**
     * Callable to get/infer a specific data from the model.
     *
     * @var callable
     */
    protected $dataCallback;

    /**
     * True if data component is an inline component, false otherwise.
     */
    protected bool $isDataInlineComponent;

    /**
     * True if header component is an inline component, false otherwise.
     */
    protected bool $isHeaderInlineComponent;

    /**
     * Model attribute that is directed related with $this column (could be null).
     */
    protected ?string $modelAttribute;

    /**
     * True if column is searchable, false otherwise.
     */
    protected bool $searchable;

    /**
     * Search callback to filter results by $this column.
     *
     * @var callable
     */
    protected $searchCallback;

    /**
     * True if column is sortable, false otherwise.
     */
    protected bool $sortable;

    /**
     * Sort callback to sort models by $this column.
     *
     * @var callable
     */
    protected $sortCallback;

    /**
     * Column title;
     */
    protected string $title;

    /**
     * Data view component (blade or livewire) to render.
     */
    protected string $dataViewComponent;

    /**
     * Header view component (blade or livewire) to render.
     */
    protected string $headerViewComponent;

    /**
     * Static method to instantiate a column (just calls the constructor).
     *
     * @see TwentySixB\BackState\Components\Livewire\Table::__construct
     */
    public static function make(string $title, $getData = null)
    {
        return new static($title, $getData);
    }

    /**
     * Instantiate a new table column.
     *
     * @param string $title Column title.
     * @param null|string|callable $getData If null, $title will be used to get the data stored in
     *      the model's derived attribute. Else if $getData is a string then it must be a valid
     *      attribute name of the model. Else $getData is a closure used to derive the data wanted
     *      to extract from the model.
     * @return void
     * @throws Exception
     */
    public function __construct(string $title, $getData = null)
    {
        $this->searchable = false;
        $this->sortable = false;
        $this->isDataInlineComponent = false;
        $this->isHeaderInlineComponent = false;
        $this->dataViewComponent = 'backstate::blade.table.data.default';
        $this->headerViewComponent = 'backstate::blade.table.header.default';
        $this->title = $title;
        $this->modelAttribute = null;
        $getData ??= Str::snake(Str::lower($title));

        if (is_string($getData)) {
            $this->modelAttribute = $getData;
            $this->dataCallback = fn ($model) => $model->$getData;
        } else if (is_callable($getData)) {
            $this->dataCallback = $getData;
        } else {
            //TODO: create custom exception
            throw new Exception();
        }
    }

    /**
     * Extract data from the $model to then pass to table data cell component.
     *
     * @return mixed Model data.
     */
    public function getData(Model $model)
    {
        return ($this->dataCallback)($model);
    }

    /**
     * Column title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Component view to render column's data.
     *
     * @return string Component name.
     */
    public function getDataViewComponent(): string
    {
        return $this->dataViewComponent;
    }

    /**
     * Component view to render column's header.
     *
     * @return string Component name.
     */
    public function getHeaderViewComponent(): string
    {
        return $this->headerViewComponent;
    }

    /**
     * Check if data component is an inline component.
     *
     * @return bool True if data component is an inline component, false otherwise.
     */
    public function isDataInlineComponent(): bool
    {
        return $this->isDataInlineComponent;
    }

    /**
     * Check if header component is an inline component.
     *
     * @return bool True if header component is an inline component, false otherwise.
     */
    public function isHeaderInlineComponent(): bool
    {
        return $this->isHeaderInlineComponent;
    }

    /**
     * True if $this column is searchable (search models by this column), false otherwise.
     *
     * @return bool True if $this column is searchable, false otherwise.
     */
    public function isSearchable(): bool
    {
        return $this->searchable;
    }

    /**
     * True if $this column is sortable (sort models by this column), false otherwise.
     *
     * @return bool True if $this column is sortable, false otherwise.
     */
    public function isSortable(): bool
    {
        return $this->sortable;
    }

    /**
     * Get column search callback to filter results by $this column query.
     *
     * @return callable Column's search callback.
     */
    public function searchCallback(): callable
    {
        return $this->searchCallback;
    }

    /**
     * Set column as searchable.
     *
     * @param null|string|callable $callback If $callback is `null` use the table column defined in
     *      $modelAttribute to search the records. If $callback is a `string` use it as the column to
     *      search the records. Finally if $callback is a `callable` use it as custom search (without
     *      any preprocessing).
     * @return Column
     */
    public function searchable($toSearch = null): self
    {
        if (is_callable($toSearch)) {
            $this->searchCallback = $toSearch;
        } else {
            if (is_string($toSearch)) {
                $column = $toSearch;
            } elseif (!is_null($this->modelAttribute)) {
                $column = $this->modelAttribute;
            } else {
                //TODO: create custom exception.
                throw new Exception();
            }

            $this->searchCallback = fn ($query, $search) => (
                fn ($query) => $query->where($column, 'like', "%{$search}%")
            );
        }

        $this->searchable = true;
        return $this;
    }

    /**
     * Auxiliary function to set set data (body cell) component extra attributes.
     *
     * @param array $attributes Data attributes.
     * @return Column
     */
    public function setDataAttributes(array $attributes): self
    {
        $this->setAttributes($attributes, 'data');
        return $this;
    }

    /**
     * Auxiliary function to set set header component extra attributes.
     *
     * @param array $attributes Header attributes.
     * @return Column
     */
    public function setHeaderAttributes(array $attributes): self
    {
        $this->setAttributes($attributes, 'header');
        return $this;
    }

    /**
     * Inline view to render (header or data).
     *
     * @param string $inlineView Inline view to render.
     * @return string Component/view name where inline view is now stored.
     */
    private function setInlineView(string $inlineView): string
    {
        $compiledViewsDir = config('view.compiled');
        $inlineViewFile = $compiledViewsDir.DIRECTORY_SEPARATOR.sha1($inlineView).'.blade.php';
        app()['view']->addNamespace(
            '__components',
            $compiledViewsDir
        );

        if (!file_exists($inlineViewFile)) {
            if (!is_dir($compiledViewsDir)) {
                mkdir($compiledViewsDir, 0755, true);
            }

            file_put_contents($inlineViewFile, $inlineView);
        }

        return '__components::'.basename($inlineViewFile, '.blade.php');
    }

    /**
     * Set a component view (for the column's header component or data component).
     *
     * @param string $view View component name if $inlineComponent is false, otherwise is an
     *      inline component (blade string).
     * @param string $inlineComponent True if $view is an inline component (blade string), otherwise
     *      $view is the name of the view component to render.
     * @return string Name of the view component to render.
     */
    private function setViewComponent(string $view, bool $inlineComponent): string
    {
        if ($inlineComponent) {
            return $this->setInlineView($view);
        }

        return $view;
    }

    /**
     * Column data view component name to render.
     *
     * @param string Data view component name.
     * @return Column
     */
    public function setDataViewComponent(string $view, bool $inlineComponent = false): self
    {
        $this->dataViewComponent = $this->setViewComponent($view, $inlineComponent);
        $this->isDataInlineComponent = $inlineComponent;
        return $this;
    }

    /**
     * Column header view component name to render.
     *
     * @param string Header view component name.
     * @return Column
     */
    public function setHeaderViewComponent(string $view, bool $inlineComponent = false): self
    {
        $this->headerViewComponent = $this->setViewComponent($view, $inlineComponent);
        $this->isHeaderInlineComponent = $inlineComponent;
        return $this;
    }

    /**
     * Apply column sort ($this->sortCallback) to the given query.
     *
     * @param Builder $query Model query.
     * @param string $sortDirection Sort direction to apply ('asc' or 'desc').
     * @return Builder Query sorted by $this column.
     */
    public function sort(Builder $query, string $sortDirection): Builder
    {
        return ($this->sortCallback)($query, $sortDirection);
    }

    /**
     * Set column as sortable.
     *
     * @param null|string|callable $callback If $callback is `null` use the table column defined in
     *      $modelAttribute to sort records. If $callback is a `string` use it as the column to
     *      sort the records. Finally if $callback is a `callable` use it as custom sort (without any
     *      preprocessing).
     * @return Column
     */
    public function sortable($toSort = null): self
    {
        if (is_callable($toSort)) {
            $this->sortCallback = $toSort;
        } else {
            if (is_string($toSort)) {
                $column = $toSort;
            } elseif (!is_null($this->modelAttribute)) {
                $column = $this->modelAttribute;
            } else {
                //TODO: create custom exception.
                throw new Exception();
            }

            $this->sortCallback = fn ($query, $sortDir) => $query->orderBy($column, $sortDir);
        }

        $this->sortable = true;
        return $this;
    }
}
