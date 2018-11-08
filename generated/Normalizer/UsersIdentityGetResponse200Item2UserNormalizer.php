<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UsersIdentityGetResponse200Item2UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\UsersIdentityGetResponse200Item2User';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2User;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\UsersIdentityGetResponse200Item2User();
        $data = clone $data;
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
            unset($data->{'id'});
        }
        if (property_exists($data, 'image_192')) {
            $object->setImage192($data->{'image_192'});
            unset($data->{'image_192'});
        }
        if (property_exists($data, 'image_24')) {
            $object->setImage24($data->{'image_24'});
            unset($data->{'image_24'});
        }
        if (property_exists($data, 'image_32')) {
            $object->setImage32($data->{'image_32'});
            unset($data->{'image_32'});
        }
        if (property_exists($data, 'image_48')) {
            $object->setImage48($data->{'image_48'});
            unset($data->{'image_48'});
        }
        if (property_exists($data, 'image_512')) {
            $object->setImage512($data->{'image_512'});
            unset($data->{'image_512'});
        }
        if (property_exists($data, 'image_72')) {
            $object->setImage72($data->{'image_72'});
            unset($data->{'image_72'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
            unset($data->{'name'});
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getImage192()) {
            $data->{'image_192'} = $object->getImage192();
        }
        if (null !== $object->getImage24()) {
            $data->{'image_24'} = $object->getImage24();
        }
        if (null !== $object->getImage32()) {
            $data->{'image_32'} = $object->getImage32();
        }
        if (null !== $object->getImage48()) {
            $data->{'image_48'} = $object->getImage48();
        }
        if (null !== $object->getImage512()) {
            $data->{'image_512'} = $object->getImage512();
        }
        if (null !== $object->getImage72()) {
            $data->{'image_72'} = $object->getImage72();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value;
            }
        }

        return $data;
    }
}