<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package     ExpressionEngine
 * @author      ExpressionEngine Dev Team
 * @copyright   Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license     http://expressionengine.com/user_guide/license.html
 * @link        http://expressionengine.com
 * @since       Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------

/**
 * Addeetion Plugin
 *
 * @package     ExpressionEngine
 * @subpackage  Addons
 * @category    Plugin
 * @author      Brooke Bailey
 * @link        
 */

$plugin_info = array(
    'pi_name'       => 'Addeetion',
    'pi_version'    => '1.0',
    'pi_author'     => 'Brooke Bailey',
    'pi_author_url' => '',
    'pi_description'=> 'Returns the sum value of inputted number',
    'pi_usage'      => Addeetion::usage()
);


class Addeetion {

    public $return_data;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        
        $this->EE =& get_instance();
        // $sum = 0;
        // $parameter = $this->EE->TMPL->fetch_param('number');

        // if(is_array($parameter))
        // {
        //     $split = explode('|', $parameter);
            
        //     foreach ($split as $key => $value) 
        //     {
        //         $sum += $value;
                
        //     } 
        // }
        // else
        // { 
        //     $split = $parameter;
        //     $sum += $split;
        // }
        // $this->return_data = $split;




        //grab the ad_id for the ad from the param 
            $ad_id_match = $this->EE->TMPL->tagdata;
        //convert the imput into and integer so that it will be correct for sql
            $ad_id_match = (int)$ad_id_match;
           $this->return_data = "hello world"; 
        /*  SELECT  sum('impression') 
         *  FROM    exp_adman_stats
         *  WHERE   ad_id = $ad_id_match;
         */
        //     $query = $this->EE->db->select_sum('impression')
        //                   ->where("ad_id" ,  $ad_id_match)
        //                   ->get("exp_adman_stats");

        // //loop through results (should only be one result becuase the math is being done in the sql). Store it into finalResult variable
        //    foreach($query->result() as $row)
        //     {
        //         $finalResult= $row->impression;                            
        //     }      
        //Return the summed result
            // $this->return_data = $finalResult; 
    }
   
    // ----------------------------------------------------------------
    
    /**
     * Plugin Usage
     */
    public static function usage()
    {
        ob_start();
?>

 Since you did not provide instructions on the form, make sure to put plugin documentation here.
<?php
        $buffer = ob_get_contents();
        ob_end_clean();
        return $buffer;
    }
}


/* End of file pi.addeetion.php */
/* Location: /system/expressionengine/third_party/addeetion/pi.addeetion.php */