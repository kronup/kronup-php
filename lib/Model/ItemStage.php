<?php

/**
 * ItemStage Model
 *
 * @copyright (c) 2022-2023 kronup.com
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://kronup.com/
 *
 * NOTE: This class is auto-generated by kronup.com
 * Do not edit this file manually!
 */

namespace Kronup\Model;
!defined("KRONUP-SDK") && exit();

/**
 * ItemStage Model
 * 
 * Value Item Stage
 *   * `p` - Planning
 *   * `v` - Validation
 *   * `x` - Execution
 *   * `c` - Deep Context
 */
class ItemStage extends AbstractEnum {
    // Allowed values
    const P = 'p';
    const V = 'v';
    const X = 'x';
    const C = 'c';
}