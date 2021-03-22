<?php
function isSunday(DateTime $date): bool{
  return $date->format('w') === '0';
}
