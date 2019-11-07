<?php

namespace ExtremeSa\Aramex\API\Response\Location;

use ExtremeSa\Aramex\API\Classes\State;
use ExtremeSa\Aramex\API\Response\Response;

class StatesFetchingResponse extends Response
{
    private $states;

    /**
     * @return string[]
     */
    public function getStates(): array
    {
        return $this->states;
    }

    /**
     * @param State[] $states
     * @return $this
     */
    public function setStates(array $states): StatesFetchingResponse
    {
        $this->states = $states;
        return $this;
    }

    /**
     * @param State[] $state
     * @return $this
     */
    public function addState(State $state): StatesFetchingResponse
    {
        $this->states[] = $state;
        return $this;
    }

    /**
     * @param object $obj
     * @return self
     */
    protected function parse($obj)
    {
        parent::parse($obj);

        if ($obj->States && property_exists($obj->States, 'State')) {
            $states = $obj->States->State;

            foreach ($states as $state) {
                $this->addState(
                    (new State())
                        ->setCode($state->Code)
                        ->setName($state->Name)
                );
            }
        }

        return $this;
    }

    /**
     * @param object $obj
     * @return RateResponse
     */
    public static function make($obj)
    {
        return (new self())->parse($obj);
    }

}