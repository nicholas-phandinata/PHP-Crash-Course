<?php
      $constantVar = 12345;

      function utilFunc($timezone) {
            echo "<br> $timezone";
      }

      class Book {
            /**
            * @SuppressWarnings(PHPMD.ElseExpression)
            */
            // var $title;
            // var $author;
            // var $pages;
            // var $rating;

            //visibility modifier
            public $title;
            public $author;
            public $pages;
            private $rating;

            function __construct($aTitle, $aAuthor, $aPages, $aRating)
            {
                  $this->title = $aTitle;
                  $this->author = $aAuthor;
                  $this->pages = $aPages;
                  // $this->rating = $aRating;
                  $this->setRating($aRating);
                  // echo "Created new book <br>";
            }

            function isLongBook() {
                  if ($this->pages > 450) {
                        return true;
                  }
                  return false;
            }

            function getRating() {
                  return $this->rating;
            }


            function setRating($setRating) {
                  if ($setRating == "NR" || $setRating == "R" || $setRating == "T" || $setRating == "G"){
                        return $this->rating = $setRating;
                  }
                  return $this->rating = "Invalid Rating";
                  // $this->rating = $setRating;
            }
      }

      class Chef {
            function makeChicken() {
                  echo "The chef makes chicken <br>";
            }

            function makeSalad() {
                  echo "The chef makes salad <br>";
            }

            function makeBurger() {
                  echo "The chef makes burger <br>";
            }
      }

      class ProChef extends Chef{
            function makeSpecialDish() {
                  echo "Special dish <br>";
            }

            function makeBurger()
            {
                  echo "Burger";
            }
      }
?>