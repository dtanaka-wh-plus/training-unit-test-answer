<?php
function isOk(): bool{
  return $GLOBALS['A'] && $GLOBALS['B'] || $GLOBALS['C'];
}
