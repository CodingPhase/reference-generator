<?php
namespace CodingPhase\ReferenceGenerator\Generators;


class RandomStringGenerator
{
    /**
     * Generated string.
     *
     * @var null
     */
    protected $string = null;

    /**
     * Length of string.
     *
     * @var int
     */
    protected $length;

    /**
     * If string should be uppercase?
     *
     * @var bool
     */
    protected $uppercase = true;

    public function __construct()
    {
        $this->length = config('reference-generator.default_length');
    }

    /**
     * Get generated string.
     *
     * @return null
     */
    public function get()
    {
        return $this->string;
    }

    /**
     * Generate string untill its valid.
     *
     * @return $this
     */
    public function generate()
    {
        $this->string = str_random($this->length);

        if ($this->uppercase) {
            $this->string = strtoupper($this->string);
        }

        if (! $this->isValid()) {
            $this->generate();
        }

        return $this;
    }

    /**
     * If string is valid?
     *
     * @return bool
     */
    protected function isValid()
    {
        return $this->validate();
    }

    /**
     * Validate if string is correct.
     *
     * @return bool
     */
    protected function validate()
    {
        return true;
    }

    /**
     * Set length of generated string.
     *
     * @param $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Make generated string uppercase.
     *
     * @param $value
     * @return $this
     */
    public function uppercase($value)
    {
        $this->uppercase = $value;

        return $this;
    }
}