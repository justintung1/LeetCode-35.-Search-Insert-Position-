<?php
    class Solution {

        /**
         * @param Integer[] $nums
         * @param Integer $target
         * @return Integer
         */
        function searchInsert($nums, $target) {
            if(array_search($target,$nums)!==false){
                return array_search($target,$nums);
            }
            else{
                if($target>$nums[count($nums)-1]){
                    return count($nums);
                }
                else{
                    for($i=0;$i<count($nums);$i++){
                        if($nums[$i]>$target){
                            return $i;
                        }
                    }
                }
            }
        }
    }
?>