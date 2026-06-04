<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getStars($rating) {
  $rating = (int)$rating;
  $stars = '';
  for ($i = 1; $i <= 5; $i++) {
      if ($i <= $rating) {
          $stars .= '<i class="bi bi-star-fill"></i>'; // Filled star
      } else {
          $stars .= '<i class="bi bi-star"></i>'; // Empty star
      }
  }
  return $stars;
}

function star($star) {
  $star_html = '';
  for ($i = 1; $i <= 5; $i++) {
    if ($i <= $star) {
      $star_html .= '<i class="fas fa-star rating-data filled" data-rating="' . $i . '" style="color: gold;"></i>';
    } else {
      $star_html .= '<i class="fas fa-star rating-data" data-rating="' . $i . '" style="color: #ddd;"></i>';
    }
  }
  return $star_html;
}

function star_input($star) {
  $star_html = '';
  for ($i = 1; $i <= 5; $i++) {
    if ($i <= $star) {
      $star_html .= '<span class="rating__item"><span class="material-icons review_star" style="color: gold;">star</span></span>';
    } else {
      $star_html .= '<span class="rating__item"><span class="material-icons review_star" style="color: #ddd;">star_border</span></span>';
    }
  }
  return $star_html;
}