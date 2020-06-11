<?php

/**
 * Sellsy Client.
 *
 * LICENSE
 *
 * This source file is subject to the MIT license and the version 3 of the GPL3
 * license that are bundled with this package in the folder licences
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to richarddeloge@gmail.com so we can send you a copy immediately.
 *
 *
 * @copyright   Copyright (c) 2009-2016 Richard Déloge (richarddeloge@gmail.com)
 *
 * @link        http://teknoo.software/sellsy-client Project website
 *
 * @license     http://teknoo.software/sellsy-client/license/mit         MIT License
 * @author      Richard Déloge <richarddeloge@gmail.com>
 */

namespace Teknoo\Sellsy\Method;

use Teknoo\Immutable\ImmutableTrait;
use Teknoo\Sellsy\Collection\CollectionInterface;
use Teknoo\Sellsy\Client\ResultInterface;

/**
 * Implementation to define entity able to represent an available method in the Sellsy Api/
 * Instance are directly invokable, but parameters must passed into an array and not been passed
 * like a normal PHP method.
 *
 * @copyright   Copyright (c) 2009-2019 Richard Déloge (richarddeloge@gmail.com)
 *
 * @link        http://teknoo.software/sellsy-client Project website
 *
 * @license     http://teknoo.software/sellsy-client/license/mit         MIT License
 * @author      Richard Déloge <richarddeloge@gmail.com>
 */
class Method implements MethodInterface
{
    use ImmutableTrait;

    /**
     * Collection owning this method.
     *
     * @var CollectionInterface
     */
    private $collection;

    /**
     * Name of this method on the Sellsy API.
     *
     * @var string
     */
    private $name;

    /**
     * Method constructor.
     *
     * @param CollectionInterface $collection
     * @param string              $name
     */
    public function __construct(CollectionInterface $collection, string $name)
    {
        $this->collection = $collection;
        $this->name = $name;

        $this->collection->registerMethod($this);

        $this->uniqueConstructorCheck();
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection(): CollectionInterface
    {
        return $this->collection;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     * @param array<mixed, mixed> $params
     */
    public function __invoke(array $params = []): ResultInterface
    {
        $client = $this->collection->getClient();

        return $client->run($this, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return ($this->collection->getName()) . '.' . $this->name;
    }
}
