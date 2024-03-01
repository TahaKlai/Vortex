<?php

namespace ContainerWvICmtA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_ExpressionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator(new \Symfony\Component\ExpressionLanguage\ExpressionLanguage(($container->services['cache.validator_expression_language'] ?? $container->load('getCache_ValidatorExpressionLanguageService'))));
    }
}
