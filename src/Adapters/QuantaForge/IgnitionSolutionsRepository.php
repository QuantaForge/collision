<?php

declare(strict_types=1);

namespace NunoMaduro\Collision\Adapters\QuantaForge;

use NunoMaduro\Collision\Contracts\SolutionsRepository;
use QuantaForge\Ignition\Contracts\SolutionProviderRepository;
use Throwable;

/**
 * @internal
 */
final class IgnitionSolutionsRepository implements SolutionsRepository
{
    /**
     * Holds an instance of ignition solutions provider repository.
     *
     * @var \QuantaForge\Ignition\Contracts\SolutionProviderRepository
     */
    protected $solutionProviderRepository;

    /**
     * IgnitionSolutionsRepository constructor.
     */
    public function __construct(SolutionProviderRepository $solutionProviderRepository)
    {
        $this->solutionProviderRepository = $solutionProviderRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getFromThrowable(Throwable $throwable): array
    {
        return $this->solutionProviderRepository->getSolutionsForThrowable($throwable);
    }
}
