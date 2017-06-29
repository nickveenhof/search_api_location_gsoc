<?php
namespace Drupal\Tests\search_api_location\Kernel;

use Drupal\KernelTests\KernelTestBase;
use Drupal\search_api_location\Plugin\search_api\data_type\LocationDataType;

/**
 * Tests generation of LocationDataType plugin. 
 *
 * @group search_api_location
 */
class LocationDataTypeTest extends KernelTestBase {

  public static $modules = ['user', 'search_api', 'search_api_location'];

  public function testGetValue() {
    $sut = $this->container->get('plugin.manager.search_api.data_type')->createInstance('location');
    $this->assertEquals($sut->getValue('POLYGON((1 1,5 1,5 5,1 5,1 1),(2 2,2 3,3 3,3 2,2 2))'),"3,3");

  }
  
}
