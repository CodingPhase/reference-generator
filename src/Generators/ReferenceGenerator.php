<?php
namespace CodingPhase\ReferenceGenerator\Generators;


class ReferenceGenerator extends RandomStringGenerator
{
    /**
     * Model class name
     */
    protected $model;

    /**
     * Reference column im model database
     */
    protected $referenceColumn;

    /**
     * ReferenceGenerator constructor.
     *
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
        $this->referenceColumn = config('reference-generator.default_column');
    }

    /**
     * @param mixed $referenceColumn
     * @return ReferenceGenerator
     */
    public function setReferenceColumn($referenceColumn)
    {
        $this->referenceColumn = $referenceColumn;

        return $this;
    }

    /**
     * Validate if string is unique in given model
     *
     * @return mixed
     */
    protected function validate()
    {
        $model = $this->model;

        return $model::where($this->referenceColumn, $this->string)->get()->isEmpty();
    }
}