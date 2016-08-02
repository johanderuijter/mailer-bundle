<?php declare(strict_types = 1);

namespace JDR\MailerBundle;

use JDR\MailerBundle\DependencyInjection\Compiler\ResolverPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JDRMailerBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ResolverPass());
    }
}
