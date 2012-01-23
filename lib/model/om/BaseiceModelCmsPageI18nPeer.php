<?php


/**
 * Base static class for performing query and update operations on the 'cms_page_i18n' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceCmsPlugin.lib.model.om
 */
abstract class BaseiceModelCmsPageI18nPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'propel';

  /** the table name for this class */
  const TABLE_NAME = 'cms_page_i18n';

  /** the related Propel class for this table */
  const OM_CLASS = 'iceModelCmsPageI18n';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'plugins.iceCmsPlugin.lib.model.iceModelCmsPageI18n';

  /** the related TableMap class for this table */
  const TM_CLASS = 'iceModelCmsPageI18nTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 7;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 7;

  /** the column name for the ID field */
  const ID = 'cms_page_i18n.ID';

  /** the column name for the NAME field */
  const NAME = 'cms_page_i18n.NAME';

  /** the column name for the SLUG field */
  const SLUG = 'cms_page_i18n.SLUG';

  /** the column name for the CONTENTS field */
  const CONTENTS = 'cms_page_i18n.CONTENTS';

  /** the column name for the META_DESCRIPTION field */
  const META_DESCRIPTION = 'cms_page_i18n.META_DESCRIPTION';

  /** the column name for the META_KEYWORDS field */
  const META_KEYWORDS = 'cms_page_i18n.META_KEYWORDS';

  /** the column name for the CULTURE field */
  const CULTURE = 'cms_page_i18n.CULTURE';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of iceModelCmsPageI18n objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array iceModelCmsPageI18n[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'Slug', 'Contents', 'MetaDescription', 'MetaKeywords', 'Culture', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'name', 'slug', 'contents', 'metaDescription', 'metaKeywords', 'culture', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::NAME, self::SLUG, self::CONTENTS, self::META_DESCRIPTION, self::META_KEYWORDS, self::CULTURE, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NAME', 'SLUG', 'CONTENTS', 'META_DESCRIPTION', 'META_KEYWORDS', 'CULTURE', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'slug', 'contents', 'meta_description', 'meta_keywords', 'culture', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'Slug' => 2, 'Contents' => 3, 'MetaDescription' => 4, 'MetaKeywords' => 5, 'Culture' => 6, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'name' => 1, 'slug' => 2, 'contents' => 3, 'metaDescription' => 4, 'metaKeywords' => 5, 'culture' => 6, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::NAME => 1, self::SLUG => 2, self::CONTENTS => 3, self::META_DESCRIPTION => 4, self::META_KEYWORDS => 5, self::CULTURE => 6, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NAME' => 1, 'SLUG' => 2, 'CONTENTS' => 3, 'META_DESCRIPTION' => 4, 'META_KEYWORDS' => 5, 'CULTURE' => 6, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'slug' => 2, 'contents' => 3, 'meta_description' => 4, 'meta_keywords' => 5, 'culture' => 6, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
  );

  /**
   * Translates a fieldname to another type
   *
   * @param      string $name field name
   * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @param      string $toType   One of the class type constants
   * @return     string translated name of the field.
   * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
   */
  static public function translateFieldName($name, $fromType, $toType)
  {
    $toNames = self::getFieldNames($toType);
    $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
    if ($key === null)
    {
      throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
    }
    return $toNames[$key];
  }

  /**
   * Returns an array of field names.
   *
   * @param      string $type The type of fieldnames to return:
   *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     array A list of field names
   */

  static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
  {
    if (!array_key_exists($type, self::$fieldNames))
    {
      throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
    }
    return self::$fieldNames[$type];
  }

  /**
   * Convenience method which changes table.column to alias.column.
   *
   * Using this method you can maintain SQL abstraction while using column aliases.
   * <code>
   *    $c->addAlias("alias1", TablePeer::TABLE_NAME);
   *    $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
   * </code>
   * @param      string $alias The alias for the current table.
   * @param      string $column The column name for current table. (i.e. iceModelCmsPageI18nPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(iceModelCmsPageI18nPeer::TABLE_NAME.'.', $alias.'.', $column);
  }

  /**
   * Add all the columns needed to create a new object.
   *
   * Note: any columns that were marked with lazyLoad="true" in the
   * XML schema will not be added to the select list and only loaded
   * on demand.
   *
   * @param      Criteria $criteria object containing the columns to add.
   * @param      string   $alias    optional table alias
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function addSelectColumns(Criteria $criteria, $alias = null)
  {
    if (null === $alias)
    {
      $criteria->addSelectColumn(iceModelCmsPageI18nPeer::ID);
      $criteria->addSelectColumn(iceModelCmsPageI18nPeer::NAME);
      $criteria->addSelectColumn(iceModelCmsPageI18nPeer::SLUG);
      $criteria->addSelectColumn(iceModelCmsPageI18nPeer::CONTENTS);
      $criteria->addSelectColumn(iceModelCmsPageI18nPeer::META_DESCRIPTION);
      $criteria->addSelectColumn(iceModelCmsPageI18nPeer::META_KEYWORDS);
      $criteria->addSelectColumn(iceModelCmsPageI18nPeer::CULTURE);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.NAME');
      $criteria->addSelectColumn($alias . '.SLUG');
      $criteria->addSelectColumn($alias . '.CONTENTS');
      $criteria->addSelectColumn($alias . '.META_DESCRIPTION');
      $criteria->addSelectColumn($alias . '.META_KEYWORDS');
      $criteria->addSelectColumn($alias . '.CULTURE');
    }
  }

  /**
   * Returns the number of rows matching criteria.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @return     int Number of matching rows.
   */
  public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
  {
    // we may modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(iceModelCmsPageI18nPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      iceModelCmsPageI18nPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelCmsPageI18nPeer', $criteria, $con);
    }

    // BasePeer returns a PDOStatement
    $stmt = BasePeer::doCount($criteria, $con);

    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $count = (int) $row[0];
    }
    else
    {
      $count = 0; // no rows returned; we infer that means 0 matches.
    }
    $stmt->closeCursor();
    return $count;
  }
  /**
   * Selects one object from the DB.
   *
   * @param      Criteria $criteria object used to create the SELECT statement.
   * @param      PropelPDO $con
   * @return     iceModelCmsPageI18n
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = iceModelCmsPageI18nPeer::doSelect($critcopy, $con);
    if ($objects)
    {
      return $objects[0];
    }
    return null;
  }
  /**
   * Selects several row from the DB.
   *
   * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
   * @param      PropelPDO $con
   * @return     array Array of selected Objects
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelect(Criteria $criteria, PropelPDO $con = null)
  {
    return iceModelCmsPageI18nPeer::populateObjects(iceModelCmsPageI18nPeer::doSelectStmt($criteria, $con));
  }
  /**
   * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
   *
   * Use this method directly if you want to work with an executed statement durirectly (for example
   * to perform your own object hydration).
   *
   * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
   * @param      PropelPDO $con The connection to use
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   * @return     PDOStatement The executed PDOStatement object.
   * @see        BasePeer::doSelect()
   */
  public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      iceModelCmsPageI18nPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelCmsPageI18nPeer', $criteria, $con);
    }


    // BasePeer returns a PDOStatement
    return BasePeer::doSelect($criteria, $con);
  }
  /**
   * Adds an object to the instance pool.
   *
   * Propel keeps cached copies of objects in an instance pool when they are retrieved
   * from the database.  In some cases -- especially when you override doSelect*()
   * methods in your stub classes -- you may need to explicitly add objects
   * to the cache in order to ensure that the same objects are always returned by doSelect*()
   * and retrieveByPK*() calls.
   *
   * @param      iceModelCmsPageI18n $value A iceModelCmsPageI18n object.
   * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
   */
  public static function addInstanceToPool($obj, $key = null)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if ($key === null)
      {
        $key = serialize(array((string) $obj->getId(), (string) $obj->getCulture()));
      }
      self::$instances[$key] = $obj;
    }
  }

  /**
   * Removes an object from the instance pool.
   *
   * Propel keeps cached copies of objects in an instance pool when they are retrieved
   * from the database.  In some cases -- especially when you override doDelete
   * methods in your stub classes -- you may need to explicitly remove objects
   * from the cache in order to prevent returning objects that no longer exist.
   *
   * @param      mixed $value A iceModelCmsPageI18n object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof iceModelCmsPageI18n)
      {
        $key = serialize(array((string) $value->getId(), (string) $value->getCulture()));
      }
      elseif (is_array($value) && count($value) === 2)
      {
        // assume we've been passed a primary key
        $key = serialize(array((string) $value[0], (string) $value[1]));
      }
      else
      {
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or iceModelCmsPageI18n object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
        throw $e;
      }

      unset(self::$instances[$key]);
    }
  }

  /**
   * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
   *
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, a serialize()d version of the primary key will be returned.
   *
   * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
   * @return     iceModelCmsPageI18n Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
   * @see        getPrimaryKeyHash()
   */
  public static function getInstanceFromPool($key)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if (isset(self::$instances[$key]))
      {
        return self::$instances[$key];
      }
    }
    return null; // just to be explicit
  }
  
  /**
   * Clear the instance pool.
   *
   * @return     void
   */
  public static function clearInstancePool()
  {
    self::$instances = array();
  }
  
  /**
   * Method to invalidate the instance pool of all tables related to cms_page_i18n
   * by a foreign key with ON DELETE CASCADE
   */
  public static function clearRelatedInstancePool()
  {
  }

  /**
   * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
   *
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, a serialize()d version of the primary key will be returned.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
   */
  public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
  {
    // If the PK cannot be derived from the row, return NULL.
    if ($row[$startcol] === null && $row[$startcol + 6] === null)
    {
      return null;
    }
    return serialize(array((string) $row[$startcol], (string) $row[$startcol + 6]));
  }

  /**
   * Retrieves the primary key from the DB resultset row
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, an array of the primary key columns will be returned.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @return     mixed The primary key of the row
   */
  public static function getPrimaryKeyFromRow($row, $startcol = 0)
  {
    return array((int) $row[$startcol], (string) $row[$startcol + 6]);
  }
  
  /**
   * The returned array will contain objects of the default type or
   * objects that inherit from the default.
   *
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function populateObjects(PDOStatement $stmt)
  {
    $results = array();
  
    // set the class once to avoid overhead in the loop
    $cls = iceModelCmsPageI18nPeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = iceModelCmsPageI18nPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = iceModelCmsPageI18nPeer::getInstanceFromPool($key)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj->hydrate($row, 0, true); // rehydrate
        $results[] = $obj;
      }
      else
      {
        $obj = new $cls();
        $obj->hydrate($row);
        $results[] = $obj;
        iceModelCmsPageI18nPeer::addInstanceToPool($obj, $key);
      }
    }
    $stmt->closeCursor();
    return $results;
  }
  /**
   * Populates an object of the default type or an object that inherit from the default.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   * @return     array (iceModelCmsPageI18n object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = iceModelCmsPageI18nPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = iceModelCmsPageI18nPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + iceModelCmsPageI18nPeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = iceModelCmsPageI18nPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      iceModelCmsPageI18nPeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
  }


  /**
   * Returns the number of rows matching criteria, joining the related iceModelCmsPage table
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoiniceModelCmsPage(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(iceModelCmsPageI18nPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      iceModelCmsPageI18nPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(iceModelCmsPageI18nPeer::ID, iceModelCmsPagePeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelCmsPageI18nPeer', $criteria, $con);
    }

    $stmt = BasePeer::doCount($criteria, $con);

    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $count = (int) $row[0];
    }
    else
    {
      $count = 0; // no rows returned; we infer that means 0 matches.
    }
    $stmt->closeCursor();
    return $count;
  }


  /**
   * Selects a collection of iceModelCmsPageI18n objects pre-filled with their iceModelCmsPage objects.
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of iceModelCmsPageI18n objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoiniceModelCmsPage(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    iceModelCmsPageI18nPeer::addSelectColumns($criteria);
    $startcol = iceModelCmsPageI18nPeer::NUM_HYDRATE_COLUMNS;
    iceModelCmsPagePeer::addSelectColumns($criteria);

    $criteria->addJoin(iceModelCmsPageI18nPeer::ID, iceModelCmsPagePeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelCmsPageI18nPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = iceModelCmsPageI18nPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = iceModelCmsPageI18nPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {

        $cls = iceModelCmsPageI18nPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        iceModelCmsPageI18nPeer::addInstanceToPool($obj1, $key1);
      }

      $key2 = iceModelCmsPagePeer::getPrimaryKeyHashFromRow($row, $startcol);
      if ($key2 !== null)
      {
        $obj2 = iceModelCmsPagePeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = iceModelCmsPagePeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol);
          iceModelCmsPagePeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (iceModelCmsPageI18n) to $obj2 (iceModelCmsPage)
        $obj2->addiceModelCmsPageI18n($obj1);

      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


  /**
   * Returns the number of rows matching criteria, joining all related tables
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     int Number of matching rows.
   */
  public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    // we're going to modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(iceModelCmsPageI18nPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      iceModelCmsPageI18nPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria->addJoin(iceModelCmsPageI18nPeer::ID, iceModelCmsPagePeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelCmsPageI18nPeer', $criteria, $con);
    }

    $stmt = BasePeer::doCount($criteria, $con);

    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $count = (int) $row[0];
    }
    else
    {
      $count = 0; // no rows returned; we infer that means 0 matches.
    }
    $stmt->closeCursor();
    return $count;
  }

  /**
   * Selects a collection of iceModelCmsPageI18n objects pre-filled with all related objects.
   *
   * @param      Criteria  $criteria
   * @param      PropelPDO $con
   * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
   * @return     array Array of iceModelCmsPageI18n objects.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {
    $criteria = clone $criteria;

    // Set the correct dbName if it has not been overridden
    if ($criteria->getDbName() == Propel::getDefaultDB())
    {
      $criteria->setDbName(self::DATABASE_NAME);
    }

    iceModelCmsPageI18nPeer::addSelectColumns($criteria);
    $startcol2 = iceModelCmsPageI18nPeer::NUM_HYDRATE_COLUMNS;

    iceModelCmsPagePeer::addSelectColumns($criteria);
    $startcol3 = $startcol2 + iceModelCmsPagePeer::NUM_HYDRATE_COLUMNS;

    $criteria->addJoin(iceModelCmsPageI18nPeer::ID, iceModelCmsPagePeer::ID, $join_behavior);

    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelCmsPageI18nPeer', $criteria, $con);
    }

    $stmt = BasePeer::doSelect($criteria, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key1 = iceModelCmsPageI18nPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = iceModelCmsPageI18nPeer::getInstanceFromPool($key1)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      }
      else
      {
        $cls = iceModelCmsPageI18nPeer::getOMClass(false);

        $obj1 = new $cls();
        $obj1->hydrate($row);
        iceModelCmsPageI18nPeer::addInstanceToPool($obj1, $key1);
      }

      // Add objects for joined iceModelCmsPage rows

      $key2 = iceModelCmsPagePeer::getPrimaryKeyHashFromRow($row, $startcol2);
      if ($key2 !== null)
      {
        $obj2 = iceModelCmsPagePeer::getInstanceFromPool($key2);
        if (!$obj2)
        {

          $cls = iceModelCmsPagePeer::getOMClass(false);

          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          iceModelCmsPagePeer::addInstanceToPool($obj2, $key2);
        }

        // Add the $obj1 (iceModelCmsPageI18n) to the collection in $obj2 (iceModelCmsPage)
        $obj2->addiceModelCmsPageI18n($obj1);
      }

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }

  /**
   * Returns the TableMap related to this peer.
   * This method is not needed for general use but a specific application could have a need.
   * @return     TableMap
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function getTableMap()
  {
    return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
  }

  /**
   * Add a TableMap instance to the database for this peer class.
   */
  public static function buildTableMap()
  {
    $dbMap = Propel::getDatabaseMap(BaseiceModelCmsPageI18nPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseiceModelCmsPageI18nPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new iceModelCmsPageI18nTableMap());
    }
  }

  /**
   * The class that the Peer will make instances of.
   *
   * If $withPrefix is true, the returned path
   * uses a dot-path notation which is tranalted into a path
   * relative to a location on the PHP include_path.
   * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
   *
   * @param      boolean $withPrefix Whether or not to return the path with the class name
   * @return     string path.to.ClassName
   */
  public static function getOMClass($withPrefix = true)
  {
    return $withPrefix ? iceModelCmsPageI18nPeer::CLASS_DEFAULT : iceModelCmsPageI18nPeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a iceModelCmsPageI18n or Criteria object.
   *
   * @param      mixed $values Criteria or iceModelCmsPageI18n object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from iceModelCmsPageI18n object
    }


    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table (I guess, conceivably)
      $con->beginTransaction();
      $pk = BasePeer::doInsert($criteria, $con);
      $con->commit();
    }
    catch(PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }

    return $pk;
  }

  /**
   * Performs an UPDATE on the database, given a iceModelCmsPageI18n or Criteria object.
   *
   * @param      mixed $values Criteria or iceModelCmsPageI18n object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(iceModelCmsPageI18nPeer::ID);
      $value = $criteria->remove(iceModelCmsPageI18nPeer::ID);
      if ($value)
      {
        $selectCriteria->add(iceModelCmsPageI18nPeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(iceModelCmsPageI18nPeer::TABLE_NAME);
      }

      $comparison = $criteria->getComparison(iceModelCmsPageI18nPeer::CULTURE);
      $value = $criteria->remove(iceModelCmsPageI18nPeer::CULTURE);
      if ($value)
      {
        $selectCriteria->add(iceModelCmsPageI18nPeer::CULTURE, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(iceModelCmsPageI18nPeer::TABLE_NAME);
      }

    } else { // $values is iceModelCmsPageI18n object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the cms_page_i18n table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(iceModelCmsPageI18nPeer::TABLE_NAME, $con, iceModelCmsPageI18nPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      iceModelCmsPageI18nPeer::clearInstancePool();
      iceModelCmsPageI18nPeer::clearRelatedInstancePool();
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Performs a DELETE on the database, given a iceModelCmsPageI18n or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or iceModelCmsPageI18n object or primary key or array of primary keys
   *              which is used to create the DELETE statement
   * @param      PropelPDO $con the connection to use
   * @return     int   The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
   *        if supported by native driver or if emulated using Propel.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
   public static function doDelete($values, PropelPDO $con = null)
   {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      iceModelCmsPageI18nPeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof iceModelCmsPageI18n) { // it's a model object
      // invalidate the cache for this single object
      iceModelCmsPageI18nPeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      // primary key is composite; we therefore, expect
      // the primary key passed to be an array of pkey values
      if (count($values) == count($values, COUNT_RECURSIVE))
      {
        // array is not multi-dimensional
        $values = array($values);
      }
      foreach ($values as $value)
      {
        $criterion = $criteria->getNewCriterion(iceModelCmsPageI18nPeer::ID, $value[0]);
        $criterion->addAnd($criteria->getNewCriterion(iceModelCmsPageI18nPeer::CULTURE, $value[1]));
        $criteria->addOr($criterion);
        // we can invalidate the cache for this single PK
        iceModelCmsPageI18nPeer::removeInstanceFromPool($value);
      }
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    $affectedRows = 0; // initialize var to track total num of affected rows

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      
      $affectedRows += BasePeer::doDelete($criteria, $con);
      iceModelCmsPageI18nPeer::clearRelatedInstancePool();
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Validates all modified columns of given iceModelCmsPageI18n object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      iceModelCmsPageI18n $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(iceModelCmsPageI18nPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(iceModelCmsPageI18nPeer::TABLE_NAME);

      if (! is_array($cols))
      {
        $cols = array($cols);
      }

      foreach ($cols as $colName)
      {
        if ($tableMap->containsColumn($colName))
        {
          $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
          $columns[$colName] = $obj->$get();
        }
      }
    }
    else
    {

    }

    return BasePeer::doValidate(iceModelCmsPageI18nPeer::DATABASE_NAME, iceModelCmsPageI18nPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve object using using composite pkey values.
   * @param      int $id
   * @param      string $culture
   * @param      PropelPDO $con
   * @return     iceModelCmsPageI18n
   */
  public static function retrieveByPK($id, $culture, PropelPDO $con = null)
  {
    $_instancePoolKey = serialize(array((string) $id, (string) $culture));
     if (null !== ($obj = iceModelCmsPageI18nPeer::getInstanceFromPool($_instancePoolKey))) {
       return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    $criteria = new Criteria(iceModelCmsPageI18nPeer::DATABASE_NAME);
    $criteria->add(iceModelCmsPageI18nPeer::ID, $id);
    $criteria->add(iceModelCmsPageI18nPeer::CULTURE, $culture);
    $v = iceModelCmsPageI18nPeer::doSelect($criteria, $con);

    return !empty($v) ? $v[0] : null;
  }
  // symfony behavior
  
  /**
   * Returns an array of arrays that contain columns in each unique index.
   *
   * @return array
   */
  static public function getUniqueColumnNames()
  {
    return array(array('slug', 'culture'));
  }

  // symfony_behaviors behavior
  
  /**
   * Returns the name of the hook to call from inside the supplied method.
   *
   * @param string $method The calling method
   *
   * @return string A hook name for {@link sfMixer}
   *
   * @throws LogicException If the method name is not recognized
   */
  static private function getMixerPreSelectHook($method)
  {
    if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
    {
      return sprintf('BaseiceModelCmsPageI18nPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseiceModelCmsPageI18nPeer::buildTableMap();

