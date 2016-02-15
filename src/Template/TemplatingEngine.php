<?php declare(strict_types = 1);

namespace JDR\MailerBundle\Template;

use JDR\Mailer\Template\Engine;
use Symfony\Component\Templating\EngineInterface;

class TemplatingEngine implements Engine
{
    /**
     * @var EngineInterface
     */
    private $templating;

    /**
     * Constructor.
     *
     * @param EngineInterface $templating
     */
    public function __construct(EngineInterface $templating = null)
    {
        $this->templating = $templating;
    }

    /**
     * {@inheritdoc}
     */
    public function render(string $name, array $parameters = [])
    {
        return $this->templating->render($name, $parameters);
    }
}
