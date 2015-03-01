<?php

/**
 * @file
 * Definition of Drupal\tocify\Tests\TocifyTest.
 */

namespace Drupal\tocify\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Test the various features of tocify.
 *
 * @group tocify
 */
class TocifyTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('block', 'tocify');

  /**
   * Enable modules and create user with specific permissions.
   */
  protected function setUp() {
    parent::setUp();
  }

  /**
   * Tests tocify block functionality.
   */
  public function testTocifyBlock() {
  }

}
