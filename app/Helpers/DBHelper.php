<?php

namespace App\Helpers;

use PDO;
use Illuminate\Support\Facades\DB;

class DBHelper
{
    /**
     * Get connection.
     *
     * @return \Illuminate\Database\Connection
     */
    public static function connection() {
        return DB::connection();
    }

    /**
     * Get the version of DB engine.
     *
     * @return string|null
     */
    public static function version()
    {
        try {
            return static::connection()->getPdo()->getAttribute(PDO::ATTR_SERVER_VERSION);
        } catch (\Exception $e) {
            return;
        }
    }

    /**
     * Test if db version if greater than $version param.
     *
     * @param string $version
     * @return bool
     */
    public static function testVersion($version)
    {
        return version_compare(static::version(), $version) >= 0;
    }

    /**
     * Get list of tables on this instance.
     *
     * @return array
     */
    public static function getTables()
    {
        return DB::select('SELECT table_name as `table_name`
                FROM information_schema.tables
                WHERE table_schema = :table_schema
                AND table_name LIKE :table_prefix', [
            'table_schema' => static::connection()->getDatabaseName(),
            'table_prefix' => '%'.static::connection()->getTablePrefix().'%',
        ]);
    }

    public static function getTable($name)
    {
        return '`'.static::connection()->getTablePrefix().$name.'`';
    }
}
