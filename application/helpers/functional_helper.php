
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function star($star)
{
  if($star == 0){
    $star_html = '
    <i class="fas fa-star rating-data " data-rating="1"></i>
    <i class="fas fa-star rating-data " data-rating="2"></i>
    <i class="fas fa-star rating-data " data-rating="3"></i>
    <i class="fas fa-star rating-data " data-rating="4"></i>
    <i class="fas fa-star rating-data " data-rating="5"></i>
    ';
  }

  if($star == 1){
    $star_html = '
    <i class="fas fa-star rating-data  filled" data-rating="1"></i>
    <i class="fas fa-star rating-data " data-rating="2"></i>
    <i class="fas fa-star rating-data " data-rating="3"></i>
    <i class="fas fa-star rating-data " data-rating="4"></i>
    <i class="fas fa-star rating-data " data-rating="5"></i>
    ';
  }

  if($star == 2){
    $star_html = '
    <i class="fas fa-star rating-data  filled" data-rating="1"></i>
    <i class="fas fa-star rating-data  filled" data-rating="2"></i>
    <i class="fas fa-star rating-data " data-rating="3"></i>
    <i class="fas fa-star rating-data " data-rating="4"></i>
    <i class="fas fa-star rating-data " data-rating="5"></i>
    ';
  }

  if($star == 3){
    $star_html = '
    <i class="fas fa-star rating-data  filled" data-rating="1"></i>
    <i class="fas fa-star rating-data  filled" data-rating="2"></i>
    <i class="fas fa-star rating-data  filled" data-rating="3"></i>
    <i class="fas fa-star rating-data " data-rating="4"></i>
    <i class="fas fa-star rating-data " data-rating="5"></i>
    ';
  }

  if($star == 4){
    $star_html = '
    <i class="fas fa-star rating-data  filled" data-rating="1"></i>
    <i class="fas fa-star rating-data  filled" data-rating="2"></i>
    <i class="fas fa-star rating-data  filled" data-rating="3"></i>
    <i class="fas fa-star rating-data  filled" data-rating="4"></i>
    <i class="fas fa-star rating-data " data-rating="5"></i>
    ';
  }

  if($star == 5){
    $star_html = '
    <i class="fas fa-star rating-data  filled" data-rating="1"></i>
    <i class="fas fa-star rating-data  filled" data-rating="2"></i>
    <i class="fas fa-star rating-data  filled" data-rating="3"></i>
    <i class="fas fa-star rating-data  filled" data-rating="4"></i>
    <i class="fas fa-star rating-data  filled" data-rating="5"></i>
    ';
  }

    return $star_html;
}

function star_input($star)
  {
    if($star == 0){
      $star_html = '<span class="rating__item"><span class="material-icons review_star">star_border</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>';
    }

    if($star == 1){
      $star_html = '<span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>';
    }

    if($star == 2){
      $star_html = '<span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>';
    }

    if($star == 3){
      $star_html = '<span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>';
    }

    if($star == 4){
      $star_html = '<span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star_border</span></span>';
    }

    if($star == 5){
      $star_html = '<span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star</span></span>
       <span class="rating__item"><span class="material-icons review_star">star</span></span>';
    }

      return $star_html;
  }   