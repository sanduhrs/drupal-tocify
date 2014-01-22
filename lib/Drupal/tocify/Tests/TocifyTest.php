<?php

/**
 * @file
 * Definition of Drupal\tocify\Tests\TocifyTest.
 */

namespace Drupal\tocify\Tests;

use Drupal\simpletest\WebTestBase;

class TocifyTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('block', 'tocify');

  public static function getInfo() {
    return array(
      'name' => 'Tocify functionality',
      'description' => 'Test the various features of tocify.',
    );
  }

  /**
   * Enable modules and create user with specific permissions.
   */
  function setUp() {
    parent::setUp();
  }

  /**
   * Tests tocify block functionality.
   */
  function testTocifyBlock() {
  }

}
