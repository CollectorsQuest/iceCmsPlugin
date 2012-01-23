<?php



/**
 * This class defines the structure of the 'cms_page' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.iceCmsPlugin.lib.model.map
 */
class iceModelCmsPageTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceCmsPlugin.lib.model.map.iceModelCmsPageTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('cms_page');
    $this->setPhpName('iceModelCmsPage');
    $this->setClassname('iceModelCmsPage');
    $this->setPackage('plugins.iceCmsPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('TREE_LEFT', 'TreeLeft', 'INTEGER', true, null, 0);
    $this->addColumn('TREE_RIGHT', 'TreeRight', 'INTEGER', true, null, 0);
    $this->addColumn('TREE_SCOPE', 'TreeScope', 'INTEGER', true, null, 0);
    $this->addColumn('IS_PUBLISHED', 'IsPublished', 'BOOLEAN', false, 1, false);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('iceModelCmsPageI18n', 'iceModelCmsPageI18n', RelationMap::ONE_TO_MANY, array('id' => 'id', ), 'CASCADE', null, 'iceModelCmsPageI18ns');
  }

  /**
   *
   * Gets the list of behaviors registered for this table
   *
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'symfony_timestampable' => array('update_column' => 'updated_at', 'create_column' => 'created_at', ),
      'symfony_i18n' => array('i18n_table' => 'cms_page_i18n', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
