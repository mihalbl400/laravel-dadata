<?php


namespace Mihalbl400\Dadata\Response;

use DateTime;

/**
 * Usage statistics
 *
 * Aгрегированная статистика за конкретный день по каждому из сервисов:
 * стандартизация - clean
 * подсказки - suggestions
 * поиск дублей - merging
 *
 * @link https://dadata.ru/api/stat/
 * @package Mihalbl400\Dadata\Response
 */
class Statistics extends AbstractResponse
{

    /**
     * @var DateTime Дата отчета
     */
    public $date;

    /**
     * @var StatisticServices Услуги
     */
    public $services;

}