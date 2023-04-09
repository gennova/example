<?php

namespace Illuminate\Support\Facades;

/**
 * @method static void defaultStringLength(int $length)
 * @method static void defaultMorphKeyType(string $type)
 * @method static void morphUsingUuids()
 * @method static void morphUsingUlids()
 * @method static void useNativeSchemaOperationsIfPossible(bool $value = true)
 * @method static bool createDatabase(string $name)
 * @method static bool dropDatabaseIfExists(string $name)
 * @method static bool hasTable(string $table)
 * @method static bool hasColumn(string $table, string $column)
 * @method static bool hasColumns(string $table, array $columns)
 * @method static void whenTableHasColumn(string $table, string $column, \Closure $callback)
 * @method static void whenTableDoesntHaveColumn(string $table, string $column, \Closure $callback)
 * @method static string getColumnType(string $table, string $column)
 * @method static void morphUsingUuids()
 * @method static void morphUsingUlids()
 * @method static \Illuminate\Database\Connection getConnection()
 * @method static \Illuminate\Database\Schema\Builder setConnection(\Illuminate\Database\Connection $connection)
 * @method static void blueprintResolver(\Closure $resolver)
 *
 * @see \Illuminate\Database\Schema\Builder
 */
class Schema extends Facade
{
    /**
     * Indicates if the resolved facade should be cached.
     *
     * @var bool
     */
    protected static $cached = false;

    /**
     * Get a schema builder instance for a connection.
     *
     * @param  string|null  $name
     * @return \Illuminate\Database\Schema\Builder
     */
    public static function connection($name)
    {
        return static::$app['db']->connection($name)->getSchemaBuilder();
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'db.schema';
    }
}
