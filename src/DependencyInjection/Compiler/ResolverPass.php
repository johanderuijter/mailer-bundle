<?php declare(strict_types = 1);

namespace JDR\MailerBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class ResolverPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('jdr.mailer.part_resolver_registry')) {
            return;
        }

        $definition = $container->getDefinition(
            'jdr.mailer.part_resolver_registry'
        );

        $taggedServices = $container->findTaggedServiceIds(
            'jdr.mailer.resolver'
        );
        foreach ($taggedServices as $id => $tags) {
            foreach ($tags as $attributes) {
                $definition->addMethodCall(
                    'addResolver',
                    array(new Reference($id), $attributes['part'])
                );
            }
        }
    }
}
