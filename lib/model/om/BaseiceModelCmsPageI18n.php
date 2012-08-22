<?php


/**
 * Base class that represents a row from the 'cms_page_i18n' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceCmsPlugin.lib.model.om
 */
abstract class BaseiceModelCmsPageI18n extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'iceModelCmsPageI18nPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        iceModelCmsPageI18nPeer
   */
  protected static $peer;

  /**
   * The flag var to prevent infinit loop in deep copy
   * @var       boolean
   */
  protected $startCopy = false;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the name field.
   * @var        string
   */
  protected $name;

  /**
   * The value for the slug field.
   * @var        string
   */
  protected $slug;

  /**
   * The value for the contents field.
   * @var        string
   */
  protected $contents;

  /**
   * The value for the meta_description field.
   * @var        string
   */
  protected $meta_description;

  /**
   * The value for the meta_keywords field.
   * @var        string
   */
  protected $meta_keywords;

  /**
   * The value for the culture field.
   * @var        string
   */
  protected $culture;

  /**
   * @var        iceModelCmsPage
   */
  protected $aiceModelCmsPage;

  /**
   * Flag to prevent endless save loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInSave = false;

  /**
   * Flag to prevent endless validation loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInValidation = false;

  /**
   * Get the [id] column value.
   * 
   * @return     int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the [name] column value.
   * 
   * @return     string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Get the [slug] column value.
   * 
   * @return     string
   */
  public function getSlug()
  {
    return $this->slug;
  }

  /**
   * Get the [contents] column value.
   * 
   * @return     string
   */
  public function getContents()
  {
    return $this->contents;
  }

  /**
   * Get the [meta_description] column value.
   * 
   * @return     string
   */
  public function getMetaDescription()
  {
    return $this->meta_description;
  }

  /**
   * Get the [meta_keywords] column value.
   * 
   * @return     string
   */
  public function getMetaKeywords()
  {
    return $this->meta_keywords;
  }

  /**
   * Get the [culture] column value.
   * 
   * @return     string
   */
  public function getCulture()
  {
    return $this->culture;
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     iceModelCmsPageI18n The current object (for fluent API support)
   */
  public function setId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->id !== $v)
    {
      $this->id = $v;
      $this->modifiedColumns[] = iceModelCmsPageI18nPeer::ID;
    }

    if ($this->aiceModelCmsPage !== null && $this->aiceModelCmsPage->getId() !== $v)
    {
      $this->aiceModelCmsPage = null;
    }

    return $this;
  }

  /**
   * Set the value of [name] column.
   * 
   * @param      string $v new value
   * @return     iceModelCmsPageI18n The current object (for fluent API support)
   */
  public function setName($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->name !== $v)
    {
      $this->name = $v;
      $this->modifiedColumns[] = iceModelCmsPageI18nPeer::NAME;
    }

    return $this;
  }

  /**
   * Set the value of [slug] column.
   * 
   * @param      string $v new value
   * @return     iceModelCmsPageI18n The current object (for fluent API support)
   */
  public function setSlug($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->slug !== $v)
    {
      $this->slug = $v;
      $this->modifiedColumns[] = iceModelCmsPageI18nPeer::SLUG;
    }

    return $this;
  }

  /**
   * Set the value of [contents] column.
   * 
   * @param      string $v new value
   * @return     iceModelCmsPageI18n The current object (for fluent API support)
   */
  public function setContents($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->contents !== $v)
    {
      $this->contents = $v;
      $this->modifiedColumns[] = iceModelCmsPageI18nPeer::CONTENTS;
    }

    return $this;
  }

  /**
   * Set the value of [meta_description] column.
   * 
   * @param      string $v new value
   * @return     iceModelCmsPageI18n The current object (for fluent API support)
   */
  public function setMetaDescription($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->meta_description !== $v)
    {
      $this->meta_description = $v;
      $this->modifiedColumns[] = iceModelCmsPageI18nPeer::META_DESCRIPTION;
    }

    return $this;
  }

  /**
   * Set the value of [meta_keywords] column.
   * 
   * @param      string $v new value
   * @return     iceModelCmsPageI18n The current object (for fluent API support)
   */
  public function setMetaKeywords($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->meta_keywords !== $v)
    {
      $this->meta_keywords = $v;
      $this->modifiedColumns[] = iceModelCmsPageI18nPeer::META_KEYWORDS;
    }

    return $this;
  }

  /**
   * Set the value of [culture] column.
   * 
   * @param      string $v new value
   * @return     iceModelCmsPageI18n The current object (for fluent API support)
   */
  public function setCulture($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->culture !== $v)
    {
      $this->culture = $v;
      $this->modifiedColumns[] = iceModelCmsPageI18nPeer::CULTURE;
    }

    return $this;
  }

  /**
   * Indicates whether the columns in this object are only set to default values.
   *
   * This method can be used in conjunction with isModified() to indicate whether an object is both
   * modified _and_ has some values set which are non-default.
   *
   * @return     boolean Whether the columns in this object are only been set with default values.
   */
  public function hasOnlyDefaultValues()
  {
    // otherwise, everything was equal, so return TRUE
    return true;
  }

  /**
   * Hydrates (populates) the object variables with values from the database resultset.
   *
   * An offset (0-based "start column") is specified so that objects can be hydrated
   * with a subset of the columns in the resultset rows.  This is needed, for example,
   * for results of JOIN queries where the resultset row includes columns from two or
   * more tables.
   *
   * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
   * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
   * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
   * @return     int next starting column
   * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
   */
  public function hydrate($row, $startcol = 0, $rehydrate = false)
  {
    try
    {

      $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->slug = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->contents = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->meta_description = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->meta_keywords = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->culture = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 7; // 7 = iceModelCmsPageI18nPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating iceModelCmsPageI18n object", $e);
    }
  }

  /**
   * Checks and repairs the internal consistency of the object.
   *
   * This method is executed after an already-instantiated object is re-hydrated
   * from the database.  It exists to check any foreign keys to make sure that
   * the objects related to the current object are correct based on foreign key.
   *
   * You can override this method in the stub class, but you should always invoke
   * the base method from the overridden method (i.e. parent::ensureConsistency()),
   * in case your model changes.
   *
   * @throws     PropelException
   */
  public function ensureConsistency()
  {

    if ($this->aiceModelCmsPage !== null && $this->id !== $this->aiceModelCmsPage->getId())
    {
      $this->aiceModelCmsPage = null;
    }
  }

  /**
   * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
   *
   * This will only work if the object has been saved and has a valid primary key set.
   *
   * @param      boolean $deep (optional) Whether to also de-associated any related objects.
   * @param      PropelPDO $con (optional) The PropelPDO connection to use.
   * @return     void
   * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
   */
  public function reload($deep = false, PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("Cannot reload a deleted object.");
    }

    if ($this->isNew())
    {
      throw new PropelException("Cannot reload an unsaved object.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = iceModelCmsPageI18nPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->aiceModelCmsPage = null;
    }
  }

  /**
   * Removes this object from datastore and sets delete attribute.
   *
   * @param      PropelPDO $con
   * @return     void
   * @throws     PropelException
   * @see        BaseObject::setDeleted()
   * @see        BaseObject::isDeleted()
   */
  public function delete(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("This object has already been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = iceModelCmsPageI18nQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelCmsPageI18n:delete:pre') as $callable)
      {
        if (call_user_func($callable, $this, $con))
        {
          $con->commit();
          return;
        }
      }

      if ($ret)
      {
        $deleteQuery->delete($con);
        $this->postDelete($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelCmsPageI18n:delete:post') as $callable)
        {
          call_user_func($callable, $this, $con);
        }

        $con->commit();
        $this->setDeleted(true);
      }
      else
      {
        $con->commit();
      }
    }
    catch (Exception $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Persists this object to the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All modified related objects will also be persisted in the doSave()
   * method.  This method wraps all precipitate database operations in a
   * single transaction.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        doSave()
   */
  public function save(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("You cannot save an object that has been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelCmsPageI18nPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelCmsPageI18n:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
      }
      if ($ret)
      {
        $affectedRows = $this->doSave($con);
        if ($isInsert)
        {
          $this->postInsert($con);
        }
        else
        {
          $this->postUpdate($con);
        }
        $this->postSave($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelCmsPageI18n:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        iceModelCmsPageI18nPeer::addInstanceToPool($this);
      }
      else
      {
        $affectedRows = 0;
      }
      $con->commit();
      return $affectedRows;
    }
    catch (Exception $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Performs the work of inserting or updating the row in the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All related objects are also updated in this method.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        save()
   */
  protected function doSave(PropelPDO $con)
  {
    $affectedRows = 0; // initialize var to track total num of affected rows
    if (!$this->alreadyInSave)
    {
      $this->alreadyInSave = true;

      // We call the save method on the following object(s) if they
      // were passed to this object by their coresponding set
      // method.  This object relates to these object(s) by a
      // foreign key reference.

      if ($this->aiceModelCmsPage !== null)
      {
        if ($this->aiceModelCmsPage->isModified() || $this->aiceModelCmsPage->isNew())
        {
          $affectedRows += $this->aiceModelCmsPage->save($con);
        }
        $this->seticeModelCmsPage($this->aiceModelCmsPage);
      }

      if ($this->isNew() || $this->isModified())
      {
        // persist changes
        if ($this->isNew())
        {
          $this->doInsert($con);
        }
        else
        {
          $this->doUpdate($con);
        }
        $affectedRows += 1;
        $this->resetModified();
      }

      $this->alreadyInSave = false;

    }
    return $affectedRows;
  }

  /**
   * Insert the row in the database.
   *
   * @param      PropelPDO $con
   *
   * @throws     PropelException
   * @see        doSave()
   */
  protected function doInsert(PropelPDO $con)
  {
    $modifiedColumns = array();
    $index = 0;


     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::NAME))
    {
      $modifiedColumns[':p' . $index++]  = '`NAME`';
    }
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::SLUG))
    {
      $modifiedColumns[':p' . $index++]  = '`SLUG`';
    }
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::CONTENTS))
    {
      $modifiedColumns[':p' . $index++]  = '`CONTENTS`';
    }
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::META_DESCRIPTION))
    {
      $modifiedColumns[':p' . $index++]  = '`META_DESCRIPTION`';
    }
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::META_KEYWORDS))
    {
      $modifiedColumns[':p' . $index++]  = '`META_KEYWORDS`';
    }
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::CULTURE))
    {
      $modifiedColumns[':p' . $index++]  = '`CULTURE`';
    }

    $sql = sprintf(
      'INSERT INTO `cms_page_i18n` (%s) VALUES (%s)',
      implode(', ', $modifiedColumns),
      implode(', ', array_keys($modifiedColumns))
    );

    try
    {
      $stmt = $con->prepare($sql);
      foreach ($modifiedColumns as $identifier => $columnName)
      {
        switch ($columnName)
        {
          case '`ID`':
            $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
            break;
          case '`NAME`':
            $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
            break;
          case '`SLUG`':
            $stmt->bindValue($identifier, $this->slug, PDO::PARAM_STR);
            break;
          case '`CONTENTS`':
            $stmt->bindValue($identifier, $this->contents, PDO::PARAM_STR);
            break;
          case '`META_DESCRIPTION`':
            $stmt->bindValue($identifier, $this->meta_description, PDO::PARAM_STR);
            break;
          case '`META_KEYWORDS`':
            $stmt->bindValue($identifier, $this->meta_keywords, PDO::PARAM_STR);
            break;
          case '`CULTURE`':
            $stmt->bindValue($identifier, $this->culture, PDO::PARAM_STR);
            break;
        }
      }
      $stmt->execute();
    }
    catch (Exception $e)
    {
      Propel::log($e->getMessage(), Propel::LOG_ERR);
      throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
    }

    $this->setNew(false);
  }

  /**
   * Update the row in the database.
   *
   * @param      PropelPDO $con
   *
   * @see        doSave()
   */
  protected function doUpdate(PropelPDO $con)
  {
    $selectCriteria = $this->buildPkeyCriteria();
    $valuesCriteria = $this->buildCriteria();
    BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
  }

  /**
   * Array of ValidationFailed objects.
   * @var        array ValidationFailed[]
   */
  protected $validationFailures = array();

  /**
   * Gets any ValidationFailed objects that resulted from last call to validate().
   *
   *
   * @return     array ValidationFailed[]
   * @see        validate()
   */
  public function getValidationFailures()
  {
    return $this->validationFailures;
  }

  /**
   * Validates the objects modified field values and all objects related to this table.
   *
   * If $columns is either a column name or an array of column names
   * only those columns are validated.
   *
   * @param      mixed $columns Column name or an array of column names.
   * @return     boolean Whether all columns pass validation.
   * @see        doValidate()
   * @see        getValidationFailures()
   */
  public function validate($columns = null)
  {
    $res = $this->doValidate($columns);
    if ($res === true)
    {
      $this->validationFailures = array();
      return true;
    }
    else
    {
      $this->validationFailures = $res;
      return false;
    }
  }

  /**
   * This function performs the validation work for complex object models.
   *
   * In addition to checking the current object, all related objects will
   * also be validated.  If all pass then <code>true</code> is returned; otherwise
   * an aggreagated array of ValidationFailed objects will be returned.
   *
   * @param      array $columns Array of column names to validate.
   * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
   */
  protected function doValidate($columns = null)
  {
    if (!$this->alreadyInValidation)
    {
      $this->alreadyInValidation = true;
      $retval = null;

      $failureMap = array();


      // We call the validate method on the following object(s) if they
      // were passed to this object by their coresponding set
      // method.  This object relates to these object(s) by a
      // foreign key reference.

      if ($this->aiceModelCmsPage !== null)
      {
        if (!$this->aiceModelCmsPage->validate($columns))
        {
          $failureMap = array_merge($failureMap, $this->aiceModelCmsPage->getValidationFailures());
        }
      }


      if (($retval = iceModelCmsPageI18nPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }



      $this->alreadyInValidation = false;
    }

    return (!empty($failureMap) ? $failureMap : true);
  }

  /**
   * Retrieves a field from the object by name passed in as a string.
   *
   * @param      string $name name
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     mixed Value of field.
   */
  public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelCmsPageI18nPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    $field = $this->getByPosition($pos);
    return $field;
  }

  /**
   * Retrieves a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @return     mixed Value of field at $pos
   */
  public function getByPosition($pos)
  {
    switch($pos)
    {
      case 0:
        return $this->getId();
        break;
      case 1:
        return $this->getName();
        break;
      case 2:
        return $this->getSlug();
        break;
      case 3:
        return $this->getContents();
        break;
      case 4:
        return $this->getMetaDescription();
        break;
      case 5:
        return $this->getMetaKeywords();
        break;
      case 6:
        return $this->getCulture();
        break;
      default:
        return null;
        break;
    }
  }

  /**
   * Exports the object as an array.
   *
   * You can specify the key type of the array by passing one of the class
   * type constants.
   *
   * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   *                    Defaults to BasePeer::TYPE_PHPNAME.
   * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
   * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
   * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
  {
    if (isset($alreadyDumpedObjects['iceModelCmsPageI18n'][serialize($this->getPrimaryKey())]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['iceModelCmsPageI18n'][serialize($this->getPrimaryKey())] = true;
    $keys = iceModelCmsPageI18nPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getName(),
      $keys[2] => $this->getSlug(),
      $keys[3] => $this->getContents(),
      $keys[4] => $this->getMetaDescription(),
      $keys[5] => $this->getMetaKeywords(),
      $keys[6] => $this->getCulture(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->aiceModelCmsPage)
      {
        $result['iceModelCmsPage'] = $this->aiceModelCmsPage->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
      }
    }
    return $result;
  }

  /**
   * Sets a field from the object by name passed in as a string.
   *
   * @param      string $name peer name
   * @param      mixed $value field value
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     void
   */
  public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelCmsPageI18nPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    return $this->setByPosition($pos, $value);
  }

  /**
   * Sets a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @param      mixed $value field value
   * @return     void
   */
  public function setByPosition($pos, $value)
  {
    switch($pos)
    {
      case 0:
        $this->setId($value);
        break;
      case 1:
        $this->setName($value);
        break;
      case 2:
        $this->setSlug($value);
        break;
      case 3:
        $this->setContents($value);
        break;
      case 4:
        $this->setMetaDescription($value);
        break;
      case 5:
        $this->setMetaKeywords($value);
        break;
      case 6:
        $this->setCulture($value);
        break;
    }
  }

  /**
   * Populates the object using an array.
   *
   * This is particularly useful when populating an object from one of the
   * request arrays (e.g. $_POST).  This method goes through the column
   * names, checking to see whether a matching key exists in populated
   * array. If so the setByName() method is called for that column.
   *
   * You can specify the key type of the array by additionally passing one
   * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   * The default key type is the column's phpname (e.g. 'AuthorId')
   *
   * @param      array  $arr     An array to populate the object from.
   * @param      string $keyType The type of keys the array uses.
   * @return     void
   */
  public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
  {
    $keys = iceModelCmsPageI18nPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setSlug($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setContents($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setMetaDescription($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setMetaKeywords($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setCulture($arr[$keys[6]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(iceModelCmsPageI18nPeer::DATABASE_NAME);

    if ($this->isColumnModified(iceModelCmsPageI18nPeer::ID)) $criteria->add(iceModelCmsPageI18nPeer::ID, $this->id);
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::NAME)) $criteria->add(iceModelCmsPageI18nPeer::NAME, $this->name);
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::SLUG)) $criteria->add(iceModelCmsPageI18nPeer::SLUG, $this->slug);
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::CONTENTS)) $criteria->add(iceModelCmsPageI18nPeer::CONTENTS, $this->contents);
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::META_DESCRIPTION)) $criteria->add(iceModelCmsPageI18nPeer::META_DESCRIPTION, $this->meta_description);
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::META_KEYWORDS)) $criteria->add(iceModelCmsPageI18nPeer::META_KEYWORDS, $this->meta_keywords);
    if ($this->isColumnModified(iceModelCmsPageI18nPeer::CULTURE)) $criteria->add(iceModelCmsPageI18nPeer::CULTURE, $this->culture);

    return $criteria;
  }

  /**
   * Builds a Criteria object containing the primary key for this object.
   *
   * Unlike buildCriteria() this method includes the primary key values regardless
   * of whether or not they have been modified.
   *
   * @return     Criteria The Criteria object containing value(s) for primary key(s).
   */
  public function buildPkeyCriteria()
  {
    $criteria = new Criteria(iceModelCmsPageI18nPeer::DATABASE_NAME);
    $criteria->add(iceModelCmsPageI18nPeer::ID, $this->id);
    $criteria->add(iceModelCmsPageI18nPeer::CULTURE, $this->culture);

    return $criteria;
  }

  /**
   * Returns the composite primary key for this object.
   * The array elements will be in same order as specified in XML.
   * @return     array
   */
  public function getPrimaryKey()
  {
    $pks = array();
    $pks[0] = $this->getId();
    $pks[1] = $this->getCulture();

    return $pks;
  }

  /**
   * Set the [composite] primary key.
   *
   * @param      array $keys The elements of the composite key (order must match the order in XML file).
   * @return     void
   */
  public function setPrimaryKey($keys)
  {
    $this->setId($keys[0]);
    $this->setCulture($keys[1]);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
   */
  public function isPrimaryKeyNull()
  {
    return (null === $this->getId()) && (null === $this->getCulture());
  }

  /**
   * Sets contents of passed object to values from current object.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      object $copyObj An object of iceModelCmsPageI18n (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setId($this->getId());
    $copyObj->setName($this->getName());
    $copyObj->setSlug($this->getSlug());
    $copyObj->setContents($this->getContents());
    $copyObj->setMetaDescription($this->getMetaDescription());
    $copyObj->setMetaKeywords($this->getMetaKeywords());
    $copyObj->setCulture($this->getCulture());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

      //unflag object copy
      $this->startCopy = false;
    }

    if ($makeNew)
    {
      $copyObj->setNew(true);
    }
  }

  /**
   * Makes a copy of this object that will be inserted as a new row in table when saved.
   * It creates a new object filling in the simple attributes, but skipping any primary
   * keys that are defined for the table.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @return     iceModelCmsPageI18n Clone of current object.
   * @throws     PropelException
   */
  public function copy($deepCopy = false)
  {
    // we use get_class(), because this might be a subclass
    $clazz = get_class($this);
    $copyObj = new $clazz();
    $this->copyInto($copyObj, $deepCopy);
    return $copyObj;
  }

  /**
   * Returns a peer instance associated with this om.
   *
   * Since Peer classes are not to have any instance attributes, this method returns the
   * same instance for all member of this class. The method could therefore
   * be static, but this would prevent one from overriding the behavior.
   *
   * @return     iceModelCmsPageI18nPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new iceModelCmsPageI18nPeer();
    }
    return self::$peer;
  }

  /**
   * Declares an association between this object and a iceModelCmsPage object.
   *
   * @param      iceModelCmsPage $v
   * @return     iceModelCmsPageI18n The current object (for fluent API support)
   * @throws     PropelException
   */
  public function seticeModelCmsPage(iceModelCmsPage $v = null)
  {
    if ($v === null)
    {
      $this->setId(NULL);
    }
    else
    {
      $this->setId($v->getId());
    }

    $this->aiceModelCmsPage = $v;

    // Add binding for other direction of this n:n relationship.
    // If this object has already been added to the iceModelCmsPage object, it will not be re-added.
    if ($v !== null)
    {
      $v->addiceModelCmsPageI18n($this);
    }

    return $this;
  }


  /**
   * Get the associated iceModelCmsPage object
   *
   * @param      PropelPDO Optional Connection object.
   * @return     iceModelCmsPage The associated iceModelCmsPage object.
   * @throws     PropelException
   */
  public function geticeModelCmsPage(PropelPDO $con = null)
  {
    if ($this->aiceModelCmsPage === null && ($this->id !== null))
    {
      $this->aiceModelCmsPage = iceModelCmsPageQuery::create()->findPk($this->id, $con);
      /* The following can be used additionally to
        guarantee the related object contains a reference
        to this object.  This level of coupling may, however, be
        undesirable since it could result in an only partially populated collection
        in the referenced object.
        $this->aiceModelCmsPage->addiceModelCmsPageI18ns($this);
       */
    }
    return $this->aiceModelCmsPage;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->name = null;
    $this->slug = null;
    $this->contents = null;
    $this->meta_description = null;
    $this->meta_keywords = null;
    $this->culture = null;
    $this->alreadyInSave = false;
    $this->alreadyInValidation = false;
    $this->clearAllReferences();
    $this->resetModified();
    $this->setNew(true);
    $this->setDeleted(false);
  }

  /**
   * Resets all references to other model objects or collections of model objects.
   *
   * This method is a user-space workaround for PHP's inability to garbage collect
   * objects with circular references (even in PHP 5.3). This is currently necessary
   * when using Propel in certain daemon or large-volumne/high-memory operations.
   *
   * @param      boolean $deep Whether to also clear the references on all referrer objects.
   */
  public function clearAllReferences($deep = false)
  {
    if ($deep)
    {
    }

    $this->aiceModelCmsPage = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string The value of the 'name' column
   */
  public function __toString()
  {
    return (string) $this->getName();
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseiceModelCmsPageI18n:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
