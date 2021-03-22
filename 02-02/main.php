<?php
function discount(int $price, int $discount_price): int {
  $discounted_price = $price - $discount_price;

  // 割引後、金額がマイナスにならないようにします。
  if ($discounted_price < 0) {
    $discounted_price = 0;
  }

  return $discounted_price;
}

function getDiscountPrice(int $standard_discount_price, bool $is_birthday): int {
  // 誕生日なら割引額が2倍になります！
  if ($is_birthday) {
    return $standard_discount_price * 2;
  }
  return $standard_discount_price;
}
