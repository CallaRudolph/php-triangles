<?php
    class Triangle
    {
        private $length1;
        private $length2;
        private $length3;

        function __construct($length1, $length2, $length3)
        {
            $this->length1 = $length1;
            $this->length2 = $length2;
            $this->length3 = $length3;
        }

        function isNot()
        {
            if($this->length1 + $this->length2 <= $this->length3 || $this->length2 + $this->length3 <= $this->length1 || $this->length1 + $this->length3 <= $this->length2) {
                return true;
            } else {
                return false;
            }
        }

        function isEquilateral()
        {
            if($this->length1 === $this->length2 && $this->length1 === $this->length3) {
                return true;
            } else {
                return false;
            }
        }

        function isIsosceles()
        {
            if($this->length1 === $this->length2 && $this->length1 != $this->length3) {
                return true;
            } else if ($this->length1 === $this->length3 && $this->length1 != $this->length2) {
                return true;
            } else if ($this->length2 === $this->length3 && $this->length2 != $this->length1) {
                return true;
            } else {
                return false;
            }
        }

        function isScalene()
        {
            if($this->length1 != $this->length2 && $this->length2 != $this->length3 && $this->length1 != $this->length3) {
                return true;
            } else {
                return false;
            }
        }

        function setLength1($new_length1)
        {
            $this->length1 = (float) $new_length1;
        }

        function getLength1()
        {
            return $this->length1;
        }

        function setLength2($new_length2)
        {
            $this->length2 = (float) $new_length2;
        }

        function getLength2()
        {
            return $this->length2;
        }

        function setLength3($new_length3)
        {
            $this->length3 = (float) $new_length3;
        }

        function getLength3()
        {
            return $this->length3;
        }

    }
?>
