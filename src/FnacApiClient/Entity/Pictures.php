<?php

namespace FnacApiClient\Entity;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Images definition.
 *
 * @author     Eric Kuchta
 * @version    1.0.1
 */

class Pictures extends Entity
{
    /** Send Var **/

    /** Get Var **/

    /** Both **/
    private $picture_1;
    private $picture_2;
    private $picture_3;
    private $picture_4;

    /**
     * {@inheritDoc}
     */
    public function normalize(NormalizerInterface $normalizer, $format = null, array $context = array())
    {
        if (!is_null($this->picture_1)) {
            $data['picture_1'] = $this->picture_1;
        }

        if (!is_null($this->picture_2)) {
            $data['picture_2'] = $this->picture_2;
        }

        if (!is_null($this->picture_3)) {
            $data['picture_3'] = $this->picture_3;
        }

        if (!is_null($this->picture_4)) {
            $data['picture_4'] = $this->picture_4;
        }

        return $data;
    }

    /**
     * {@inheritDoc}
     */
    public function denormalize(DenormalizerInterface $denormalizer, $data, $format = null, array $context = array())
    {
        $this->picture_1 = $data['picture_1'];
        $this->picture_2 = $data['picture_2'];
        $this->picture_3 = $data['picture_3'];
        $this->picture_4 = $data['picture_4'];
    }

    /**
     * Picture 1
     *
     * @return string
     */
    public function getPicture1()
    {
        return $this->picture_1;
    }

    /**
     * Picture 2
     *
     * @return string
     */
    public function getPicture2()
    {
        return $this->picture_2;
    }

    /**
     * Picture 3
     *
     * @return string
     */
    public function getPicture3()
    {
        return $this->picture_3;
    }

    /**
     * Picture 4
     *
     * @return string
     */
    public function getPicture4()
    {
        return $this->picture_4;
    }


    /**
     * Set Picture 1
     *
     * @param string $picture_1
     */
    public function setPicture1($picture_1)
    {
        $this->picture_1 = $picture_1;
    }

    /**
     * Set Picture 2
     *
     * @param string $picture_2
     */
    public function setPicture2($picture_2)
    {
        $this->picture_2 = $picture_2;
    }

    /**
     * Set Picture 3
     *
     * @param string $picture_3
     */
    public function setPicture3($picture_3)
    {
        $this->picture_3 = $picture_3;
    }

    /**
     * Set Picture 1
     *
     * @param string $picture_4
     */
    public function setPicture4($picture_4)
    {
        $this->picture_4 = $picture_4;
    }

}
