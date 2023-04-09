<?php

declare(strict_types=1);

namespace Termwind;

use ReflectionClass;
use Symfony\Component\Console\Helper\SymfonyQuestionHelper;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\StreamableInputInterface;
use Symfony\Component\Console\Question\Question as SymfonyQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;
use Termwind\Helpers\QuestionHelper;

/**
 * @internal
 */
final class Question
{
    /**
     * The streamable input to receive the input from the user.
     */
    private static StreamableInputInterface|null $streamableInput;

    /**
     * An instance of Symfony's question helper.
     */
    private SymfonyQuestionHelper $helper;

    public function __construct(SymfonyQuestionHelper $helper = null)
    {
        $this->helper = $helper ?? new QuestionHelper();
    }

    /**
     * Sets the streamable input implementation.
     */
    public static function setStreamableInput(StreamableInputInterface|null $streamableInput): void
    {
        self::$streamableInput = $streamableInput ?? new ArgvInput();
    }

    /**
     * Gets the streamable input implementation.
     */
    public static function getStreamableInput(): StreamableInputInterface
    {
        return self::$streamableInput ??= new ArgvInput();
    }

    /**
     * Renders a prompt to the user.
     *
     * @param  iterable<array-key, string>|null  $autocomplete
     */
    public function ask(string $question, iterable $autocomplete = null): mixed
    {
        $html = (new HtmlRenderer)->parse($question)->toString();

<<<<<<< HEAD
        $question = new SymfonyQuestion($html);

        if ($autocomplete !== null) {
            $question->setAutocompleterValues($autocomplete);
        }

=======
>>>>>>> 112d54332b9e9998f49eb280f1b4a26a1801bafc
        $output = Termwind::getRenderer();

        if ($output instanceof SymfonyStyle) {
            $property = (new ReflectionClass(SymfonyStyle::class))
                ->getProperty('questionHelper');

            $property->setAccessible(true);

            $currentHelper = $property->isInitialized($output)
                ? $property->getValue($output)
                : new SymfonyQuestionHelper();

            $property->setValue($output, new QuestionHelper);

            try {
<<<<<<< HEAD
                return $output->askQuestion($question);
=======
                return $output->ask($html);
>>>>>>> 112d54332b9e9998f49eb280f1b4a26a1801bafc
            } finally {
                $property->setValue($output, $currentHelper);
            }
        }

        return $this->helper->ask(
            self::getStreamableInput(),
            Termwind::getRenderer(),
            $question,
        );
    }
}
