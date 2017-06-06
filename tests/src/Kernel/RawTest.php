<?php
namespace Drupal\Tests\search_api_location\Kernel;

use Drupal\KernelTests\KernelTestBase;
use Drupal\search_api_location\Plugin\search_api_location\location_input\Raw;

/**
 * @group search_api_location
 */
class RawTest extends KernelTestBase {

  public static $modules = ['user', 'search_api', 'search_api_location'];

  public function testGetParsedInput() {
    $obj = $this->container->get('plugin.manager.search_api_location.location_input')->createInstance('raw');
    $this->assertEquals($obj->getParsedInput("  20.548,67.945 "),"20.548,67.945");
    $this->assertEquals($obj->getParsedInput("^20.548,67.945"),NULL);
  }
}