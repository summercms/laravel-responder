<?php

namespace Flugg\Responder\Contracts;

/**
 * Contract for registering and resolving error messages from error codes.
 */
interface ErrorMessageRegistry
{
    /**
     * Register error messages mapped to error codes.
     *
     * @param array|int|string $code
     * @param string|null $message
     * @return void
     */
    public function register($code, ?string $message = null): void;

    /**
     * Resolve an error message from an error code.
     *
     * @param int|string $code
     * @return string|null
     */
    public function resolve($code): ?string;
}