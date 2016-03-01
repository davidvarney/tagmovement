<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormHelper extends Model
{
    /**
     * Returns a list of states for form purposes
     *
     * @author David Varney
     */
    public static function get_states()
    {
        return array(
            'AL'=>'ALABAMA',
            'AK'=>'ALASKA',
            'AS'=>'AMERICAN SAMOA',
            'AZ'=>'ARIZONA',
            'AR'=>'ARKANSAS',
            'CA'=>'CALIFORNIA',
            'CO'=>'COLORADO',
            'CT'=>'CONNECTICUT',
            'DE'=>'DELAWARE',
            'DC'=>'DISTRICT OF COLUMBIA',
            'FM'=>'FEDERATED STATES OF MICRONESIA',
            'FL'=>'FLORIDA',
            'GA'=>'GEORGIA',
            'GU'=>'GUAM GU',
            'HI'=>'HAWAII',
            'ID'=>'IDAHO',
            'IL'=>'ILLINOIS',
            'IN'=>'INDIANA',
            'IA'=>'IOWA',
            'KS'=>'KANSAS',
            'KY'=>'KENTUCKY',
            'LA'=>'LOUISIANA',
            'ME'=>'MAINE',
            'MH'=>'MARSHALL ISLANDS',
            'MD'=>'MARYLAND',
            'MA'=>'MASSACHUSETTS',
            'MI'=>'MICHIGAN',
            'MN'=>'MINNESOTA',
            'MS'=>'MISSISSIPPI',
            'MO'=>'MISSOURI',
            'MT'=>'MONTANA',
            'NE'=>'NEBRASKA',
            'NV'=>'NEVADA',
            'NH'=>'NEW HAMPSHIRE',
            'NJ'=>'NEW JERSEY',
            'NM'=>'NEW MEXICO',
            'NY'=>'NEW YORK',
            'NC'=>'NORTH CAROLINA',
            'ND'=>'NORTH DAKOTA',
            'MP'=>'NORTHERN MARIANA ISLANDS',
            'OH'=>'OHIO',
            'OK'=>'OKLAHOMA',
            'OR'=>'OREGON',
            'PW'=>'PALAU',
            'PA'=>'PENNSYLVANIA',
            'PR'=>'PUERTO RICO',
            'RI'=>'RHODE ISLAND',
            'SC'=>'SOUTH CAROLINA',
            'SD'=>'SOUTH DAKOTA',
            'TN'=>'TENNESSEE',
            'TX'=>'TEXAS',
            'UT'=>'UTAH',
            'VT'=>'VERMONT',
            'VI'=>'VIRGIN ISLANDS',
            'VA'=>'VIRGINIA',
            'WA'=>'WASHINGTON',
            'WV'=>'WEST VIRGINIA',
            'WI'=>'WISCONSIN',
            'WY'=>'WYOMING',
            'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
            'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
            'AP'=>'ARMED FORCES PACIFIC'
        );
    }

    /**
     * Returns an array of X amount of graduation years
     *
     * @author David Varney
     * @param int $total_years
     * @return array $years_return
     */
    public static function get_graduation_years($total_years = 10, $cutoff_date = null)
    {
        if (empty($cutoff_date)) {
            $cutoff_date = date("Y-m-d", strtotime(date('Y') . "-06-01"));
        }
        $years_return = array();
        $current_date = date("Y-m-d");

        if ($current_date < $cutoff_date) {
            $total_years--;
        }

        for ($i=1;$i<=$total_years;$i++) {
            $verbiage = 'years';
            if ($i == 1) {
                $verbiage = 'year';
            }

            if ($i == 1 && $current_date < $cutoff_date) {
                $years_return[] = date("Y");
            }

            $years_return[date("Y", strtotime($current_date . " + " . $i . " " . $verbiage))] = date("Y", strtotime($current_date . " + " . $i . " " . $verbiage));
        }

        return $years_return;
    }

    /**
     * Returns basic gender array
     *
     * @author David Varney
     */
    public static function get_genders()
    {
        return array('male' => 'Male', 'female' => 'Female');
    }

    /**
     * Returns shirt sizes
     *
     * @author David Varney
     */
    public static function get_shirt_sizes()
    {
        return array('XS' => 'X Small', 'S' => 'Small', 'M' => 'Medium', 'L' => 'Large', 'XL' => 'X Large', 'XXL' => '2X Large', 'XXXL' => '3X Large', 'XXXXL' => '4X Large');
    }
}
