<?php
function discount(int $price, int $discount_price, bool $is_birthday): int {
  $discounted_price = $price;

  // 割引します。
  // 誕生日なら割引額が2倍になります！
  if ($is_birthday) {
    $discounted_price -= $discount_price * 2;
  } else {
    $discounted_price -= $discount_price;
  }

  // 割引後、金額がマイナスにならないようにします。
  if ($discounted_price < 0) {
    $discounted_price = 0;
  }

  return $discounted_price;
}
