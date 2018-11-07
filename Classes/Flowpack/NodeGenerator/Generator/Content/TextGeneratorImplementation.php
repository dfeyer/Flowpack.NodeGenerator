<?php
namespace Flowpack\NodeGenerator\Generator\Content;

/*                                                                        *
 * This script belongs to the Neos package "Flowpack.NodeGenerator".      *
 *                                                                        *
 *                                                                        */

use Flowpack\NodeGenerator\Generator\AstractNodeGeneratorImplementation;
use KDambekalns\Faker\Lorem;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Domain\Model\NodeType;
use Neos\ContentRepository\Exception\NodeExistsException;

/**
 * Text Node Generator
 */
class TextGeneratorImplementation extends AstractNodeGeneratorImplementation
{
    /**
     * @param NodeInterface $parentNode
     * @param NodeType $nodeType
     * @return NodeInterface
     * @throws NodeExistsException
     */
    public function create(NodeInterface $parentNode, NodeType $nodeType)
    {
        $contentNode = $parentNode->createNode(uniqid('node'), $nodeType);
        $contentNode->setProperty('text', sprintf('<p>%s</p>', Lorem::paragraph(rand(1, 10))));

        return $contentNode;
    }
}
